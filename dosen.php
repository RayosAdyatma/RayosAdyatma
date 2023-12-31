<?php
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$dbname = "rayos"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

echo "";


// Query SELECT
$sql = "SELECT * FROM dosen"; // Tabel mahasiswa dan semua kolom

$result = $conn->query($sql);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    echo "<table border='1'>";
    echo "<tr><th>Id_dosen</th>
            <th>user_id</th>
            <th>nama</th>
            <th>tgl_lahir</th>
            <th>alamat</th>
            </tr>";

    // Tampilkan data
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id_dosen"] .
             "</td><td>" . $row["user_id"] . 
             "</td><td>" . $row["nama"] . 
             "</td><td>" . $row["tgl_lahir"]  .
             "</td><td>" . $row["alamat"]  .
             "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>