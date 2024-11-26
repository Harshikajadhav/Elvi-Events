<?php
// Include database connection file
include 'dbconnection.php';

if (isset($_POST['contactNum']) && isset($_POST['action'])) {
    $contactNum = $_POST['contactNum'];
    $action = $_POST['action'];

    if ($action == 'accept') {
        // Move client to 'acceptedclients' table
        if ($stmt = $connection->prepare("SELECT * FROM contactdetails WHERE ContactNum = ?")) {
            $stmt->bind_param("s", $contactNum);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($row = $result->fetch_assoc()) {
                if ($insert_stmt = $connection->prepare("INSERT INTO acceptedclients (PrimaryName, BrideName, GroomName, ContactNum, WeddingDate) VALUES (?, ?, ?, ?, ?)")) {
                    $insert_stmt->bind_param("sssss", $row['PrimaryName'], $row['BrideName'], $row['GroomName'], $row['ContactNum'], $row['WeddingDate']);
                    $insert_stmt->execute();
                }

                if ($delete_stmt = $connection->prepare("DELETE FROM contactdetails WHERE ContactNum = ?")) {
                    $delete_stmt->bind_param("s", $contactNum);
                    $delete_stmt->execute();
                }
            }
        }
    } elseif ($action == 'reject') {
        // Update the status to 'rejected' in 'contactdetails'
        if ($update_stmt = $connection->prepare("UPDATE contactdetails SET status = 'rejected' WHERE ContactNum = ?")) {
            $update_stmt->bind_param("s", $contactNum);
            $update_stmt->execute();

            if ($update_stmt->affected_rows > 0) {
                echo json_encode(['status' => 'success', 'message' => 'Client rejected successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error rejecting the client.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to prepare the SQL statement.']);
        }
    }

    if ($connection->error) {
        echo json_encode(['status' => 'error', 'message' => $connection->error]);
    }
}

// Close the database connection
mysqli_close($connection);
?>
