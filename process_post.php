<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir (POST)
    $nama_pengguna = isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : "";
    $password = isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "";
    $peran = isset($_POST["role"]) ? $_POST["role"] : [];
    $jenis_kelamin = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
    $nomor_telepon = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "";
    $tanggal_lahir = isset($_POST["birthdate"]) ? htmlspecialchars($_POST["birthdate"]) : "";

    // Contoh output untuk melihat data yang telah diambil (POST)
    echo "<h2>Data Formulir (POST):</h2>";
    echo "<table class='data-table'>";
    echo "<tr><td>Nama Pengguna:</td><td>" . $nama_pengguna . "</td></tr>";
    echo "<tr><td>Password:</td><td>" . $password . "</td></tr>";
    echo "<tr><td>Peran:</td><td>" . implode(", ", $peran) . "</td></tr>";
    echo "<tr><td>Jenis Kelamin:</td><td>" . $jenis_kelamin . "</td></tr>";
    echo "<tr><td>Email:</td><td>" . $email . "</td></tr>";
    echo "<tr><td>Nomor Telepon:</td><td>" . $nomor_telepon . "</td></tr>";
    echo "<tr><td>Tanggal Lahir:</td><td>" . $tanggal_lahir . "</td></tr>";
    echo "</table>";
} else {
    // Redirect jika akses langsung ke file ini
    header("Location: index.php");
    exit();
}
?>
