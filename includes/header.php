<!DOCTYPE html>
<html lang="tr">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header</title>
 <link rel="stylesheet" href="/websitesi/includes/still.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <header class="main-header">
    <div class="logo">
    <img src="/websitesi/includes/aa.jpg" alt="Clarity Logo" />
    </div>
    <nav class="nav-links">
   <a href="/websitesi/pages/home.php">Anasayfa</a>
  <a href="/websitesi/pages/hakkında.php">Hakkımızda</a>
 <a href="/websitesi/pages/iletisim.php">İletişim</a>

  <a href="/websitesi/pages/blog.php">Blog</a>
</nav>
    <div class="header-actions">
      <a href="/websitesi/pages/giris.php" class="login-btn">Giriş</a>
    </div>
  </header>

  <script>
  document.querySelectorAll('.nav-links a').forEach(link => {
    if (link.href === window.location.href) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
</script>
</body>
</html>



