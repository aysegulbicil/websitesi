<?php include '../includes/header.php'; ?>

<style>
body {
  margin: 0;
  background-color: #fdf1e7;
  font-family: 'Segoe UI', sans-serif;
  color: #333;
}

.blog-wrapper {
  max-width: 1200px;
  margin: 60px auto;
  padding: 0 20px;
}

.blog-title {
  font-size: 24px;
  font-weight: 600;
  color: #e36262;
  margin-bottom: 40px;
}

.blog-card {
  display: flex;
  background-color: #fff;
  margin-bottom: 30px;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  overflow: hidden;
  height: 180px; /* Daha kısa boy */
  transition: transform 0.2s ease;
  text-decoration: none;
  color: inherit;
}
.blog-card:hover {
  transform: scale(1.01);
}
.blog-card img {
  width: 40%;
  height: 100%;
  object-fit: cover;
}
.blog-info {
  padding: 20px;
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.blog-meta {
  font-size: 13px;
  color: #888;
}
.blog-title-card {
  font-size: 18px;
  font-weight: 700;
  margin: 8px 0;
}
.blog-excerpt {
  font-size: 14px;
  color: #555;
  max-height: 40px;
  overflow: hidden;
}
.blog-footer {
  display: flex;
  justify-content: space-between;
  font-size: 13px;
  margin-top: 8px;
}
.like-btn {
  cursor: pointer;
  user-select: none;
  color: #e36262;
}
</style>

<div class="blog-wrapper">
  <div class="blog-title">All Posts</div>

  <a class="blog-card" href="blog_detay.php?id=1">
    <img src="12.jpg" alt="Blog 1">
    <div class="blog-info">
      <div>
        <div class="blog-meta">Shai Clark ・ Mar 23, 2021 ・ 2 min read</div>
        <div class="blog-title-card">BENEFITS OF CBD, ACCORDING TO MEDICAL RESEARCH</div>
        <div class="blog-excerpt">Over time, people are finding new, holistic approaches to treat any ailments...</div>
      </div>
      <div class="blog-footer">
        <span>4,455 views ・ 16 comments</span>
        <span class="like-btn" onclick="event.preventDefault(); this.innerText=parseInt(this.innerText)+1 + ' ❤️'">25 ❤️</span>
      </div>
    </div>
  </a>

  <a class="blog-card" href="blog_detay_2.php?id=2">
    <img src="13.webp" alt="Blog 2">
    <div class="blog-info">
      <div>
        <div class="blog-meta">Shai Clark ・ Mar 23, 2021 ・ 2 min read</div>
        <div class="blog-title-card">WHAT IS CBD?</div>
        <div class="blog-excerpt">CBD is becoming more and more popular in the market with a wide range of oils...</div>
      </div>
      <div class="blog-footer">
        <span>1,035 views ・ 66 comments</span>
        <span class="like-btn" onclick="event.preventDefault(); this.innerText=parseInt(this.innerText)+1 + ' ❤️'">23 ❤️</span>
      </div>
    </div>
  </a>
</div>
<?php include '../includes/footer.php'; ?>

