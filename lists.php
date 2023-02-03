<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width" ,initial-scale=1.0">
  <title>UZD cars: about us</title>

  <!-- external css file linking-->
  <link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>
  <?php
  require "demos/connection.php";
  $conn = connect();
  ?>
  <!--header starting line-->


  <section class="header">


    <img src="images/logo1.png" alt="logo" id="logo">
    <!--<a href="home.php" class="logo">UZD cars Ethiopia</a>-->
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="categories.php">cars</a>
      <a href="about.php">about us</a>

    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!--header ending line-->

  <section class="categories">

    <h1 class="section-heading">
      Brand good cars with fair price
    </h1>

    <div class="box-container">
      <?php
      $sql = "select * from cars where availability = 'yes';";
      $res = mysqli_query($conn, $sql);
      if (mysqli_num_rows($res) > 0)
        while ($row1 = mysqli_fetch_assoc($res)) {
          $car_id = $row1["CID"];
          $car_model = $row1["model"];
          $price = $row1["price"];
          $transmission = $row1["transmission"];
          $engine = $row1["engine"];
          $plate_number = $row1["plate_number"];
          $color = $row1["color"];
          $status = $row1["status"];
          $tg_link = $row1["tg_link"];
      ?>

        <div class="box" id="buggatti">
          <div class="image">
            <img src="images/<?= $row1['img_url'] ?>" style="height: 30rem;">
          </div>
          <div class="content">
            <h3><?= $car_model ?></h3>
            <p>ENGINE: <?= $engine ?></p>
            <p>STATUS: <?= $status ?></p>
            <p>PRICE: <?= $price ?></p>
            <p>TELEGRAM: <?= $tg_link ?></p>
            <a href="order.php" class="btn">order now!</a>
          </div>

        </div>
      <?php
          # code...
        }
      ?>
    </div>

    <div class="load_More"><a href="categories.php" class="btn">check more</a></div>
    </div>
  </section>
  <!-- car lists section start-->

  <!--footer start-->

  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Shortcuts</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="categories.php"><i class="fas fa-angle-right"></i>categories</a>
        <a href="buy.php"><i class="fas fa-angle-right"></i>buy now!</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
      </div>

      <div class="box">
        <h3>contact us</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
        <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
        <a href="#"><i class="fas fa-envelope"></i>besratmesele.com</a>
        <a href="#"><i class="fas fa-map"></i>addis ababa, Ethiopia-400104</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook"></i> facebook</a>
        <a href="#"><i class="fab fa-twitter"></i> twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram </a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>
    </div>

    <div class="credit">
      Designed by <span>MY-square developers</span>| all rights reserved!
    </div>
  </section>

  <!--footer end-->

  <!-- custom javascript file-->
  <script src="script.js"></script>
</body>