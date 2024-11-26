<?php
// Database connection settings
include('dbconnection.php');

// Insert form data into 'photos' table when form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch the form data
    $wname = $_POST['wedding-name'];
    $wdate = $_POST['wedding-date'];
    $glink = $_POST['g-drive-url'];

    // Prepare and execute the insert query using prepared statements
    $stmt = $connection->prepare("INSERT INTO photos (wedding_name, date, google_drive_link) VALUES (?, ?, ?)");

    // Bind the parameters (use "sss" for three string variables)
    $stmt->bind_param("sss", $wname, $wdate, $glink);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Data Inserted Successfully')</script>";
    } else {
        echo "<script>alert('Error Inserting Data')</script>";
    }

    // Close the statement
    $stmt->close();
}

// Fetch all the data from the 'photos' table after inserting new data
$query = "SELECT wedding_name, date, google_drive_link FROM photos";
$result = $connection->query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport" 
        content="width=device-width, 
        initial-scale=1.0">
    <link rel="stylesheet" 
        href="admin.css">
        
    <link rel="stylesheet" 
        href="responsive.css">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo">ELVI</div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" 
                id="menuicn" 
                alt="menu-icon">
        </div>

        <div class="searchbar">
            <input type="text" placeholder="Search">
            <div class="searchbtn">
                <i class="material-icons icn srchicn" id="searchbar">search</i>
            </div>
        </div>
        


        </div>

        <div class="message">
            <div class="circle"></div>
            <i class="material-icons" id="message">notifications</i>
            <div class="dp">
                <i class="material-icons icn srchicn" id="dp">account_circle</i>
              </div>
        </div>

    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <i class="material-icons icn srchicn" id="searchbar">dashboard</i>

                        <h3> Dashboard</h3>
                    </div>

                    <div class="option2 nav-option">
                        <i class="material-icons icn srchicn" id="searchbar">event</i>

                        <h3><a href="events.php" style="text-decoration: none;">Events</a></h3>

                    </div>

                    <div class="nav-option option3">
                        <i class="material-icons icn srchicn" id="searchbar">upload</i>

                        <h3><a href="uploadphotos.php" style="text-decoration: none;"> Upload Photos</a></h3>
                    </div>

                    <div class="nav-option option4">
                        <i class="material-icons icn srchicn" id="searchbar">manage_accounts</i>
                        <h3><a href="clientmgmt.php" style="text-decoration: none;">Client Managemnt</a></h3>
                    </div>

                    <div class="nav-option option5">
                        <i class="material-icons icn srchicn" id="searchbar">person_4</i>
                        <h3><a href="guestmgmt.php" style="text-decoration: none;">Guest Management</a></h3>
                    </div>

                    <div class="nav-option logout">
                        <i class="material-icons icn srchicn" id="searchbar">calendar_month</i>
                        <h3> <a href="taskcalendar.html" style="text-decoration: none;">Task Calendar</a></h3>
                    </div>
            
                </div>
            </nav>
</div>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELVI - Upload Wedding Photos</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
<div class="upload-form">
        <form method="POST" enctype="multipart/form-data">
            <h3>Wedding Details</h3>
            <input type="text" name="wedding-name" placeholder="Wedding Name" required>
            <input type="date" name="wedding-date" id="wedding-date" required>

            <label for="drive-url">Google Drive URL:</label>
            <input type="url" name="g-drive-url" id="drive-url" placeholder="https://drive.google.com/..." required>

            <button id="upload-btn" type="submit">Upload</button>
        </form>
    </div>
    <div class="uploaded-list">
        <h2>Uploaded Weddings</h2>
        <table id="uploads-table">
            <thead>
                <tr>
                    <th>Wedding Name</th>
                    <th>Date</th>
                    <th>Google Drive Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are any records in the 'photos' table
                if ($result->num_rows > 0) {
                    // Loop through the data and display it in the table
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['wedding_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['date']) . "</td>";
                        echo "<td><a href='" . htmlspecialchars($row['google_drive_link']) . "' target='_blank'>Google Drive Link</a></td>";
                        echo "<td><button>Delete</button></td>"; // Placeholder for any future actions like delete
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data available</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="admin.js"></script>
</body>

<?php
// Close the database connection
mysqli_close($connection);
?>

</html>