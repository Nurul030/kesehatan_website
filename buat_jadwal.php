<?php
include 'includes/db.php';

$notif_message = ''; // Variabel untuk menampilkan pesan notifikasi

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pasien = $_POST['nama_pasien'];
    $tanggal_kontrol = $_POST['tanggal_kontrol'];
    $status = "Belum Kontrol";

    // Menyimpan Jadwal Kontrol Baru
    $sql = "INSERT INTO jadwal_kontrol (nama_pasien, tanggal_kontrol, status) 
            VALUES ('$nama_pasien', '$tanggal_kontrol', '$status')";
    
    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, set pesan notifikasi
        $notif_message = 'Jadwal kontrol berhasil dibuat!';
    } else {
        // Jika gagal, set pesan notifikasi
        $notif_message = 'Gagal membuat jadwal kontrol: ' . mysqli_error($conn);
    }
}

// Pemeriksaan tanggal kontrol
$current_date = date('Y-m-d'); // Tanggal saat ini
$sql_check = "SELECT * FROM jadwal_kontrol WHERE DATEDIFF('$current_date', tanggal_kontrol) > 8 AND status = 'Belum Kontrol'";
$result_check = mysqli_query($conn, $sql_check);

$show_popup = false;

if (mysqli_num_rows($result_check) > 0) {
    $show_popup = true; // Menandakan ada jadwal kontrol yang lebih dari 8 hari
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kontrol</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function showPopup() {
            if (<?php echo $show_popup ? 'true' : 'false'; ?>) {
                alert("Jadwal kontrol lebih dari 8 hari! Apakah Anda ingin membuat jadwal kontrol baru?");
            }
        }
    </script>
</head>
<body onload="showPopup()">
    <header>
        <h1>Jadwal Kontrol</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="kontrol.php">Jadwal Kontrol</a></li>
                <li><a href="diet.php">Diet</a></li>
                <li><a href="tanya.php">Tanya Jawab</a></li>
                <li><a href="informasi.php">Informasi</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Isi Data Jadwal Kontrol Anda</h2>

        <!-- Menampilkan Notifikasi jika Jadwal Kontrol Berhasil -->
        <?php if ($notif_message != ''): ?>
            <div class="notif-message <?php echo ($notif_message == 'Jadwal kontrol berhasil dibuat!') ? 'success' : 'error'; ?>">
                <?php echo $notif_message; ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <label for="nama_pasien">Nama Pasien:</label>
            <input type="text" name="nama_pasien" required><br>

            <label for="tanggal_kontrol">Tanggal Kontrol:</label>
            <input type="date" name="tanggal_kontrol" required><br>

            <button type="submit">Buat Jadwal Kontrol</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Website Kesehatan. Semua hak dilindungi.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
