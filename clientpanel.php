<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "elvi";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get the guest list
function getGuestList($conn) {
    // Get the logged-in user's ID
    $userId = $_SESSION['user_id']; 

    // SQL query to retrieve records for the logged-in user
    $sql = "SELECT * FROM events WHERE id = '$userId'"; 
    $result = $conn->query($sql);

    $guests = [];

    if ($result->num_rows > 0) {
        // Fetch each row as an associative array
        while($row = $result->fetch_assoc()) {
            $guests[] = $row;
        }
    }
    return $guests;
}

// Fetch the guest list from the database
$guests = getGuestList($conn);

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELVI - Guest List</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- Header section -->
   <!-- Header section -->
   <header>
        <div class="logosec">
            <div class="logo">Welcome to Elvi Events</div>
            <!-- <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" id="menuicn" alt="menu-icon"> -->
        </div>
        <!-- <div class="searchbar">
            <input type="text" placeholder="Search">
            <div class="searchbtn">
                <i class="material-icons icn" id="search-icon">search</i>
            </div>
        </div>
        <div class="message">
            <div class="circle"></div>
            <i class="material-icons" id="message-icon">notifications</i>
            <div class="dp">
                <i class="material-icons icn" id="dp-icon">account_circle</i>
            </div>
        </div> -->
    </header>

    <!-- <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <i class="material-icons icn" id="dashboard-icon">dashboard</i>
                        <h3>Dashboard</h3>
                    </div>
            
                    <div class="nav-option option3">
                        <i class="material-icons icn srchicn" id="searchbar">upload</i>

                        <h3><a href="gallery.php" style="text-decoration: none;"> Gallery</a></h3>
                    </div>

                    

                    <div class="nav-option option5">
                        <i class="material-icons icn srchicn" id="searchbar">person_4</i>
                        <h3><a href="guestmgmt.php" style="text-decoration: none;">Guest List</a></h3>
                    </div>

                    <div class="nav-option logout">
                        <i class="material-icons icn srchicn" id="searchbar">calendar_month</i>
                        <h3> <a href="taskcalendar.html" style="text-decoration: none;">Task Calendar</a></h3>
                    </div>
                </div>
            </nav>
        </div> -->

    <div class="main-container">
        <section class="clients-section">
            <!-- <h2>Welcome to Elvi</h2> -->
            <table id="guestList" class="client-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Username</th>
                        <th>Google Drive Link</th>
                        <th>Link for Photos</th>
                    </tr>
                </thead>
                <tbody>
    <?php
    // Loop through each guest and output a row
    foreach ($guests as $guest) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($guest['title']) . "</td>";
        echo "<td>" . htmlspecialchars($guest['description']) . "</td>";
        echo "<td>" . htmlspecialchars($guest['location']) . "</td>";
        echo "<td>" . htmlspecialchars($guest['username']) . "</td>";
        echo "<td><a href='" . htmlspecialchars($guest['gdlclient']) . "' target='_blank'>Client Link</a></td>";
        echo "<td><a href='" . htmlspecialchars($guest['uploadphotos']) . "' target='_blank'>Upload Photos</a></td>";
        echo "</tr>";
    }
    ?>
</tbody>

            </table>
        </section>
    </div>
</body>
</html>
