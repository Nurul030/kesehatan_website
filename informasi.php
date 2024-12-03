<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Informasi Kesehatan</h1>
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
        <h2>Video Kesehatan Terbaru</h2>
        
        <!-- Sisipkan video YouTube Pertama-->
        <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/qNtBnFduwcQ?si=JN6r3elFD6bBoVGf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Video kedua -->
    <div class="video-container">
        <<iframe width="560" height="315" src="https://www.youtube.com/embed/hLELSgDyrdk?si=PmhrIbDysqSSWA0x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    </section>

    <footer>
        <p>&copy; 2024 Website Kesehatan. Semua hak dilindungi.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
