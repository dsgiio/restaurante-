<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurante Delas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/topo.jpg" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Topo da pagina ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>11 4002-8922</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Seg-Sab: 11AM - 23PM</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Restaurante Delas</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#combos">Combos</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefes</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="cadastrar-usuario.php">Cadastro</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bem-vindos ao <span>Restaurante Delas</span></h1>
          <h2>Se um dia você sentir um vazio, coma que é fome</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Nosso Menu</a>
          </div>
        </div>


      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="../assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>PROGRAMAÇÃO DO RESTAURANTE</h3>
            <p class="fst-italic">
              Horário de Funcionamento <br> <br>
              De Segunda á Sábado das 11h ás 23h <br>
              Aos Domingos das 11h ás 15h
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   <!-- ======= Menu Section ======= -->
   <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Menu</h2>
        <p>Nosso Cardápio</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-starters">Favoritos</li>
            <li data-filter=".filter-salads">Saladas</li>
            <li data-filter=".filter-specialty">Combos</li>
          </ul>
        </div>
      </div>

      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6 menu-item filter-starters">
          <img src="../assets/img/menu/carbonara.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Macarrão à carbonara</a><span>R$60,00 </span>
          </div>
          <div class="menu-ingredients">
             Macarrão, molho carbonara e bacon
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="../assets/img/menu/ravioli.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Ravioli de 4 queijos</a> <id= 8><span>R$70,00</span>
          </div>
          <div class="menu-ingredients">
            Massa, molho ao sugo e manjericão
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="../assets/img/menu/nhoque.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Nhoque</a><span>R$55,00</span>
          </div>
          <div class="menu-ingredients">
            Massa, molho ao sugo, tomate cereja e manjericão
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="../assets/img/menu/macarrao.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Macarrão ao molho sugo</a><span>R$40,00</span>
          </div>
          <div class="menu-ingredients">
            Macarrão, molho ao sugo, tomate e manjericão
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="../assets/img/menu/fettuccine.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Fettuccine alfredo</a><span>R$65,00</span>
          </div>
          <div class="menu-ingredients">
            Massa, molho alfredo e manjericão
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="../assets/img/menu/rondelli.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Rondelli de presunto e queijo</a><span>R$65,00</span>
          </div>
          <div class="menu-ingredients">
            Massa, molho ao sugo, manjericão e queijo ralado
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="../assets/img/menu/salada.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Salada de massa grega</a><span>R$30,00</span>
          </div>
          <div class="menu-ingredients">
            Massa tipo fusilli, vinagre, pés de salsa, queijo feta, azeitonas pretas, chá de orégãos
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="../assets/img/menu/farfalle.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Macarrão farfalle</a><span>R$50,00</span>
          </div>
          <div class="menu-ingredients">
            Massa, ervilha, bacon, molho à bolonhesa
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="../assets/img/menu/panqueca.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Panqueca</a><span>R$45,00</span>
          </div>
          <div class="menu-ingredients">
            Massa, presunto, queijo, molho ao sugo, queijo ralado e manjericão
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Menu Section -->

  

  <!-- =======  Combo Section ======= -->
  <section id="combos" class="combos">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Combos</h2>
        <p>Nossos combos</p>
      </div>

      <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="../assets/img/combo/familia.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Combo família</h3>
                <div class="price">
                  <p><span>R$200,00</span></p>
                </div>
                <p class="fst-italic">
                  Celebre a Tradição com Nosso Combo Família: Macarrão ao Molho Sugo </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i> Macarrão ao Molho Sugo;</li>
                  <li><i class="bi bi-check-circled"></i> Ingredientes: Macarrão, molho ao sugo, tomate e manjericão;</li>
                  <li><i class="bi bi-check-circled"></i> O combo família serve 5 pessoas.</li>
                </ul>
                <p>
                  Em nosso restaurante, celebramos a autenticidade italiana com nosso Combo Família, destacando o amado Macarrão ao Molho Sugo. Em cada fio de massa e em cada tomate suculento, você encontrará o sabor autêntico da cozinha italiana, preparado com amor e paixão, pronto para encantar toda a família. Agradecemos por nos permitirem fazer parte de suas memórias familiares. </p> 
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="../assets/img/combo/casal.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Combo casal</h3>
                <div class="price">
                  <p><span>R$150,00</span></p>
                </div>
                <p class="fst-italic">
                  Um Jantar Romântico: Combo Casal Fettuccine Alfredo
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i> Fettuccine alfredo;</li>
                  <li><i class="bi bi-check-circled"></i> Ingredientes: Massa, molho alfredo e manjericão;</li>
                  <li><i class="bi bi-check-circled"></i> O combo casal serve 2 pessoas.</li>
                </ul>
                <p>
                  Em nosso restaurante, apresentamos o Combo Casal Fettuccine Alfredo, uma experiência gastronômica romântica. Começando com bruschettas frescas, o destaque é o Fettuccine Alfredo, onde a massa suave dança com um molho cremoso e rico. A refeição culmina com sobremesas artesanais. Cada prato é mais que comida; é uma celebração do amor compartilhado. Agradecemos por escolherem nosso restaurante para este momento especial.
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="../assets/img/combo/kids.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Combo Kids</h3>
                <div class="price">
                  <p><span>R$100,00</span></p>
                </div>
                <p class="fst-italic">
                  Aventura Saborosa para Pequenos Gourmets: Combo Kids Panqueca
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i> Panqueca;</li>
                  <li><i class="bi bi-check-circled"></i> Ingredientes: Massa, presunto, queijo, molho ao sugo, queijo ralado e manjericão;</li>
                  <li><i class="bi bi-check-circled"></i> O combo kids serve 3 crianças.</li>
                </ul>
                <p>
                  Convidamos vocês a embarcar em uma experiência mágica com nosso Combo Kids Panqueca! Começamos com panquecas em forma de animais, seguidas por panquecas personalizadas, onde as crianças podem escolher suas coberturas favoritas. Para a sobremesa, panquecas recheadas com chocolate e morangos. Cada mordida é uma diversão criativa e deliciosa. 
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Combos Section -->

  <!-- ======= Chefs Section ======= -->
  <section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Chefes</h2>
        <p>Nossos chefes profissionais</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="../assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Roberto Lopez</h4>
                <span>Chefe</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <img src="../assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Alencar</h4>
                <span>Chefe</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img src="../assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Rodrigo Fernandes</h4>
                <span>Cozinheiro</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Chefs Section -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="footer-info">
            <h3>Restaurante Delas</h3>
            <p>
              Av. Salgado Filho, 3501, Centro, Guarulhos <br> SP, 07115-000A<br><br>
              <strong>Telefone:</strong> 4002-8922<br>
              <strong>Email:</strong> restaurantedelas@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
        

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Menu</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Combos</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Chefes</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
          </ul>
        </div>

        

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Restaurante Delas</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>