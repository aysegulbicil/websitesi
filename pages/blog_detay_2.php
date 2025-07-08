<?php
include '../includes/header.php';
$pdo = new PDO("mysql:host=localhost;dbname=websitesi;charset=utf8", "root", "");

// Blog ID (örnek: sabit olarak 1 veriyoruz ama URL'den de alabilirsin)
$blog_id = 1;

// Yorum gönderildiğinde kaydet
if (isset($_POST['yorum_gonder'])) {
    $isim = htmlspecialchars($_POST['isim']);
    $yorum = htmlspecialchars($_POST['yorum']);
    $sorgu = $pdo->prepare("INSERT INTO yorumlar (blog_id, isim, yorum_metni) VALUES (?, ?, ?)");
    $sorgu->execute([$blog_id, $isim, $yorum]);
}

// Kaydedilen yorumları çek
$yorumlar = $pdo->prepare("SELECT * FROM yorumlar WHERE blog_id = ? ORDER BY tarih DESC");
$yorumlar->execute([$blog_id]);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Blog Detay</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      background: url('11.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', sans-serif;
    }

    .detail-container {
      max-width: 900px;
      margin: 120px auto 40px auto;
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    h1 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .comment-box {
      margin-top: 40px;
    }

    .comment-box textarea, .comment-box input[type="text"] {
      width: 100%;
      padding: 10px;
      font-size: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 10px;
    }

    .comment-box input[type="submit"] {
      background-color: #333;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .comments {
      margin-top: 30px;
    }

    .comment {
      background: #f9f9f9;
      padding: 12px;
      margin-bottom: 10px;
      border-radius: 6px;
    }

    .comment strong {
      color: #444;
    }

    .comment em {
      color: #999;
      font-size: 12px;
    }
  </style>
</head>
<body>

  <div class="detail-container">
    <h1>What is CBD?</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum repudiandae temporibus, ea molestias atque distinctio quis! Consectetur, similique eaque. Dicta laborum nesciunt illum facere quam quo impedit voluptatum similique pariatur? Perspiciatis labore ex dolor. Commodi tenetur sit quod eos? Quis suscipit dolore exercitationem voluptatibus. Quidem laboriosam iure, rem quod eligendi at non culpa adipisci dolor esse commodi minima corporis odio vitae sint asperiores nihil mollitia delectus nobis optio perferendis consectetur? Quidem commodi nemo velit pariatur et, necessitatibus odio. Dicta accusantium aspernatur eos sed fuga fugiat! Rerum architecto blanditiis nulla earum recusandae laboriosam? Expedita, assumenda in alias natus, ipsa doloribus officia impedit corrupti qui ipsam ad, odio vitae nulla veritatis laborum consequatur provident vel neque temporibus commodi similique rem dicta. Alias tenetur asperiores exercitationem? Quas non nemo, possimus obcaecati beatae, ullam eveniet iusto quod excepturi asperiores omnis magnam. Ipsa tenetur corporis quidem quasi odit libero, in praesentium voluptas accusantium rerum aperiam recusandae similique exercitationem. Nostrum ut a libero culpa vel voluptate assumenda, expedita quam perferendis veniam laborum provident dignissimos officia qui aperiam eaque quis. Ullam delectus eum quidem excepturi magni nihil voluptates, expedita vel provident deserunt quisquam temporibus fuga odit placeat quibusdam odio veritatis ratione necessitatibus vero dolorum numquam, dicta perferendis, eos architecto. Temporibus, velit ad deleniti esse rerum odio, atque natus non qui ut maiores voluptate corrupti vel sequi quam dolor commodi quia, ducimus soluta excepturi ea dolorum perferendis pariatur. Voluptas qui iste, deleniti ratione temporibus ducimus laborum dolorum iusto repellat, porro odio tempore quia? Dolorum consectetur reiciendis atque est libero tempora cupiditate blanditiis impedit odit quis fuga error adipisci, recusandae unde perspiciatis nulla id doloremque repellendus aperiam minima velit. Eveniet beatae officia iste amet reiciendis, ipsam dolore autem vero natus recusandae reprehenderit sint omnis. Dolorum expedita at rerum est reprehenderit delectus atque neque perspiciatis, a eaque quibusdam mollitia culpa velit cumque facilis tempore repudiandae numquam voluptates nostrum beatae omnis tenetur consequatur eius error. Consequatur at dolorem consectetur eveniet reprehenderit sit assumenda eos maxime itaque id quia sapiente sed sequi laudantium fugit, illo voluptas quas molestiae. Hic tempora natus vitae repellendus molestias dolores provident eligendi asperiores qui. Unde iste possimus labore, ea, laboriosam asperiores corporis voluptates libero reiciendis rem dolore eos porro minus fuga optio laborum qui quibusdam aspernatur! Velit molestiae facilis adipisci quod repudiandae fuga rem assumenda, fugit, eligendi dolore exercitationem expedita cumque! Dolorem, nemo repudiandae doloribus quasi aspernatur earum, veniam reiciendis ratione quos provident adipisci eum. Itaque, unde.</p>

    <!-- Yorum Formu -->
    <div class="comment-box">
      <h3>💬 Yorum Yap</h3>
      <form method="POST" action="">
        <input type="text" name="isim" placeholder="Adınız" required>
        <textarea name="yorum" rows="4" placeholder="Yorumunuzu yazın..." required></textarea>
        <input type="submit" name="yorum_gonder" value="Kaydet">
      </form>
    </div>

    <!-- Yorumlar Listesi -->
    <div class="comments">
      <h3>📝 Yapılan Yorumlar</h3>
      <?php foreach ($yorumlar as $yorum): ?>
        <div class="comment">
          <strong><?= htmlspecialchars($yorum['isim']) ?></strong>
          <em> - <?= $yorum['tarih'] ?></em><br>
          <?= nl2br(htmlspecialchars($yorum['yorum_metni'])) ?>
        </div>
      <?php endforeach; ?>
    </div>

  </div>

</body>
</html>


