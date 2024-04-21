<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nama = strtoupper($_POST["nama"]);
    $alamat = $_POST["alamat"];
    $no_ktp = $_POST["no_ktp"];
    $no_hp = $_POST["no_hp"];
    $nim = $_POST["nim"];

    // Query untuk menambahkan data obat ke dalam tabel
    $query = "INSERT INTO pasien (nama, alamat, no_ktp, no_hp, nim) VALUES ('$nama', '$alamat', '$no_ktp', '$no_hp', '$nim')";
    

    // if ($koneksi->query($query) === TRUE) {
    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect kembali ke halaman utama atau sesuaikan dengan kebutuhan Anda
        // header("Location: ../../index.php");
        // exit();
        echo '<script>';
        echo 'alert("Berhasil mendaftar pasien!");';
        echo 'window.location.href = "../pasienBaru.php";';
        echo '</script>';
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>