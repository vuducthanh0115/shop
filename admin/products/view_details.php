<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <!-- <link rel="icon" href="https://www.w3schools.com/favicon.ico" type="image/x-icon" /> -->
  <link rel="stylesheet" href="../../css/base_n.css">
  <!-- <link rel="stylesheet" href="./css/base_s.css"> -->
  <!-- <link rel="stylesheet" href="../../css/styles.css"> -->
  <link rel="stylesheet" href="../../css/main_n.css">
  <!-- <link rel="stylesheet" href="../../css/grid_n.css"> -->
  <link rel="stylesheet" href="../../css/products/veiw_details.css">
  <link rel="stylesheet" href="../../font/fontawesome/css/all.min.css">
  <link rel="icon" type="image/png" sizes="16x16" href="../../image/favicon.png">
</head>

<body>
  <div class="app">
    <?php
    include 'header.php';
    require '../../connect.php';
    $id = $_GET['id'];
    $sql = "select products.*, manufacturers.name as manufacturer_name from products
    join manufacturers on manufacturers.id = products.manufacturer_id
    where products.id = '$id'";
    $result = mysqli_query($connect, $sql);
    //die($sql);
    ?>

    <div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <?php foreach ($result as $each) : ?>
          <div class="product-imgs">
            <div class="img-display">
              <div class="img-showcase">
                <img src="../products/images/<?php echo $each['image'] ?>" alt="shoe image">
                <img src="../products/images/<?php echo $each['image'] ?>" alt="shoe image">
                <img src="../products/images/<?php echo $each['image'] ?>" alt="shoe image">
                <img src="../products/images/<?php echo $each['image'] ?>" alt="shoe image">
              </div>
            </div>
            <div class="img-select">
              <div class="img-item">
                <a href="#" data-id="1">
                  <img src="../products/images/<?php echo $each['image'] ?>" alt="shoe image">
                </a>
              </div>
              <div class="img-item">
                <a href="#" data-id="2">
                  <img src="../products/images/<?php echo $each['image'] ?>" alt="shoe image">
                </a>
              </div>
              <div class="img-item">
                <a href="#" data-id="3">
                  <img src="../products/images/<?php echo $each['image'] ?>" alt="shoe image">
                </a>
              </div>
              <div class="img-item">
                <a href="#" data-id="4">
                  <img src="../products/images/<?php echo $each['image'] ?>" alt="shoe image">
                </a>
              </div>
            </div>
          </div>
          <!-- card right -->
          <div class="product-content">
            <h2 class="product-title"><?php echo $each['name']; ?></h2>
            <a href="index.php" class="product-link">visit store</a>
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>4.7(21)</span>
            </div>

            <div class="product-price">
              <!-- <p class="last-price">Old Price: <span>$257.00</span></p> -->
              <p class="new-price">Giá : <span><?php $price = $each['price'];
                                                echo number_format("$price"); ?></span></p>
            </div>
            <?php
            $sql = "select product_configuration.*, configuration.name as configuration_name from product_configuration 
            join configuration on configuration.id = product_configuration.configuration_id
            where product_configuration.product_id = $id";
            $result_conf = mysqli_query($connect, $sql);

            ?>
            <div class="product-detail" style="font-size: 15px;">
              <h2>Thông số kỹ thuật : </h2>
              <ul>
                <li>Hãng : <span><?php echo $each['manufacturer_name']; ?></span></li>
                <?php foreach ($result_conf as $each_confi) : ?>
                  <li>
                    <?php echo $each_confi['configuration_name'] ?> : <span><?php echo $each_confi['value'] ?></span>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="purchase-info">
              <input type="number" min="0" value="1">
              <button type="button" class="btn">
                Thêm vào giở hàng <i class="fas fa-shopping-cart"></i>
              </button>
              <a href="form_update.php?id=<?php echo $id; ?>" class="btn">Sửa</a>
              <a href="delete.php?id=<?php echo $id; ?>" class="btn">Xoá</a>
            </div>

            <div class="social-links">
              <p>Chia sẻ: </p>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-whatsapp"></i>
              </a>
              <a href="#">
                <i class="fab fa-pinterest"></i>
              </a>
            </div>
          </div>

      </div>
    </div>

    <footer class="footer">
      <div class="grid">
        <div class="grid__row" style="font-size: 15px; font-family: Roboto;">
          <h2>Mô tả chi tiết sản phẩm : </h2>
          <p><?php echo nl2br($each['description']); ?></p>
        </div>
      </div>
    </footer>
  <?php endforeach ?>
  <script src="script.js"></script>
  <?php
  include 'footer.php';
  ?>
  </div>
</body>

</html>