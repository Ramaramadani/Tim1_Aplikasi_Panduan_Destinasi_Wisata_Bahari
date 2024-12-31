<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oceara";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // Jika gagal, tampilkan pesan error
}

// Memproses form saat disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $tujuan = $_POST['tujuan'];
    $jumlah = $_POST['jumlah'];
    $kodePemesanan = $_POST['kodePemesanan'];

    // Cek jika ada input yang kosong
    if (empty($nama) || empty($tanggal) || empty($tujuan) || empty($jumlah) || empty($kodePemesanan)) {
        echo "Semua field harus diisi!";
    } else {
        // Menyimpan data ke dalam database
        $sql = "INSERT INTO pembelian_tiket (nama, tanggal, tujuan, jumlah, kode_pemesanan) 
                VALUES ('$nama', '$tanggal', '$tujuan', '$jumlah', '$kodePemesanan')";

        // Periksa apakah query berhasil atau tidak
        if ($conn->query($sql) === TRUE) {
            echo "Data tiket berhasil disimpan!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;  // Menampilkan error jika ada masalah
        }
    }
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pembelian Tiket</title>
    <link rel="stylesheet" href="elemen/css/beltik.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="ticket-container">
      <div class="form-section">
        <h1>Form Pembelian Tiket</h1>
        <form id="ticketForm">
          <label for="nama">Nama:</label>
          <input
            type="text"
            id="nama"
            name="nama"
            placeholder="Masukkan nama Anda"
            required
          />

          <label for="tanggal">Tanggal:</label>
          <input type="date" id="tanggal" name="tanggal" required />

          <label for="tujuan">Tujuan:</label>
          <select id="tujuan" name="tujuan" required>
            <option value="Mirota">Mirota</option>
            <option value="Pantai Nongsa">Corner</option>
            <option value="Jembatan Barelang">Melur</option>
            <option value="Jembatan Barelang">Nongsa</option>
            <option value="Jembatan Barelang">Tanjung Pinggir</option>
          </select>

          <label for="jumlah">Jumlah Tiket:</label>
          <input
            type="number"
            id="jumlah"
            name="jumlah"
            min="1"
            max="10"
            placeholder="Jumlah tiket"
            required
          />

          <button type="submit">Pesan Tiket</button>
        </form>

        <div class="output" id="output" style="display: none"></div>
      </div>
    </div>
    <script src="elemen/js/beltik.js"></script>
  </body>
</html>
