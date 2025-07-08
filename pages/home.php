<?php include '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Ana Sayfa - OK Drugs</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: #f8f0e8;
      color: #000;
    }

    section {
      padding: 100px 60px;
    }

    .shop-now {
      background-color: #fbb04c;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 80px;
      text-align: center;
    }

    .shop-now img {
      width: 420px;
      border-radius: 20px;
    }

    .shop-now h1 {
      font-size: 72px;
      font-weight: bold;
      margin: 30px 0 15px;
    }

    .shop-now p {
      max-width: 500px;
      font-size: 20px;
      margin: 0 auto;
    }

    .eat-cbd {
       background-color: #f8f0e8;
  padding: 100px 60px;
    }
    .eat-cbd-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 60px;
  flex-wrap: wrap;
}

    .eat-cbd h2 {
      font-size: 60px;
      font-weight: bold;
    }

    .eat-cbd .content {
      margin-top: 30px;
      font-size: 20px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .eat-cbd img {
      width: 90%;
      max-width: 400px;
      margin-top: 50px;
    }

    .who-am-i {
     background-image: url('11.jpg'); /* ✅ Arka plan resmi */
  background-size: cover;          /* Resmi kapla */
  background-position: center;     /* Ortala */
  background-repeat: no-repeat;
  color: white;
  padding: 120px 60px;
  text-align: center;
  position: relative;
    }
    .who-am-i::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.4); /* Yazının daha net görünmesi için koyu katman */
  z-index: 1;
}

    .who-am-i img {
      width: 420px;
      border-radius: 20px;
    }

    .who-am-i .text {
      position: relative;
  z-index: 2; /* Yazıyı üstte göster */
  max-width: 700px;
  margin: auto;
  font-size: 20px;
    }

    .who-am-i h2 {
     font-size: 64px;
  font-weight: bold;
  margin-bottom: 20px;
    }

    .lets-chat {
      background-color: #f8f0e8;
      text-align: center;
    }

    .lets-chat h2 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .chat-form {
      display: grid;
      gap: 30px;
      max-width: 700px;
      margin: auto;
      padding: 30px;
    }

    .chat-form input, .chat-form textarea {
      padding: 16px;
      font-size: 18px;
      border: 1px solid #333;
      background: white;
    }

    .chat-form textarea {
      resize: vertical;
      height: 180px;
    }

    .chat-form button {
      padding: 14px 28px;
      background-color: black;
      color: white;
      border: none;
      cursor: pointer;
      font-weight: bold;
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .who-am-i, .shop-now {
        flex-direction: column;
        text-align: center;
      }

      .who-am-i .text {
        text-align: center;
      }
    }
  </style>
</head>
<body>

<!-- SHOP NOW -->
<section class="shop-now">
  <div>
    <img src="11.jpg" alt="Ürünler">
    <h1>SHOP NOW</h1>
    <p>Get your feel good fix that brings you back to life.</p>
  </div>
  <div>
    <img src="5.avif" alt="Şapka">
    <p style="margin-top: 15px; font-size: 18px;">Check in. Chew up. Tune out.</p>
  </div>
</section>

<!-- EAT CBD -->
<section class="eat-cbd">
  <div class="eat-cbd-wrapper">
    <div class="eat-cbd-image">
      <img src="3.png" alt="Eat CBD Detay">
    </div>
    <div class="eat-cbd-text">
      <h2>EAT CBD</h2>
      <p>Here's the deal…</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, sint!</p>
    </div>
  </div>
</section>

<!-- WHO AM I? -->
<section class="who-am-i">
  <div class="text">
    <h2>*WHO AM I?</h2>
    <p>We bring you the clarity in crazy.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, minima earum placeat dicta labore porro, saepe dolor assumenda sed recusandae esse, suscipit necessitatibus perferendis reiciendis officiis nisi deleniti maiores veritatis optio quisquam quod. Aliquam eaque voluptate saepe accusamus eius perferendis dolorum ullam perspiciatis, explicabo cumque consequatur doloremque ipsum quaerat veritatis. Animi ipsa ut beatae est, sint eum velit illo impedit?</p>
  </div>
</section>

<!-- LET'S CHAT -->
<section class="lets-chat">
  <h2>LET'S CHAT</h2>
  <form class="chat-form">
    <div style="display:flex; gap:20px;">
      <input type="text" placeholder="First Name" style="flex:1;">
      <input type="text" placeholder="Last Name" style="flex:1;">
    </div>
    <div style="display:flex; gap:20px;">
      <input type="email" placeholder="Email" style="flex:1;">
      <input type="text" placeholder="Phone" style="flex:1;">
    </div>
    <textarea placeholder="Tell us a secret..."></textarea>
    <button type="submit">Ok</button>
  </form>
</section>
<?php include '../includes/footer.php'; ?>
</body>
</html>
