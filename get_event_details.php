<?php
// Ensure proper access and database connection
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "oceara";        

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch event details
if (isset($_GET['id'])) {
    $eventId = (int)$_GET['id'];
    $sql = "SELECT event_text FROM events WHERE id = $eventId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);  // Return as JSON
    } else {
        echo json_encode(['event_text' => 'Event not found']);
    }
}
?>
