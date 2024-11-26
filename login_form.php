<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password']; // Storing the raw password for testing

    // Debug: Print username
    echo "Username: " . $username . "<br>";

    // Use parameterized queries to prevent SQL injection
    $select = "SELECT * FROM events WHERE username = ?";
    $stmt = $conn->prepare($select);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        // Debug: Print the fetched row
        echo "<pre>";
        print_r($row);
        echo "</pre>";

        // Check if password matches
        if ($row['password'] == $password) { // Adjust this if using hashed passwords
            if ($row['user_type'] == 'admin') {
                $_SESSION['loggedin'] = true;
                $_SESSION['admin_name'] = $row['name'];
                header('location:admin.html');
            } elseif ($row['user_type'] == 'user') {
                $_SESSION['loggedin'] = true;
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_id'] = $row['id'];
                header('location:clientpanel.php');
            }
        } else {
            $error[] = 'Incorrect password!';
        }
    } else {
        $error[] = 'No user found with that username!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
   <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>Login Now</h3>
      <?php
      if (isset($error)) {
         foreach ($error as $error) {
            echo '<span class="error-msg">' . $error . '</span>';
         }
      }
      ?>
      <input type="text" name="username" required placeholder="Enter your username">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Login Now" class="form-btn">
   </form>
</div>

</body>
</html>