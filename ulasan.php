<?php
// Termasuk koneksi ke database
include('elemen/database/db.php');
session_start(); // Muat sesi

// Cek apakah pengguna sudah login
$name = isset($_SESSION['name']) ? $_SESSION['name'] : null; // Ambil nama pengguna
$email = isset($_SESSION['email']) ? $_SESSION['email'] : null; // Ambil email
$initial = $name ? strtoupper(substr($name, 0, 1)) : ''; // Ambil huruf pertama dari nama
$color = $email ? sprintf('#%06X', crc32($email) & 0xFFFFFF) : '';

// Proses ulasan yang dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rating = $_POST['rating']; // Ambil rating yang dipilih
    $comment = $_POST['comment']; // Ambil komentar

    // Validasi input
    if (!empty($rating) && !empty($comment) && isset($name)) {
        // Menyiapkan query untuk menyimpan ulasan ke database
        $stmt = $conn->prepare("INSERT INTO reviews (name, email, rating, comment) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $rating, $comment); // Bind parameter

        if ($stmt->execute()) {
            echo "<script>alert('Ulasan Anda berhasil dikirim!');</script>";
        } else {
            echo "<script>alert('Gagal mengirim ulasan. Coba lagi.');</script>";
        }

        // Menutup statement
        $stmt->close();
    } else {
        echo "<script>alert('Harap lengkapi ulasan dan rating!');</script>";
    }
}
?>

<html>
<head>
    <title>Beri Ulasan</title>
    <link rel="stylesheet" href="elemen/css/ulasan.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <div class="review-container">
        <h1>Beri Ulasan</h1>
        <form method="POST">
            <label for="comment">Komentar</label>
            <textarea id="comment" name="comment" placeholder="Tulis ulasan Anda..."></textarea>
            <label for="rating">Nilai</label>
            <div class="stars" id="rating">
                <i class="far fa-star" data-value="1"></i>
                <i class="far fa-star" data-value="2"></i>
                <i class="far fa-star" data-value="3"></i>
                <i class="far fa-star" data-value="4"></i>
                <i class="far fa-star" data-value="5"></i>
            </div>
            <input type="hidden" id="hidden-rating" name="rating" value="0">
            <button type="submit">Kirim Ulasan</button>
        </form>
    </div>

    <script>
        const stars = document.querySelectorAll('.stars i');
        const comment = document.getElementById('comment');
        const submitButton = document.querySelector('button');
        const hiddenRating = document.getElementById('hidden-rating');
        let selectedRating = 0;

        stars.forEach(star => {
            star.addEventListener('click', () => {
                selectedRating = star.getAttribute('data-value');

                // Reset semua bintang
                stars.forEach(s => {
                    s.classList.remove('active');
                    s.classList.replace('fas', 'far'); // Ganti kembali ke bintang kosong
                });

                // Sorot bintang yang dipilih
                for (let i = 0; i < selectedRating; i++) {
                    stars[i].classList.add('active');
                    stars[i].classList.replace('far', 'fas'); // Ganti ke bintang penuh
                }

                // Set nilai rating ke input tersembunyi
                hiddenRating.value = selectedRating;
            });
        });

        submitButton.addEventListener('click', () => {
            const reviewText = comment.value.trim();
            if (!selectedRating || !reviewText) {
                alert('Harap isi ulasan dan pilih rating sebelum mengirim.');
                return;
            }

            // Data telah dikirimkan melalui form, tidak perlu lagi alert atau reset di sini
        });
    </script>
</body>
</html>
