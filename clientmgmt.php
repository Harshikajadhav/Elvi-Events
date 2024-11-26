<?php
// Include database connection file
include('session_check.php');
include('dbconnection.php');

// Fetch all pending clients (excluding rejected ones) from 'contactdetails'
$query_pending = "SELECT * FROM contactdetails WHERE status != 'rejected'";
$result_pending = mysqli_query($connection, $query_pending);

// Fetch all confirmed clients from 'acceptedclients'
$query_confirmed = "SELECT * FROM acceptedclients";
$result_confirmed = mysqli_query($connection, $query_confirmed);



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
   

    <!-- Button to open the form for manual entry -->
    <button id="open-form-btn">Add Client Manually</button>

    <!-- Form for adding client details -->
    <div id="manual-entry-form" style="display: none;">
    <form method="POST">
        <input id="primary-contact-name" name="pname" placeholder="Primary Contact Name">
        <input id="brides-name" name="bname" placeholder="Bride's Name">
        <input id="grooms-name" name="gname" placeholder="Groom's Name">
        <input id="contact-no" name="contactnum" placeholder="Contact No">
        <input id="wedding-date" name="weddingdate" type="datetime-local">
        <button type="submit">Add Client</button>
        </form>
    </div>

    <!-- Tables for Clients -->
    <section class="clients-section">
    <!-- Pending Clients -->
    <h2>Pending Clients</h2>
    <table id="pending-clients">
        <thead>
            <tr>
                <th>Primary Name</th>
                <th>Bride Name</th>
                <th>Groom Name</th>
                <th>Contact Number</th>
                <th>Wedding Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result_pending) > 0) {
                while ($row = mysqli_fetch_assoc($result_pending)) {
                    echo "<tr>";
                    echo "<td>{$row['PrimaryName']}</td>";
                    echo "<td>{$row['BrideName']}</td>";
                    echo "<td>{$row['GroomName']}</td>";
                    echo "<td>{$row['ContactNum']}</td>";
                    echo "<td>{$row['WeddingDate']}</td>";
                    echo "<td>
                            <button class='accept-btn' data-id='{$row['ContactNum']}'>Accept</button>
                            <button class='reject-btn' data-id='{$row['ContactNum']}'>Reject</button>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No pending clients found.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Confirmed Clients -->
    <h2>Confirmed Clients</h2>
    <table id="confirmed-clients">
        <thead>
            <tr>
                <th>Primary Name</th>
                <th>Bride Name</th>
                <th>Groom Name</th>
                <th>Contact Number</th>
                <th>Wedding Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result_confirmed) > 0) {
                while ($row = mysqli_fetch_assoc($result_confirmed)) {
                    echo "<tr>";
                    echo "<td>{$row['PrimaryName']}</td>";
                    echo "<td>{$row['BrideName']}</td>";
                    echo "<td>{$row['GroomName']}</td>";
                    echo "<td>{$row['ContactNum']}</td>";
                    echo "<td>{$row['WeddingDate']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No confirmed clients found.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.accept-btn').forEach(button => {
            button.addEventListener('click', function() {
                const contactNum = this.getAttribute('data-id');
                handleClientAction(contactNum, 'accept');
            });
        });

        document.querySelectorAll('.reject-btn').forEach(button => {
            button.addEventListener('click', function() {
                const contactNum = this.getAttribute('data-id');
                handleClientAction(contactNum, 'reject');
            });
        });

        function handleClientAction(contactNum, action) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "client_action.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onload = function() {
                if (this.status == 200) {
                    location.reload();  // Reload the page after action
                }
            };
            xhr.send("contactNum=" + contactNum + "&action=" + action);
        }
    });
    </script>
</section>

</body>
</html>