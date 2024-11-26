<!DOCTYPE html>
<?php
include('session_check.php');
include('dbconnection.php');
?>

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

    <!-- Header Section -->
    <header>
        <div class="logosec">
            <div class="logo">ELVI</div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" id="menuicn" alt="menu-icon">
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

    <!-- Main Container -->
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <i class="material-icons icn srchicn" id="searchbar">dashboard</i>
                        <h3>Dashboard</h3>
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

        <!-- Google Calendar Iframe -->
        <div class="calendar-container">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=UTC&bgcolor=%23ffffff&src=c2VqYWwuZWx2aWV2ZW50c0BnbWFpbC5jb20&src=NDE5ODBmZWI3MGZhODEyYmJmMGM5MDkzYjU5ZmNjODIyMTcyYjVhNzUyNzI1NTIzYWQ0MmU0ZTUxNWU3ODZlZUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%23A79B8E&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>

    <script src="script.js"></script>
</body>

</html>
