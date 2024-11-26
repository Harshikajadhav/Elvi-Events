<?php
// Start PHP block to handle form submission

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root"; // Change as needed
    $password = ""; // Change as needed
    $dbname = "elvi"; // Change as needed

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $location = $_POST['location'];
    $items = $_POST['items'];

    // Handle file upload
    $imagePath = "";
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            $imagePath = $uploadFile;
        } else {
            echo "File upload failed.";
            exit;
        }
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO itinerary (location, items, image_path) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $location, $items, $imagePath);

    // Execute
    if ($stmt->execute()) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELVI - Upload Itinerary</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
            width: 100%;
            margin-top: 20px;
        }
        textarea, input[type="text"], input[type="file"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
        }
        #displayArea {
            margin-top: 20px;
        }
    </style>
</head>
<body>
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

        <div class="container">
            <h2>Admin Panel</h2>
            <form id="adminForm" action="upload_itinerary.php" method="POST" enctype="multipart/form-data">
                <!-- Location Input Section -->
                <h3>Step 1: Enter Location</h3>
                <input id="locationInput" name="location" type="text" placeholder="Enter location name" required>
                
                <!-- Map Display -->
                <div id="map"></div>
                
                <!-- Items List and Image Upload Section -->
                <h3>Step 2: Enter List of Things to Get</h3>
                <input id="itemsInput" name="items" type="text" placeholder="Enter list of things to get (comma-separated)">
                
                <h3>Step 3: Upload Itinerary Image</h3>
                <input id="itineraryImage" name="image" type="file" accept="image/*">
                
                <button type="submit">Submit</button>
            </form>
            <div id="displayArea"></div>
        </div>
    </div>
    
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initialize the map
        const map = L.map('map').setView([51.505, -0.09], 13); // Default view (London)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        async function showLocationOnMap() {
            const locationName = document.getElementById("locationInput").value.trim();
            if (!locationName) {
                alert("Please enter a location.");
                return;
            }
            const response = await fetch('https://nominatim.openstreetmap.org/search?q=${encodeURIComponent(locationName)}&format=json&addressdetails=1');
            const data = await response.json();

            if (data.length > 0) {
                const coords = [parseFloat(data[0].lat), parseFloat(data[0].lon)];
                L.marker(coords).addTo(map)
                    .bindPopup(<b>${data[0].display_name}</b>)
                    .openPopup();
                map.setView(coords, 13);
            } else {
                alert("Location not found.");
            }
        }

        document.querySelector('button[type="submit"]').addEventListener('click', showLocationOnMap);
    </script>
</body>
</html>