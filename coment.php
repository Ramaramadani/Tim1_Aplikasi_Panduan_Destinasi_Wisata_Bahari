<?php
// Proses pengiriman form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "beach_tickets";

    // Simulasi data user dan pantai (diambil dari sesi atau sistem login)
    $user = "UserLogin"; // Ganti dengan data dari session login
    $beach_name = "Pantai1"; // Ganti dengan identifikasi pantai dari URL atau sistem

    // Ambil komentar dari form
    $comment = $_POST['comment'];

    // Buat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk menyimpan data
    $sql = "INSERT INTO comments (username, comment, beach_name) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user, $comment, $beach_name);

    if ($stmt->execute()) {
        echo "Komentar berhasil disimpan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar Pantai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Berikan Komentar Anda</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="comment">Komentar Anda:</label>
                <textarea id="comment" name="comment" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Kirim Komentar</button>
            </div>
        </form>
    </div>
</body>
</html>
