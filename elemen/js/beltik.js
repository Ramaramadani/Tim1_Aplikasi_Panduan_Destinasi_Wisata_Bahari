document.getElementById("ticketForm").addEventListener("submit", function (event) {
  event.preventDefault();

  // Ambil nilai dari form
  const nama = document.getElementById("nama").value;
  const tanggal = document.getElementById("tanggal").value;
  const tujuan = document.getElementById("tujuan").value;
  const jumlah = document.getElementById("jumlah").value;
  const kodePemesanan = Math.floor(Math.random() * 10000);  // Membuat kode acak

  // Buat output
  const outputDiv = document.getElementById("output");
  outputDiv.style.display = "flex";
  outputDiv.innerHTML = `
    <div class="left-section">
      <img alt="logo" src="elemen/image/Oceara.png" />
    </div>
    <div class="right-section">
      <h2>Your Ticket</h2>
      <p><strong>Nama:</strong> ${nama}</p>
      <p><strong>Hari:</strong> ${tanggal}</p>
      <p><strong>Status:</strong> Belum Bayar</p>
      <p><strong>Tujuan:</strong> ${tujuan}</p>
      <p><strong>Jumlah Tiket:</strong> ${jumlah}</p>
      <p><strong>Kode:</strong></p>
      <div class="kode-box">${kodePemesanan}</div>
    </div>
  `;

  // Kirim data ke server menggunakan AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "beltik.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Tampilkan respon dari server (berhasil atau gagal)
      console.log(xhr.responseText);
    }
  };

  // Kirim data form ke server, termasuk kode pemesanan yang dihasilkan
  xhr.send(`nama=${nama}&tanggal=${tanggal}&tujuan=${tujuan}&jumlah=${jumlah}&kodePemesanan=${kodePemesanan}`);
});
