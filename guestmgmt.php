<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elvi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the RSVP table
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELVI</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- <style>
    .table-container {
    max-height: 400px;  /* Keep the maximum height for scroll */
    overflow-y: auto;   /* Enable vertical scrolling */
    margin-top: 20px;
    border: 1px solid #ddd;
}

table {
    width: 100%;              /* Ensures the table takes up the full width */
    border-collapse: collapse; /* Ensures no extra spaces around the cells */
}

thead th {
    position: sticky;   /* Keeps the header fixed at the top */
    top: 0;             /* Stick to the top */
    background-color: #f2f2f2;
    z-index: 1;         /* Ensures the header is above the table rows */
}

table th, table td {
    border: 1px solid #ddd;  /* Border for both header and rows */
    padding: 8px;
    text-align: left;
}

tbody {
    display: block;  /* Makes the body scrollable separately from the header */
    max-height: 400px; /* Matches the container’s max height */
    overflow-y: auto; /* Allows for vertical scrolling */
}

thead {
    display: table;   /* Keeps the header as part of the table */
    width: 100%;      /* Ensures header spans full table width */
    table-layout: fixed; /* Keeps column widths consistent */
}

tbody tr {
    display: table;
    width: 100%;
    table-layout: fixed;
}

</style> -->
</head>

<body>

    <!-- for header part -->
    <header>
        <div class="logosec">
            <div class="logo">ELVI</div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png" class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>

        <div class="searchbar">
            <input type="text" placeholder="Search">
            <div class="searchbtn">
                <i class="material-icons icn srchicn" id="searchbar">search</i>
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

        <!-- Tables for Clients -->
        <section class="clients-section" style="margin-left: 250px;">
            <h2>Guest List</h2>
            <div class="table-container" style="width: 20%" !important>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Username</th>
                            <th>Google Drive Link (Admin)</th>
                            <th>Google Drive Link (Client)</th>
                            <th>Upload Photos Links</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["title"] . "</td>
                                    <td>" . $row["description"] . "</td>
                                    <td>" . $row["location"] . "</td>
                                    <td>" . $row["username"] . "</td>
                                    <td>" . $row["gdladmin"] . "</td>
                                    <td>" . $row["gdlclient"] . "</td>
                                    <td>" . $row["uploadphotos"] . "</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='23'>No records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <script src="admin.js"></script>

</body>

</html>
