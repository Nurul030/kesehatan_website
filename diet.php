<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Form Diet</h1>
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
        <h2>Isi Data untuk Mengetahui Diet yang Tepat</h2>
        <form action="diet.php" method="POST">
            <label for="usia">Usia:</label>
            <input type="number" name="usia" required><br>

            <label for="bb">Berat Badan (kg):</label>
            <input type="number" name="bb" required><br>

            <label for="gda">GDA (Kcal):</label>
            <input type="number" name="gda" required><br>

            <button type="submit">Cek Diet yang Cocok</button>
        </form>
    </section>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usia = $_POST['usia'];
        $bb = $_POST['bb'];
        $gda = $_POST['gda'];

        // Koneksi ke database
        include 'includes/db.php';

        // Query untuk mendapatkan diet yang sesuai
        $sql = "SELECT * FROM diet WHERE usia_min <= $usia AND usia_max >= $usia AND bb_min <= $bb AND bb_max >= $bb AND gda_min <= $gda AND gda_max >= $gda";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<h3>Diet yang Cocok:</h3>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div>";
                echo "<h4>" . $row['nama_diet'] . "</h4>";
                echo "<p>" . $row['diet_rekomendasi'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ada diet yang cocok dengan data yang dimasukkan.</p>";
        }
    }
    ?>

    <footer>
        <p>&copy; 2024 Website Kesehatan. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
