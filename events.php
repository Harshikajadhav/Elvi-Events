
<?php
// Database connection settings

include('session_check.php');
include('dbconnection.php');

$event_id = 0;
$edit_mode = false;
$title = $description = $location = $username = $password = $user_type = $gdladmin = $gdlclient = $uploadphotos = '';

// Insert or Update form data into 'events' table when form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch the form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    $gdladmin = $_POST['gdladmin'];
    $gdlclient = $_POST['gdlclient'];
    $uploadphotos = $_POST['uploadphotos'];

    // Check if the form is for updating or inserting
    if (isset($_POST['event_id']) && !empty($_POST['event_id'])) {
        // Updating an existing event
        $event_id = $_POST['event_id'];
        $stmt = $connection->prepare("UPDATE events SET title = ?, description = ?, location = ?, username = ?, password = ?, user_type = ?, gdladmin = ?, gdlclient = ?, uploadphotos = ? WHERE id = ?");
$stmt->bind_param("sssssssssi", $title, $description, $location, $username, $password, $user_type, $gdladmin, $gdlclient, $uploadphotos, $event_id);


        if ($stmt->execute()) {
            echo "<script>alert('Event Updated Successfully');window.location='events.php';</script>";
        } else {
            echo "<script>alert('Error Updating Event');</script>";
        }
        $stmt->close();
    } else {
        // Insert new event
        $stmt = $connection->prepare("INSERT INTO events (title, description, location, username, password, user_type, gdladmin, gdlclient, uploadphotos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $title, $description, $location, $username, $password, $user_type, $gdladmin, $gdlclient, $uploadphotos);
        if ($stmt->execute()) {
            echo "<script>alert('Data Inserted Successfully');window.location='events.php';</script>";
        } else {
            echo "<script>alert('Error Inserting Data');</script>";
        }
        $stmt->close();
    }
}

// Handle event editing - fetch the existing data for a specific event
if (isset($_GET['edit_event_id'])) {
    $event_id = $_GET['edit_event_id'];
    $edit_mode = true;

    // Fetch the event details from the database
    $stmt = $connection->prepare("SELECT * FROM events WHERE id = ?");
    $stmt->bind_param("i", $event_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $event_data = $result->fetch_assoc();

    // Pre-fill the form with the event data
    $title = $event_data['title'];
    $description = $event_data['description'];
    $location = $event_data['location'];
    $username = $event_data['username'];
    $password = $event_data['password'];
    $user_type = $event_data['user_type'];
    $gdladmin = $event_data['gdladmin'];
    $gdlclient = $event_data['gdlclient'];
    $uploadphotos = $event_data['uploadphotos'];

    $stmt->close();
}

// Handle the deletion of an event
if (isset($_GET['delete_event_id'])) {
    $event_id = $_GET['delete_event_id'];

    // Prepare and execute the delete query
    $stmt = $connection->prepare("DELETE FROM events WHERE id = ?");
    $stmt->bind_param("i", $event_id);

    if ($stmt->execute()) {
        echo "<script>alert('Event Deleted Successfully');window.location='events.php';</script>";
    } else {
        echo "<script>alert('Error Deleting Event');</script>";
    }
    $stmt->close();
}

// Fetch the records from 'events' table
$query = "SELECT * FROM events";
$result = $connection->query($query);

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
</head>

<body>
    <!-- Header section -->
    <header>
        <div class="logosec">
            <div class="logo">ELVI</div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>
        <div class="searchbar">
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
        </div>
    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <i class="material-icons icn" id="dashboard-icon">dashboard</i>
                        <h3>Dashboard</h3>
                    </div>
                    <div class="option2 nav-option">
                        <i class="material-icons icn srchicn" id="searchbar">event</i>
                        <h3><a href="events.php" style="text-decoration: none;">Events</a></h3>
                    </div>

                    <div class="nav-option option3">
                        <i class="material-icons icn srchicn" id="searchbar">upload</i>
                        <h3><a href="uploadphotos.php" style="text-decoration: none;">Upload Photos</a></h3>
                    </div>

                    <div class="nav-option option4">
                        <i class="material-icons icn srchicn" id="searchbar">manage_accounts</i>
                        <h3><a href="clientmgmt.php" style="text-decoration: none;">Client Management</a></h3>
                    </div>

                    <div class="nav-option option5">
                        <i class="material-icons icn srchicn" id="searchbar">person_4</i>
                        <h3><a href="guestmgmt.php" style="text-decoration: none;">Guest Management</a></h3>
                    </div>

                    <div class="nav-option logout">
                        <i class="material-icons icn srchicn" id="searchbar">calendar_month</i>
                        <h3><a href="taskcalendar.html" style="text-decoration: none;">Task Calendar</a></h3>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-container">
                <h2><?php echo $edit_mode ? "Edit Event" : "Add New Event"; ?></h2>
                    <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                    <input type="text" name="title" placeholder="Title" value="<?php echo $title; ?>" required>
                    <input type="text" name="description" placeholder="Description" value="<?php echo $description; ?>" required>
                    <input type="text" name="location" placeholder="Location" value="<?php echo $location; ?>" required>
                    <input type="text" name="username" placeholder="Client Username" value="<?php echo $username; ?>">
                    <input type="text" name="password" placeholder="Client Password" value="<?php echo $password; ?>">
                    <select name="user_type">
         <option value="user" default>user</option>
         <option value="admin">admin</option>
      </select>

                    <input type="text" name="gdladmin" placeholder="Admin Google Drive Link" value="<?php echo $gdladmin; ?>">
                    <input type="text" name="gdlclient" placeholder="Client Google Drive Link" value="<?php echo $gdlclient; ?>">
                    <input type="text" name="uploadphotos" placeholder="Upload Drive Link for photos" value="<?php echo $uploadphotos; ?>">
                    <button type="submit"><?php echo $edit_mode ? "Update Event" : "Submit"; ?></button>
                </div>
            </form>
            <!-- Report Container -->
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-articles">Recent Articles</h1>
                    <button class="view-all">View All</button>
                </div>
                <table class="report-body">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Client Username</th>
                            <th>Client Password</th>
                            <th>User Type</th>
                            <th>Admin Link</th>
                            <th>Client Link</th>
                            <th>Upload Photos</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Check if there are any records in the 'events' table
                        if ($result && $result->num_rows > 0) {
                            // Loop through the data and display it in the table
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['location']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['password']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['user_type']) . "</td>";
                                echo "<td><a href='" . htmlspecialchars($row['gdladmin']) . "' target='_blank'>Admin Link</a></td>";
                                echo "<td><a href='" . htmlspecialchars($row['gdlclient']) . "' target='_blank'>Client Link</a></td>";
                                echo "<td><a href='" . htmlspecialchars($row['uploadphotos']) . "' target='_blank'>Upload Photos</a></td>";
                                echo "<td><a href='events.php?delete_event_id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this event?')\">Delete</a></td>";
                                echo "<td><a href='events.php?edit_event_id=" . $row['id'] . "'>Edit</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9'>No data available</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- <script src="./admin.js"></script> -->
</body>
</html>
