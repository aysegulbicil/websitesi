<!DOCTYPE html>
<html lang="tr">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header</title>
  <link rel="stylesheet" href="includes/still.css" /> 
</head>
<body>
  <header class="main-header">
    <div class="logo">
    <img src="includes/aa.jpg" alt="Clarity Logo" />
    </div>
    <nav class="nav-links">
  <a href="anasayfa.html">Anasayfa</a>
  <a href="hakkimizda.html">Hakkımızda</a>
  <a href="iletisim.html">İletişim</a>
  <a href="blog.html">Blog</a>
</nav>
    <div class="header-actions">
      <a href="bos.php" class="login-btn">Giriş</a>
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



