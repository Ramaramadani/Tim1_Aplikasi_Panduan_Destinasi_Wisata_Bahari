<?php
include 'db.php'; // Include database connection
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Delete user from database
    $sql = "DELETE FROM users WHERE id=$user_id";
    if ($conn->query($sql) === TRUE) {
        echo "Account deleted successfully.";
        session_destroy();
        header("Location: login.php"); // Redirect to login page after deletion
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
