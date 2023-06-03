<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MAGNATE</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;800&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">MAGNATE.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="order.php">Order</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    <!--Hero Section start-->
    <section class="hero" id="home">
      <main class="content">
        <h1>Selamat Menikmati Hidangan</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Est,
          consequuntur.
        </p>
        <a href="register.php" class="cta">Pesan Sekarang</a>
      </main>
    </section>

    <!--Hero Section end-->

    <!--About section start-->
    <section id="about" class="About">
      <h2>About</h2>

      <div class="row">
        <div class="About-img">
          <img src="img/about-bg.jpg" alt="About" />
        </div>
        <div class="content">
          <h3>Kenapa Memilih Restourant Kami?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ex
            ea mollitia dolor cupiditate accusamus?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam rerum
            alias sunt! Sint odio non eligendi provident, odit est voluptatum.
          </p>
        </div>
      </div>
    </section>

    <!--About Section end-->

    <!--Menu Section Start-->
    <section id="menu" class="menu">
      <h2>Menu</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam omnis facere atque quo fugit cupiditate.</p>


      <div class="row">
        <div class="menu-card">
          <img src="img/menu/1.jpg" alt="Carbonara"> class="menu-card-img">
          <h3 class="menu-card-title">-Carbonara-</h3>
          <p class="menu-card-price">IDR 80k</p>

    </section>


    <!--Menu Section end-->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!--my javascript-->
    <script src="js/script.js"></script>
  </body>
</html>
