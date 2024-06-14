// Fungsi untuk menampilkan notifikasi jika pengguna belum terdaftar
function periksaPendaftaran() {
    // Lakukan pemeriksaan apakah pengguna sudah terdaftar atau tidak
    var terdaftar = false; // Ganti ini dengan logika pemeriksaan pendaftaran Anda

    // Jika pengguna belum terdaftar, tampilkan notifikasi
    if (!terdaftar) {
        alert("Diperlukan pendaftaran terlebih dahulu.");
    }
}

// Fungsi untuk menangani klik tombol "Masuk"
function masuk() {
    // Panggil fungsi untuk memeriksa pendaftaran
    periksaPendaftaran();

    // Lakukan tindakan masuk jika pengguna terdaftar
    // Ganti ini dengan logika masuk Anda
}

// Tambahkan event listener untuk tombol "Masuk"
document.getElementById("masukBtn").addEventListener("click", masuk);

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var loading = document.getElementById("loading");
        loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
    }, 1000); // 3000 milidetik = 3 detik
});
