<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            session_start();
            $_SESSION['user_id'] = $row['id']; // Store user ID in session
            header("Location: dashboard.php"); // Redirect to dashboard or another page
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }
}
?>

<!-- Login Form HTML -->
<form action="" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <label for="password">Kata Sandi:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="MASUK">
</form>
