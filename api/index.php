<?php
// Pastikan file data.php tersedia dan bisa di-include
require_once('../public/data.php');

// Definisikan variabel dengan data dari data.php
$nama = $portfolioData['nama'];
$pekerjaan = $portfolioData['pekerjaan'];
$tentang = $portfolioData['about'];
$proyek = $portfolioData['proyek'];
$social_media = $portfolioData['social_media'];
$profile_picture = $portfolioData['profile_picture'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - <?php echo htmlspecialchars($nama); ?></title>
    <link rel="stylesheet" href="/public/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="header">
        <img src="<?php echo htmlspecialchars($profile_picture); ?>" alt="Foto Profil" class="profile-picture">
        <h1><?php echo htmlspecialchars($nama); ?></h1>
        <p><?php echo htmlspecialchars($pekerjaan); ?></p>
        
        <div class="social-links">
            <?php foreach ($social_media as $sosmed): ?>
                <a href="<?php echo htmlspecialchars($sosmed['url']); ?>" target="_blank" aria-label="<?php echo htmlspecialchars($sosmed['platform']); ?>">
                    <i class="<?php echo htmlspecialchars($sosmed['icon_class']); ?>"></i>
                </a>
            <?php endforeach; ?>
        </div>
    </header>

    <main class="main-content">
        <section class="about">
            <h2>Tentang Saya</h2>
            <p><?php echo htmlspecialchars($tentang); ?></p>
        </section>
        
        <section class="projects">
            <h2>Proyek</h2>
            <div class="project-grid">
                <?php foreach ($proyek as $p): ?>
                <div class="project-item">
                    <h3><?php echo htmlspecialchars($p['judul']); ?></h3>
                    <p><?php echo htmlspecialchars($p['deskripsi']); ?></p>
                    <a href="<?php echo htmlspecialchars($p['link']); ?>" target="_blank">Lihat Proyek</a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($nama); ?>. All rights reserved.</p>
    </footer>

    <script src="/public/script.js"></script>
</body>
</html>