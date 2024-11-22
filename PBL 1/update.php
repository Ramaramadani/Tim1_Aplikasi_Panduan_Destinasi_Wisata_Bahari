<?php
include 'db.php'; // Include database connection
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$user_id";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Fetch current user data
    $sql = "SELECT * FROM users WHERE id=$user_id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
} else {
    echo "You need to be logged in to update your information.";
}
?>

<!-- Update Form HTML -->
<form action="" method="POST">
    <label for="name">Nama:</label>
    <input type="text" name="name" value="<?= $user['name'] ?>" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>
    <input type="submit" value="Update">
</form>
