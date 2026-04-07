<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogue Gallery</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    header {
      background: #333;
      color: #fff;
      padding: 1rem;
      text-align: center;
    }

    .container {
      padding: 20px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 15px;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .card-title {
      font-size: 18px;
      margin: 0 0 10px;
    }

    .card-price {
      color: green;
      font-weight: bold;
    }

    @media (max-width: 600px) {
      .card img {
        height: 150px;
      }
    }
  </style>
</head>
<body>

<header>
  <h1>My Catalogue</h1>
</header>

<div class="container">
  <div class="gallery" id="gallery"></div>
</div>

<script>
// Example catalogue data (can come from PHP)
const items = [
  { title: "Product 1", price: "$10", image: "https://via.placeholder.com/300" },
  { title: "Product 2", price: "$20", image: "https://via.placeholder.com/300" },
  { title: "Product 3", price: "$30", image: "https://via.placeholder.com/300" },
  { title: "Product 4", price: "$40", image: "https://via.placeholder.com/300" }
];

const gallery = document.getElementById("gallery");

items.forEach(item => {
  const card = document.createElement("div");
  card.classList.add("card");

  card.innerHTML = `
    <img src="${item.image}" alt="${item.title}">
    <div class="card-content">
      <h3 class="card-title">${item.title}</h3>
      <p class="card-price">${item.price}</p>
    </div>
  `;

  gallery.appendChild(card);
});
</script>

</body>
</html>


<!-- PHP VERSION (save as index.php if using server) -->
<?php
$items = [
  ["title" => "Product 1", "price" => "$10", "image" => "https://via.placeholder.com/300"],
  ["title" => "Product 2", "price" => "$20", "image" => "https://via.placeholder.com/300"],
  ["title" => "Product 3", "price" => "$30", "image" => "https://via.placeholder.com/300"],
  ["title" => "Product 4", "price" => "$40", "image" => "https://via.placeholder.com/300"]
];
?>

<div class="container">
  <div class="gallery">
    <?php foreach($items as $item): ?>
      <div class="card">
        <img src="<?php echo $item['image']; ?>" alt="">
        <div class="card-content">
          <h3 class="card-title"><?php echo $item['title']; ?></h3>
          <p class="card-price"><?php echo $item['price']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
