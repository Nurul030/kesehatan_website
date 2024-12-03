<?php
include 'includes/db.php';

$jawaban = ''; // Variabel untuk menampilkan jawaban
$pertanyaan = ''; // Variabel untuk menyimpan pertanyaan pengguna

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pertanyaan = $_POST['pertanyaan'];

    // Mencocokkan pertanyaan dengan data di database
    $sql = "SELECT jawaban FROM tanya_jawab WHERE pertanyaan LIKE '%$pertanyaan%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $jawaban = $row['jawaban']; // Menampilkan jawaban yang cocok
    } else {
        $jawaban = 'Maaf, saya tidak dapat menemukan jawaban untuk pertanyaan Anda.';
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanya Jawab Kesehatan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Tanya Jawab Kesehatan</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="jadwal_kontrol.php">Jadwal Kontrol</a></li>
                <li><a href="diet.php">Diet</a></li>
                <li><a href="tanya.php">Tanya Jawab</a></li>
                <li><a href="informasi.php">Informasi</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Tanyakan Seputar Kesehatan</h2>

        <!-- Formulir Tanya Jawab -->
        <form method="POST">
            <label for="pertanyaan">Tanya Seputar Kesehatan:</label>
            <input type="text" name="pertanyaan" required>
            <button type="submit">Tanyakan</button>
        </form>

        <?php if ($jawaban != ''): ?>
            <div class="jawaban">
                <h3>Jawaban:</h3>
                <p><?php echo $jawaban; ?></p>
            </div>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; 2024 Website Kesehatan. Semua hak dilindungi.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
