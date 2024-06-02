// Fungsi untuk menampilkan notifikasi dan mengarahkan ke halaman login
function simpanData() {
    // Tampilkan notifikasi
    alert("Data berhasil disimpan!");

    // Arahkan ke halaman login
    window.location.href = "login"; // Ganti "halaman-login.html" dengan URL halaman login Anda
}

// Tambahkan event listener untuk tombol "Simpan Data"
document.getElementById("simpanBtn").addEventListener("click", simpanData);
