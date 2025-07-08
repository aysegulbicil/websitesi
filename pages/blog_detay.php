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
    <h1>BENEFITS OF CBD, ACCORDING TO MEDICAL RESEARCH</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius amet, odio ipsam exercitationem voluptatem totam eaque libero dolore tenetur molestiae repudiandae ad! Natus earum dicta vitae placeat dolore ad illum, aspernatur praesentium sed culpa magni debitis. Iure distinctio in mollitia reprehenderit voluptates magnam nulla quam nostrum molestiae ad nihil dolores quo asperiores sit hic nobis, amet vero incidunt exercitationem at fugiat repellendus. Autem, nihil nulla. Nihil, alias modi. Velit sapiente quia praesentium cum vitae. Exercitationem, placeat minima officiis ab nostrum sint tenetur soluta doloremque hic, sit consequuntur dolorem molestiae delectus culpa qui, laborum voluptates sapiente ipsum necessitatibus odio harum adipisci! Tenetur deleniti est corporis reprehenderit accusamus reiciendis omnis natus quisquam voluptatibus. In id magni, excepturi sit quas odit culpa labore alias beatae, exercitationem assumenda deleniti ipsum incidunt. Animi consequuntur, reiciendis fugit nam nemo sed excepturi molestias in neque quia omnis eum, tempore voluptatem pariatur incidunt similique dolore tenetur minus eaque? Suscipit, illum voluptas. Asperiores iste nostrum odio quia fugit? Numquam necessitatibus nihil vel adipisci veniam iure, id iste libero eum! Iste, placeat assumenda temporibus ducimus soluta dicta! Corporis ipsa dignissimos, nobis enim a dolorem repellendus omnis magni mollitia, dolorum inventore quaerat placeat! Nostrum, itaque facilis numquam placeat voluptatibus soluta? Mollitia voluptas sequi quidem enim, ipsam facere quia alias quam perspiciatis doloremque quis, architecto ipsa impedit odio aspernatur culpa quaerat ullam dolore aliquam blanditiis cum pariatur! Mollitia earum, fuga recusandae quas sunt ratione doloremque dignissimos nam amet dolorum in ipsum ut dolores distinctio placeat voluptate odit sequi esse pariatur veritatis repudiandae deserunt fugiat vitae. Nisi sit est ipsa? Laudantium, voluptas! Repudiandae, autem maiores! Natus incidunt impedit eaque laborum a nihil blanditiis omnis! Ullam dolore nisi earum eius tenetur neque perferendis facere? Ipsam, sint amet, harum eveniet, repudiandae optio assumenda corporis fugit sit quod neque deserunt. Aspernatur doloremque voluptatum odio cum praesentium?</p>

    <h2>USES OF CBD</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis adipisci itaque quaerat fugit ducimus atque ipsa dicta nulla cupiditate ratione ut officia distinctio culpa magni, ea voluptas veritatis quasi quas. Ducimus quae esse, nobis aut officia alias recusandae. Obcaecati perspiciatis accusamus illum a ut doloribus nulla iure soluta! Quidem nihil recusandae odio magnam. Repellendus, aspernatur architecto labore doloribus natus nulla saepe blanditiis repellat beatae. Eum ex consequuntur unde, repudiandae id numquam accusantium aliquam neque minima qui ea totam optio tempore dignissimos perferendis quo, iure corrupti? Ipsum voluptate maiores debitis. Harum qui porro ullam doloribus delectus, eligendi reiciendis eaque praesentium nam recusandae. Minus optio, cum fugit nobis, sed adipisci eligendi, facilis quibusdam nostrum non voluptate ad numquam quos tempora rerum natus iste soluta accusantium quae! Non ullam harum placeat adipisci, sed nesciunt aspernatur iste sunt nulla dolor, ratione cum fugiat? Laborum sequi nisi maxime tenetur, nemo magni porro facere? Ab quae incidunt delectus laudantium ea laboriosam. Eligendi ipsum iste nulla magnam totam asperiores illo placeat, quasi ratione assumenda ex natus, fugit porro quisquam officiis dolore impedit ut in voluptate, ad provident iusto possimus nostrum. Aliquid sint iusto amet officiis ab vel mollitia omnis ipsum, dignissimos placeat soluta assumenda, voluptatum magnam cumque!</p>

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

