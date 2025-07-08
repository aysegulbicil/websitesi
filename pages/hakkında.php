<?php include '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Hakkımızda - OK Drugs</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f8f0e8;
    }

    .section-top {
      background-color: #888ecb;
      color: white;
      text-align: center;
      padding: 60px 20px 30px;
    }

    .section-top h1 {
      font-size: 60px;
      font-weight: bold;
      margin: 0;
      color: black;
    }

    .section-top h2 {
      font-size: 50px;
      font-weight: bold;
      margin: 10px 0 30px;
      color: black;
    }

    .section-top p {
      font-size: 14px;
      max-width: 600px;
      margin: 0 auto 10px;
    }

    .content-section {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      flex-wrap: wrap;
      padding: 60px 20px;
      background-color: #f8f0e8;
      gap: 40px;
    }

    .left-image, .right-image {
      max-width: 400px;
    }

    .left-image img, .right-image img {
      width: 100%;
      height: auto;
      display: block;
    }

    .middle-text {
      max-width: 400px;
      font-size: 14px;
      line-height: 1.6;
      color: #333;
    }

    .bottom-text {
      text-align: center;
      margin-top: 40px;
      font-size: 14px;
      color: #444;
    }
  </style>
</head>
<body>

<div class="section-top">
  <h1>OK</h1>
  <h2>WHO?</h2>
  <p>Hi, it's us, OK Drugs. Nice to meet you.</p>
  <p>If you're here, it's probably because you want to know more about us. Weird. Still, we'll indulge you.</p>
</div>

<div class="content-section">
  <div class="left-image">
    <img src="ee.png" alt="People with Dog">
  </div>
  <div class="middle-text">
    <p>After a decade of working in the cannabis industry we finally said OK Drugs, and the response was an astounding “WTF is OK Drugs?” but that just made us love it more.</p>
    <p>A funny thing happened once we’d escaped the corporate hamster wheel/rat cage/rodent metaphor and stopped to appreciate the epic micro moments that surround us.</p>
    <p>It’s a sort of supplement for self improvement...a magic bullet pointed straight at mindfulness... something that helps shape the way you view the world around you.</p>
  </div>
  <div class="right-image">
    <img src="ii.jpg" alt="Capsules">
  </div>
</div>

<div class="bottom-text">
  If you really want to get down to it, we’re just your friendly neighborhood advocates for alternative head spaces.
</div>
<?php include '../includes/footer.php'; ?>
</body>
</html>

