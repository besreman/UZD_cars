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


    <div class="heading" style="background-color: light-cyan;">
        <h1>order a car</h1>
    </div>




    <!--order section starts here-->

    <section class="order">

        <?php
        $ID = $_POST['ID'];
        ?>

        <h1 class="heading">order your best choice car!</h1>

        <form action="order_form.php" method="post" class="order-form">
            <div class="flex">
                <div class="input-box">
                    <span>Name : </span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="input-box">
                    <span>Email : </span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>

                <div class="input-box">
                    <span>Phone number :</span>
                    <input type="number" placeholder="enter your phone number" name="number">
                </div>

                <div class="input-box">
                    <span>City</span>
                    <input type="text" placeholder="your current city" name="city">
                </div>

                <div class="input-box">
                    <span>Subcity</span>
                    <input type="text" placeholder="your current subcity" name="subcity">
                </div>

                <div class="input-box">
                    <span>car ID :</span>
                    <input type="text" name="car_ID" value=<?= $ID ?>>
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>

    </section>

    <!--order section ends here-->











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