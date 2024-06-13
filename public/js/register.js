// Fungsi untuk menampilkan notifikasi dan mengarahkan ke halaman login
function simpanData() {
    // Tampilkan notifikasi
    alert("Data berhasil disimpan!");

    // Arahkan ke halaman login
    window.location.href = "login"; // Ganti "halaman-login.html" dengan URL halaman login Anda
}

// Tambahkan event listener untuk tombol "Simpan Data"
document.getElementById("simpanBtn").addEventListener("click", simpanData);

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var loading = document.getElementById("loading");
        loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
    }, 1000); // 3000 milidetik = 3 detik
});
