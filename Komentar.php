<?php
// Menghubungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "komentar_ku";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menambahkan komentar ke database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $komentar = $_POST['komentar'];
    $sql = "INSERT INTO komentar (komentar) VALUES ('$komentar')";
    if ($conn->query($sql) === TRUE) {
        echo "Komentar berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Mengambil semua komentar dari database
$sql = "SELECT id, komentar FROM komentar";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolom Komentar</title>
</head>
<body>

    <h1>Kolom Komentar</h1>

    <!-- Form untuk memasukkan komentar -->
    <form action="" method="post">
        <textarea name="komentar" rows="10" cols="50" required></textarea><br><br>
        <button type="submit">Kirim Komentar</button>
    </form>

    <h2>Komentar yang Sudah Masuk</h2>

    <!-- Menampilkan daftar komentar -->
    <div>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<p>" . $row['komentar'] . "</p><hr>";
            }
        } else {
            echo "Belum ada komentar.";
        }
        ?>

    </div>

</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>
