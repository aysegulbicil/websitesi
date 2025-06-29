<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kayıt Formu</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    body, html {
      height: 100%;
    }

    /* Arka plan resmi */
    body {
      background-image: url('../pages/11.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    /* Karartma katmanı */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.6);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 999;
    }

    /* Form kutusu */
    .form-container {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 12px;
      width: 320px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
      position: relative;
    }

    .form-container h1 {
      font-size: 30px;
      margin-bottom: 20px;
      color: #1a1a1a;
      text-align: center;
    }

    .form-container input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: none;
      border-bottom: 1px solid #ccc;
      font-size: 15px;
    }

    .form-container input:focus {
      outline: none;
      border-bottom: 2px solid #1a1a40;
    }

    .form-container button {
      width: 100%;
      padding: 12px;
      background-color: #1a1a40;
      color: white;
      border: none;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
    }

    .form-container button:hover {
      background-color: #000033;
    }

    .form-container .login-link {
      margin-top: 15px;
      text-align: center;
      font-size: 14px;
    }

    .form-container .login-link a {
      color: #000033;
      text-decoration: none;
      font-weight: bold;
      cursor: pointer;
    }

    .form-container .login-link a:hover {
      text-decoration: underline;
    }

    /* Sağ üst X butonu */
    .close-page-btn {
      position: fixed;
      top: 20px;
      right: 25px;
      font-size: 28px;
      font-weight: bold;
      color: #ffffff;
      cursor: pointer;
      z-index: 1000;
      background: rgba(0, 0, 0, 0.5);
      padding: 6px 12px;
      border-radius: 50%;
      transition: background 0.2s ease;
    }

    .close-page-btn:hover {
      background: rgba(255, 0, 0, 0.6);
    }
  </style>
</head>
<body>

  <!-- Sayfa kapatma X -->
  <div class="close-page-btn" onclick="closePopup()">×</div>

  <!-- Kayıt formu -->
  <div class="overlay" id="popup">
    <div class="form-container">
      <h1>Kaydolmak</h1>
      <form onsubmit="submitForm(event)">
        <input type="text" placeholder="Adı" required />
        <input type="text" placeholder="Soyadı" required />
        <input type="email" placeholder="E-posta" required />
        <input type="password" placeholder="Şifre" required />
        <button type="submit">Kaydolmak</button>
      </form>
    
    </div>
  </div>

  <script>
    // Form gönderimini engelle (örnek amaçlı)
    function submitForm(e) {
      e.preventDefault();
      alert("Kayıt başarılı!");
    }

    // Pop-up kapatma ve geri dönme işlemi
    function closePopup() {
      const referrer = document.referrer;
      if (referrer && referrer !== location.href) {
        window.location.href = referrer;
      } else {
        // Eğer önceki sayfa yoksa anasayfaya dön
        window.location.href = "/";
      }
    }
  </script>

</body>
</html>