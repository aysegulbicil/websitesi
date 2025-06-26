<?php
// Basit routing
$page = $_GET['page'] ?? 'home';

// Güvenlik için sadece belirlenen dosyaların yüklenmesini sağla
$allowed_pages = ['home', 'about', 'contact'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/header.php'; ?>
</head>
<body>

    <?php include 'includes/nav.php'; ?>

    <main>
        <?php include "pages/$page.php"; ?>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>
