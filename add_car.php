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

  <!--header starting line-->


  <section class="header">


    <img src="images/logo1.png" alt="logo" id="logo">
    <!--<a href="home.php" class="logo">UZD cars Ethiopia</a>-->
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="lists.php">cars</a>
      <a href="about.php">about us</a>

    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!--header ending line-->


  <!-- a section for the form of car to be uploaded -->

  <section class="order">

    <h1 class="heading">ADD NEW CAR</h1>

    <?php if (isset($_GET['error'])) : ?>
      <p><?php echo $_GET['error']; ?></p>

    <?php endif ?>
    <form action="car_to_DB.php" method="post" enctype="multipart/form-data" class="order-form">

      <div class="flex">
        <div class="input-box">
          <span class="label">CAR MODEL </span>
          </textarea><input type="text" name="model">
        </div>

        <div class="input-box">
          <span class="label">PRICE </span>
          <input type="number" name="price">
        </div>

        <div class="input-box">
          <span class="label">TRANSMISSION TYPE </span>
          <input type="text" name="transmission">
        </div>

        <div class="input-box">
          <span class="label">ENGINE </span>
          <input type="text" name="engine" id="">
        </div>

        <div class="input-box">
          <span class="label">PLATE NUMBER </span>
          <input type="number" name="plate_number">
        </div>

        <div class="input-box">
          <span class="label"> COLOR </span>
          <input type="text" name="color">
        </div>

        <div class="input-box">
          <span class="label">STATUS </span>
          <input type="text" name="status">
        </div>

        <div class="input-box">
          <span class="label">TELEGRAM LINK </span>
          <input type="text" name="tg_link">
        </div>

        <div class="input-box">
          <span>image</span>
          <input type="file" name="car_image">
        </div>


        <div class="input-box" id='submit'>
          <input type="submit" name="submit" value="upload">
        </div>

      </div>

    </form>
    <!-- upload form ends -->




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
          <h3>follow us </h3>
          <a href="#"><i class="fab fa-facebook"></i> facebook</a>
          <a href="#"><i class="fab fa-twitter"></i> twitter</a>
          <a href="#"><i class="fab fa-instagram"></i>instagram </a>
          <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>

      </div>

      <div class="credit">Designed by <span>MY-square developers</span>| all rights reserved!</div>

    </section>

    <!--footer end-->









    <!-- custom javascript file-->
    <script src="script.js"></script>
</body>