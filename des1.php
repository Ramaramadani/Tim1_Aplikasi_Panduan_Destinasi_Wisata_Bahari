<?php
session_start(); // Muat sesi

// Cek apakah pengguna sudah login
$name = isset($_SESSION['name']) ? $_SESSION['name'] : null; 
$email = isset($_SESSION['email']) ? $_SESSION['email'] : null; 
$initial = $name ? strtoupper(substr($name, 0, 1)) : ''; 
$color = $email ? sprintf('#%06X', crc32($email) & 0xFFFFFF) : '';

// Database connection
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "oceara";        

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Event
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['event_text']) && !isset($_POST['event_id'])) {
    $eventText = $conn->real_escape_string($_POST['event_text']);
    $sql = "INSERT INTO events (event_text) VALUES ('$eventText')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New event added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Edit Event
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['event_id']) && isset($_POST['event_text'])) {
    $eventId = (int)$_POST['event_id'];
    $eventText = $conn->real_escape_string($_POST['event_text']);
    
    $sql = "UPDATE events SET event_text = '$eventText' WHERE id = $eventId";
    
    if ($conn->query($sql) === TRUE) {
        echo "Event updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Delete Event
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['event_id'])) {
    $eventId = (int)$_POST['event_id'];
    
    $sql = "DELETE FROM events WHERE id = $eventId";
    
    if ($conn->query($sql) === TRUE) {
        echo "Event deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Ambil daftar event
$sql = "SELECT * FROM events ORDER BY id DESC"; // Mengambil semua event terbaru
$result = $conn->query($sql);

$events = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <title>HOME</title>
  <link rel="stylesheet" href="elemen/css/des1.css" />
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back_ios" />
</head>
<body>
<header>
  <div class="navbar">
    <div class="back">
      <a href="destinasi.php">
        <button class="material-symbols-outlined">arrow_back_ios</button>
        <button class="back-button">BACK</button>
      </a>
    </div>
    
    <!-- Menampilkan user avatar di pojok kanan atas -->
    <?php if ($email): ?>
      <div id="user">
        <!-- Avatar pengguna dengan inisial nama -->
        <div class="user-avatar" style="background-color: <?php echo htmlspecialchars($color); ?>;">
          <?php echo htmlspecialchars($initial); ?>
        </div>
        <!-- Nama pengguna ditampilkan di bawah avatar -->
        <div class="user-name">
          <?php echo htmlspecialchars($name); ?>
        </div>
      </div>
    <?php else: ?>
      <a href="login.php" id="user">
        <img src="elemen/image/user-circle-fill.png" alt="user-icon" />
      </a>
    <?php endif; ?>
  </div>
</header>

<div class="tentang">
  <h1>MIROTA</h1>
  <p>
    Bagi para pecinta fotografi, Pantai Mirota adalah surga. Dengan latar belakang bebatuan karang yang eksotis dan air laut yang jernih, pantai ini menjadi spot favorit untuk mengabadikan momen indah. Selain berfoto, Anda juga bisa menikmati berbagai aktivitas air yang seru.
  </p>
</div>

<footer>
  <div class="container">
    <img src="elemen/image/4.png" alt="Gambar 1" onclick="showMap()">
    <img src="elemen/image/3.png" alt="Gambar 2" onclick="redirectToForm()">
    <img src="elemen/image/2.png" alt="Gambar 3" id="interactive-image" onclick="toggleEditMenu()">

    <!-- Menu Edit (hanya muncul jika pengguna login) -->
    <?php if ($email): ?>
      <div id="edit-menu" style="display: none;">
        <button onclick="addEvent()">Tambah Event</button>
        <div id="event-list">
          <ul>
            <?php foreach ($events as $event): ?>
              <li id="event-<?php echo $event['id']; ?>">
                <?php echo htmlspecialchars($event['event_text']); ?>
                <button onclick="editEvent(<?php echo $event['id']; ?>)">Edit</button>
                <button onclick="deleteEvent(<?php echo $event['id']; ?>)">Hapus</button>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    <?php endif; ?>
    <img src="elemen/image/1.png" alt="Gambar 4" onclick="ulasan()">
  </div>

  <!-- Tempat iframe akan muncul -->
  <div id="map-container" style="display:none;">
    <button id="close-map" onclick="hideMap()">Tutup Map</button>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.45567692759!2d104.17077247357562!3d0.7725102631624526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9a430dd6a2bdf%3A0xb72d9398051fc6de!2sPantai%20Mirota!5e0!3m2!1sen!2sid!4v1735654393891!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="card-wrapper">
    <ul class="card-list swiper-wrapper">
      <li class="card-item swiper-slide">
        <img src="elemen/image/mrt1.jpg" alt="img-1" class="image-item" />
      </li>
      <li class="card-item swiper-slide">
        <img src="elemen/image/mrt2.jpg" alt="img-2" class="image-item" />
      </li>
      <li class="card-item swiper-slide">
        <img src="elemen/image/mrt3.jpg" alt="img-3" class="image-item" />
      </li>
      <li class="card-item swiper-slide">
        <img src="elemen/image/mrt4.jpg" alt="img-4" class="image-item" />
      </li>
      <li class="card-item swiper-slide">
        <img src="elemen/image/mrt5.JPG" alt="img-5" class="image-item" />
      </li>
    </ul>
    <div class="swiper-button-next"></div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="elemen/js/destinasi.js"></script>

<script>
// Toggle the edit menu visibility
function toggleEditMenu() {
  var editMenu = document.getElementById('edit-menu');
  editMenu.style.display = editMenu.style.display === 'none' ? 'block' : 'none';
}

// Edit event
function editEvent(eventId) {
  var currentText = prompt("Edit Event Text:", document.getElementById('event-' + eventId).innerText);
  if (currentText !== null) {
    updateEventText(eventId, currentText);
  }
}

// Update event text in the database
function updateEventText(eventId, newText) {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "des1.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      alert("Event updated successfully!");
      location.reload(); // Reload to show updated event
    }
  };
  xhr.send("event_id=" + encodeURIComponent(eventId) + "&event_text=" + encodeURIComponent(newText));
}

// Delete event
function deleteEvent(eventId) {
  if (confirm("Are you sure you want to delete this event?")) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "des1.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        alert("Event deleted successfully!");
        document.getElementById('event-' + eventId).remove(); // Remove event from the list
      }
    };
    xhr.send("event_id=" + encodeURIComponent(eventId));
  }
}

// Add a new event
function addEvent() {
  var newEventText = prompt("Enter new event text:");
  if (newEventText !== null) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "des1.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        alert("New event added successfully!");
        location.reload(); // Reload to show new event
      }
    };
    xhr.send("event_text=" + encodeURIComponent(newEventText));
  }
}

function showMap() {
  var mapContainer = document.getElementById('map-container');
  mapContainer.style.display = 'flex';
}

function hideMap() {
  var mapContainer = document.getElementById('map-container');
  mapContainer.style.display = 'none';
}

function redirectToForm() {
  window.location.href = "beltik.php";
}

function ulasan() {
  window.location.href = "ulasan.php";
}
</script>
</body>
</html>
