<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Ambil nilai dari formulir (GET)
    $nama_pengguna = isset($_GET["username"]) ? htmlspecialchars($_GET["username"]) : "";
    $password = isset($_GET["password"]) ? htmlspecialchars($_GET["password"]) : "";
    $peran = isset($_GET["role"]) ? $_GET["role"] : [];
    $jenis_kelamin = isset($_GET["gender"]) ? $_GET["gender"] : "";
    $email = isset($_GET["email"]) ? htmlspecialchars($_GET["email"]) : "";
    $nomor_telepon = isset($_GET["phone"]) ? htmlspecialchars($_GET["phone"]) : "";
    $tanggal_lahir = isset($_GET["birthdate"]) ? htmlspecialchars($_GET["birthdate"]) : "";

    // Contoh output untuk melihat data yang telah diambil (GET)
    echo "<h2>Data Formulir (GET):</h2>";
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
