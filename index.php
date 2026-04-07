<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Furniture Catalogue</title>

<style>
body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #fff;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 40px;
  border-bottom: 1px solid #eee;
}

header h1 {
  font-size: 22px;
}

nav a {
  margin: 0 10px;
  text-decoration: none;
  color: #333;
}

.hero {
  height: 60vh;
  background: url('https://via.placeholder.com/1200x600') center/cover;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  text-align: center;
}

.hero h2 {
  font-size: 40px;
  background: rgba(0,0,0,0.5);
  padding: 20px;
}

.container {
  padding: 40px;
}

.section-title {
  text-align: center;
  margin-bottom: 30px;
}

.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.card {
  border: 1px solid #eee;
  overflow: hidden;
  transition: 0.3s;
}

.card:hover {
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}

.card-content {
  padding: 15px;
}

.card-title {
  font-size: 16px;
}

.card-price {
  color: #b12704;
  font-weight: bold;
}

footer {
  text-align: center;
  padding: 20px;
  background: #111;
  color: #fff;
}

@media(max-width: 768px) {
  .hero h2 { font-size: 28px; }
}
</style>
</head>

<body>

<header>
  <h1>FurniShop</h1>
  <nav>
    <a href="#">Home</a>
    <a href="#">Shop</a>
    <a href="#">Contact</a>
  </nav>
</header>

<section class="hero">
  <h2>Modern Furniture Collection</h2>
</section>

<section class="container">
  <h2 class="section-title">Our Products</h2>
  <div class="gallery">

    <?php
    $items = [
      ["title"=>"Sofa","price"=>"$200","image"=>"https://via.placeholder.com/300"],
      ["title"=>"Chair","price"=>"$80","image"=>"https://via.placeholder.com/300"],
      ["title"=>"Table","price"=>"$150","image"=>"https://via.placeholder.com/300"],
      ["title"=>"Bed","price"=>"$400","image"=>"https://via.placeholder.com/300"]
    ];

    foreach($items as $item) {
      echo "
      <div class='card'>
        <img src='{$item['image']}'>
        <div class='card-content'>
          <p class='card-title'>{$item['title']}</p>
          <p class='card-price'>{$item['price']}</p>
        </div>
      </div>";
    }
    ?>

  </div>
</section>

<footer>
  <p>© 2026 FurniShop - All rights reserved</p>
</footer>

</body>
</html>
