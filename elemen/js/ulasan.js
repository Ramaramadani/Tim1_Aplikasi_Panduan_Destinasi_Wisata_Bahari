submitButton.addEventListener('click', () => {
    const reviewText = comment.value.trim();
    if (!selectedRating || !reviewText) {
        alert('Harap isi ulasan dan pilih rating sebelum mengirim.');
        return;
    }

    // Menyiapkan data untuk dikirim ke server
    const reviewData = {
        rating: selectedRating,
        comment: reviewText
    };

    // Mengirim data ke server menggunakan fetch
    fetch('submit_review.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(reviewData),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Ulasan Anda berhasil dikirim!');
            // Reset form setelah berhasil
            comment.value = '';
            selectedRating = 0;
            stars.forEach(s => {
                s.classList.remove('active');
                s.classList.replace('fas', 'far');
            });
        } else {
            alert('Terjadi kesalahan, coba lagi.');
        }
    })
    .catch(error => {
        alert('Terjadi kesalahan: ' + error.message);
    });
});
