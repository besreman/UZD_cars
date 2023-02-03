<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width" ,initial-scale=1.0">
  <title>UZD cars; buy second hand cars</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <!-- external css file linking-->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
  require "connection.php";
  $conn = connect();
  ?>




  <!--header starting line-->

  <section class="header">


    <img src="images/logo1.png" alt="UZD-cars" id="logo">
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="lists.php">cars</a>
      <a href="about.php">about us</a>

    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!--header ending line-->

  <!-- the intro section starts here, main functional part of the page is down here-->

  <section class="intro">
    <div class="profile" style="background: url(images/bugatti-chiron-3.jpg) no-repeat;">
      <div class="content">
        <span>slightly used!</span>
        <h3>second-hand cars</h3>
      </div>
    </div>
  </section>

  <!-- the end of the intro section-->




  <!-- a section for displaying various brands -->
  <section class="varieties">
    <h1 class="section-heading">Popular Brands</h1>
    <div class="box-container">

      <div class="box">
        <img src="images/toyota.png" alt="Toyota-logo">
        <h3>Toyota cars including vitz </h3>
      </div>

      <div class="box">
        <img src="images/nissan.png" alt="Nissan-logo">
        <h3>Nissan</h3>
      </div>

      <div class="box">
        <img src="images/Suzuki.png" alt="vitz">
        <h3>Suzuki</h3>
      </div>

      <div class="box">
        <img src="images/ford.png" alt="vitz">
        <h3>Ford</h3>
      </div>

    </div>
  </section>






  <!-- home about section starts here-->
  <section class="home-about">
    <div class="image">
      <img src="images/logo.png" alt="UZD_cars logo">
    </div>
    <div class="content">
      <h3>About Us</h3>
      <p>we have been serving the community since 2010, this group
        strives for the satisfaction of the community car demand.
        This group was created by five friends and now it is serving vast community.
      </p>
      <a href="about.php" class="btn">read more</a>
    </div>
  </section>
  <!-- home about section ends here-->



  <!-- home car lists section starts here -->

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

        <div class="box" onclick="submit()">
          <div class="image">
            <img src="images/<?= $row1['img_url'] ?>" style="height: 30rem;">
          </div>
          <div class="content">
            <h3><?= $car_model ?></h3>
            <p>ENGINE: <?= $engine ?></p>
            <p>STATUS: <?= $status ?></p>
            <p>PRICE: <?= $price ?></p>
            <a href="<?= $tg_link ?>" id="order-btn1" style="width: 100%;">order on TELEGRAM</a>
            <form action="order.php" method="post" id="form">
              <input type="hidden" name="ID" value="<?= $car_id ?>">
              <input type="submit" name="submit" id="order-btn2" value="order">
            </form>
          </div>

        </div>
      <?php
          # code...
        }
      ?>

      <script>
        function submit() {
          document.getElementById('form').submit();
        }
      </script>
    </div>

    <div class="load_More"><a href="categories.php" class="btn">check more</a></div>
    </div>
  </section>





  <!-- home categories section ends up here -->


  <!--footer start-->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>Shortcuts</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="categories.php"><i class="fas fa-angle-right"></i>cars to buy</a>
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
        <h3>follow us </h3>
        <a href="#"><i class="fab fa-facebook"></i> facebook</a>
        <a href="#"><i class="fab fa-twitter"></i> twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram </a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>

    </div>

    <div class="credit">Designed by <span>TMY-square developers</span>| all rights reserved!</div>

  </section>

  <!--footer end-->









  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- custom javascript file-->
  <script src="script.js"></script>
</body>