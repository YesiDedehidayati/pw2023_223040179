<?php

session_start();

?>

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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a href="#" class="navbar-logo">MAGNATE.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link" href="#home">Home</a>
          <a class="nav-link" href="#about">About</a>
          <a class="nav-link" href="#Menu">menu</a>
          <a class="nav-link" href="registrasi.php">Regist</a>
          <?php if (isset($_SESSION['login'])) : ?>
            <a class="nav-link" href="logout.php">Logout</a>
          <?php else : ?>
            <a class="nav-link" href="login.php">Login</a>
          <?php endif; ?>
        </div>
      </div>
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
      <a href="register.php" class="cta" style="text-decoration: none;">Pesan Sekarang</a>
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
          MAGNATE is a casual restaurant that specializes in the highest quality dishes at affordable prices.

          The kitchen concept is to skillfully create dishes substituting and complementing fresh, local ingredients. The result is a uniquely European menu with New York balance.
        </p>
        <p>
          CONTINUITY


          Committed to the triple bottom line—people, planet and profit—our management aims to make our restaurants as environmentally conscious as possible. From water to waste, disposables to chemicals, locally sourced food to the materials we use to furnish our spaces, sustainability has always been our top priority. We continually strive to reduce our impact on the environment by taking operational efficiency, material and carbon offset measures

        </p>
      </div>
    </div>
  </section>

  <!--About Section end-->

  <!--Menu Section Start-->
  <section id="Menu" class="menu">
    <h2>Menu</h2>


    <div class="row text-center">
      <div class="col-lg-6">
        <div class="menu-card">
          <img src="img/menu/1.jpg.jpg" height="200" alt="Wagyu RibEye Steak" class="menu-card-img">
          <h3 class="menu-card-title">-Wagyu RibEye Steak-</h3>
          <p class="menu-card-price">IDR 1.800.000</p>
          <a href="https://wa.me/+6283100221704" target="_blank" class="btn"><span class="material-symbols-outlined">
              shopping_cart
            </span></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="menu-card">
          <img src="img/menu/2.jpg.jpg" height="200" alt="louis xiii mozarella pizza" class="menu-card-img">
          <h3 class="menu-card-title">-Louis xiii mozarella pizza-</h3>
          <p class="menu-card-price">IDR 599.000</p>
          <a href="https://wa.me/+6283100221704" target="_blank" class="btn"><span class="material-symbols-outlined">
              shopping_cart
            </span></a>
        </div>
      </div>
    </div>
    <div class="row text-center mt-3">
      <div class="col-lg-6">
        <div class="menu-card">
          <img src="img/menu/3.jpg.jpg" height="200" alt="Oyster Casino" class="menu-card-img">
          <h3 class="menu-card-title">-Oyster casino-</h3>
          <p class="menu-card-price">IDR 890.000</p>
          <a href="https://wa.me/+6283100221704" target="_blank" class="btn"><span class="material-symbols-outlined">
              shopping_cart
            </span></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="menu-card">
          <img src="img/menu/4.jpg.jpg" height="200" alt="Sparkling Orange" class="menu-card-img">
          <h3 class="menu-card-title">-Sparkling Orange-</h3>
          <p class="menu-card-price">IDR 200.000</p>
          <a href="https://wa.me/+6283100221704" target="_blank" class="btn"><span class="material-symbols-outlined">
              shopping_cart
            </span></a>
        </div>
      </div>
    </div>
  </section>


  <!--Menu Section end-->


  <!--Map Section-->
  <section id="map" class="map">

    <div class="row-map ">
      <div class="col justify-content-center d-flex">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31568.26902983222!2d115.26603944999998!3d-8.496111149999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d739f22c9c3%3A0x54a38afd6b773d1c!2sUbud%2C%20Kecamatan%20Ubud%2C%20Kabupaten%20Gianyar%2C%20Bali!5e0!3m2!1sid!2sid!4v1685828050517!5m2!1sid!2sid" allowfullscreen="" style="width: 60%;height: 400px;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      </div>
    </div>

  </section>


  <!--Contac Section end-->


  <!--Footer Start-->
  <footer>
    <div class="socials">
      <a href="https://instagram.com/yesiiddhdyt_?igshid=NTc4MTIwNjQ2YQ=="><i data-feather="instagram"></i></a>
      <a href="https://twitter.com/heresyew?t=rHvO07g1cn3-rFO0nJxSyw&s=09"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>
    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#menu">Menu</a>
    </div>

    <div class="credit">
      <p>Created by <a herf="">yesidedehidayati</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!--Footer end-->


  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

  <!--my javascript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>