<?php
// Database configuration
$servername = "localhost"; // Update with your server details if needed
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "elvi"; 

// Create a connection to the database
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch the form data
    $side = $_POST['side'];
    $relation = $_POST['relation'];
    $names = $_POST['names'];
    $guest_count = $_POST['guest_count'];
    $from_location = $_POST['from_location'];
    $whatsapp_number = $_POST['whatsapp_number'];
    $details_sent_message = $_POST['details_sent_message'];
    $invitation_message = $_POST['invitation_message'];
    $email_id = $_POST['email_id'];
    $remarks = $_POST['remarks'];
    $id_status = $_POST['id_status'];
    $arrival_date = $_POST['arrival_date'];
    $arrival_time = $_POST['arrival_time'];
    $arrival_mot = $_POST['arrival_mot'];
    $arrival_location = $_POST['arrival_location'];
    $arrival_notes = $_POST['arrival_notes'];
    $departure_date = $_POST['departure_date'];
    $departure_time = $_POST['departure_time'];
    $departure_mot = $_POST['departure_mot'];
    $departure_location = $_POST['departure_location'];
    $departure_notes = $_POST['departure_notes'];
    $first_call_status = $_POST['first_call_status'];

    // Prepare and execute the insert query using prepared statements
    $stmt = $connection->prepare("INSERT INTO rsvp (side, relation, names, guest_count, from_location, whatsapp_number, details_sent_message, invitation_message, email_id, remarks, id_status, arrival_date, arrival_time, arrival_mot, arrival_location, arrival_notes, departure_date, departure_time, departure_mot, departure_location, departure_notes, first_call_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("sssissssssssssssssssss", $side, $relation, $names, $guest_count, $from_location, $whatsapp_number, $details_sent_message, $invitation_message, $email_id, $remarks, $id_status, $arrival_date, $arrival_time, $arrival_mot, $arrival_location, $arrival_notes, $departure_date, $departure_time, $departure_mot, $departure_location, $departure_notes, $first_call_status);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('RSVP submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error in submitting RSVP.');</script>";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSVP Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('newimage.jpeg');
            background-size: cover;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            overflow: hidden;
            width: 100%;
            max-width: 800px;
            padding: 30px;
            box-sizing: border-box;
        }
        .form-header {
            font-family: 'Dancing Script', cursive;
            font-size: 36px;
            font-weight: bold;
            color: #4a90e2;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }
        input, textarea {
            width: 95%;
            padding: 8px;
            margin: 4px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: #4a90e2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.4);
        }
        .submit-button {
            background-color: #4a90e2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
            text-align: center;
        }
        .submit-button:hover {
            background-color: #357ab7;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 class="form-header">RSVP Form</h1>
        <form method="POST">
            <table>
                <tr>
                    <td>Groom / Bride's Side:</td>
                    <td><input type="text" name="side" placeholder="Groom / Bride's Side" required></td>
                </tr>
                <tr>
                    <td>Relation:</td>
                    <td><input type="text" name="relation" placeholder="Relation" required></td>
                </tr>
                <tr>
                    <td>Names:</td>
                    <td><input type="text" name="names" placeholder="Names" required></td>
                </tr>
                <tr>
                    <td>Guest Count:</td>
                    <td><input type="number" name="guest_count" placeholder="Guest Count" required></td>
                </tr>
                <tr>
                    <td>From Location:</td>
                    <td><input type="text" name="from_location" placeholder="From" required></td>
                </tr>
                <tr>
                    <td>WhatsApp Number:</td>
                    <td><input type="tel" name="whatsapp_number" placeholder="WhatsApp Mobile Number" required></td>
                </tr>
                <tr>
                    <td>Details Sent Message:</td>
                    <td><textarea name="details_sent_message" placeholder="Details Sent Message"></textarea></td>
                </tr>
                <tr>
                    <td>Invitation Message:</td>
                    <td><textarea name="invitation_message" placeholder="Invitation Message"></textarea></td>
                </tr>
                <tr>
                    <td>Email ID:</td>
                    <td><input type="email" name="email_id" placeholder="Email ID (if guest has to be contacted via email)"></td>
                </tr>
                <tr>
                    <td>Remarks:</td>
                    <td><textarea name="remarks" placeholder="Remarks"></textarea></td>
                </tr>
                <tr>
                    <td>ID Status:</td>
                    <td><input type="text" name="id_status" placeholder="ID Status"></td>
                </tr>
                <tr>
                    <td>Arrival Date:</td>
                    <td><input type="date" name="arrival_date" placeholder="Arrival Date"></td>
                </tr>
                <tr>
                    <td>Arrival Time:</td>
                    <td><input type="time" name="arrival_time" placeholder="Arrival Time"></td>
                </tr>
                <tr>
                    <td>Arrival MOT:</td>
                    <td><input type="text" name="arrival_mot" placeholder="MOT (Flight/Train/Self)"></td>
                </tr>
                <tr>
                    <td>Arrival Location:</td>
                    <td><input type="text" name="arrival_location" placeholder="Arrival Location"></td>
                </tr>
                <tr>
                    <td>Arrival Notes:</td>
                    <td><textarea name="arrival_notes" placeholder="Arrival Notes"></textarea></td>
                </tr>
                <tr>
                    <td>Departure Date:</td>
                    <td><input type="date" name="departure_date" placeholder="Departure Date"></td>
                </tr>
                <tr>
                    <td>Departure Time:</td>
                    <td><input type="time" name="departure_time" placeholder="Departure Time"></td>
                </tr>
                <tr>
                    <td>Departure MOT:</td>
                    <td><input type="text" name="departure_mot" placeholder="MOT (Flight/Train/Self)"></td>
                </tr>
                
                        <tr>
                            <td>Departure Location:</td>
                            <td><input type="text" name="departure_location" placeholder="Departure Location"></td>
                        </tr>
                        <tr>
                            <td>Departure Notes:</td>
                            <td><textarea name="departure_notes" placeholder="Departure Notes"></textarea></td>
                        </tr>
                        <tr>
                            <td>First Call Status:</td>
                            <td><input type="text" name="first_call_status" placeholder="First Call Status"></td>
                        </tr>
                    </table>
                    <button type="submit" class="submit-button">Submit RSVP</button>
                </form>
            </div>
        </body>
        </html>
        \