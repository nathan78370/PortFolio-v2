<?php
//Cette fonction doit être appelée avant tout code html
session_start();
include("assets/includes/menu.php");
?>

  <body>
    <div
      class="intro intro-single route bg-image"
      style="background-image: url(assets/img/PortFolio-3/fond-1.jpg)"
    >
    
      <!--<div class="overlay-mf"></div>-->
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
          </br>
          </br>
          </br>
          </br>
          </br>
            <!--<ol class="breadcrumb d-flex justify-content-center">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Portfolio Details 2</li>
            </ol>-->
          </div>
        </div>
      </div>
    </div>

    <main id="main">
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
          <div class="row gy-4">
          <h1>OCSInventory</h1>
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="assets/img/PortFolio-3/Taff-3.png" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/PortFolio-3/Taff-3.png" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/PortFolio-3/Taff-3.png" alt="" />
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Information</h3>
                <ul>
                  <li><strong>Catégorie</strong>: Système</li>
                  <li><strong>Language</strong>: VMWare</li>
                  <li><strong>Project date</strong>: 2020 - 2021</li>
                  <!--<li>
                    <strong>Lien du Project</strong>: <a> </a><a href="assets/doc/Rapport-de-Stage.pdf">Rapport de Stage</a>
                  </li>-->
                </ul>
              </div>
              
              <div class="portfolio-description">
                <h2>OCSInventory</h2>
                <p>
                  A compléter plus tard.
                </p>
              </div>
            </div>

            <div class="portfolio-description">
              <h2>Le travail</h2>
                  <br>
              <p>
                A compléter plus tard.
              </br>
                A compléter plus tard.
              </p>
                  <br>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Details Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">
                &copy; Copyright
              </p>
              <div class="credits">
                Designed by
                <a href=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
