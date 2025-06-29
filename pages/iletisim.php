<?php include '../includes/header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=websitesi", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $ad = $_POST["ad"];
        $email = $_POST["email"];
        $konu = $_POST["konu"];
        $mesaj = $_POST["mesaj"];

        $sql = "INSERT INTO iletisim (ad, email, konu, mesaj) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$ad, $email, $konu, $mesaj]);

        echo "<p class='success'>Mesajınız başarıyla gönderildi.</p>";
    } catch (PDOException $e) {
        echo "<p class='error'>Hata: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>İletişim</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
    }
    .background {
      background-image: url('../pages/11.jpg'); /* Arka plan resmi */
      background-size: cover;
      background-position: center;
      height: 100vh;
      width: 100%;
      position: relative;
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.6); /* karartma efekti */
      z-index: 1;
    }
    .content {
      position: relative;
      z-index: 2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 20px;
      color: white;
    }
    .contact-container {
      display: flex;
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(6px);
      border-radius: 16px;
      overflow: hidden;
      max-width: 1000px;
      width: 100%;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
      flex-wrap: wrap;
    }
    .left, .right {
      flex: 1;
      min-width: 300px;
      padding: 30px;
    }
    .left {
      color: white;
    }
    .left h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }
    .left p {
      margin: 10px 0;
    }
    .left i {
      margin-right: 10px;
      color: #f6b25b;
    }
    .right {
      background-color: rgba(255, 255, 255, 0.2); /* Daha şeffaf */
  color: white; /* Yazı rengini beyaz yaptık okunabilirlik için */
  border-radius: 0 16px 16px 0;

    }
    .right h2 {
      margin-bottom: 20px;
      font-size: 24px;
      text-align: center;
    }
    .right input,
    .right textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }
    .right textarea {
      height: 100px;
      resize: vertical;
    }
    .right button {
      width: 100%;
      padding: 12px;
      background-color: #d91a66;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .right button:hover {
      background-color: #a94d44;
    }
    .success, .error {
      position: absolute;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: bold;
      z-index: 999;
    }
    .success {
      background-color: #d4edda;
      color: #155724;
    }
    .error {
      background-color: #f8d7da;
      color: #721c24;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<div class="background">
  <div class="overlay"></div>
  <div class="content">
    <div class="contact-container">

      <!-- Sol Bilgi -->
      <div class="left">
        <h2>Bizimle İletişime Geç</h2>
        <p><i class="fas fa-map-marker-alt"></i> Konya, Türkiye</p>
        <p><i class="fas fa-envelope"></i> info@sirket.com</p>
        <p><i class="fas fa-phone"></i> 0532 123 45 67</p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>

      <!-- Sağ Form -->
      <div class="right">
        <h2>İletişim Formu</h2>
        <form method="post">
          <input type="text" name="ad" placeholder="Adınız Soyadınız" required />
          <input type="email" name="email" placeholder="E-posta Adresiniz" required />
          <input type="text" name="konu" placeholder="Konu" required />
          <textarea name="mesaj" placeholder="Mesajınız" required></textarea>
          <button type="submit">Gönder</button>
        </form>
      </div>

    </div>
  </div>
</div>


<script>
  // 5 saniye (5000 ms) sonra mesajı gizle
  setTimeout(function() {
    const successMsg = document.querySelector('.success');
    const errorMsg = document.querySelector('.error');

    if(successMsg) {
      successMsg.style.transition = "opacity 1s ease";
      successMsg.style.opacity = '0';
      setTimeout(() => successMsg.style.display = 'none', 1000);
    }
    if(errorMsg) {
      errorMsg.style.transition = "opacity 1s ease";
      errorMsg.style.opacity = '0';
      setTimeout(() => errorMsg.style.display = 'none', 1000);
    }
  }, 5000);
</script>

</body>
</html>
