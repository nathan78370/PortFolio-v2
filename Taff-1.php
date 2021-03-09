<?php
//Cette fonction doit être appelée avant tout code html
session_start();
include("assets/includes/menu.php");
?>

  <body>
    <div
      class="intro intro-single route bg-image"
      style="background-image: url(assets/img/PortFolio-1/Fond-1.jpg)"
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
          <h1>Cabinet Médical</h1>
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="assets/img/PortFolio-1/Port-1.png" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/PortFolio-1/Taff-2.png" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/PortFolio-1/Taff-4.png" alt="" />
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Information</h3>
                <ul>
                  <li><strong>Catégorie</strong>: PPE</li>
                  <li><strong>Language</strong>: HTML, PHP, SQL</li>
                  <li><strong>Project date</strong>: 2020 - 2019</li>
                  <!--<li>
                    <strong>Lien du Project</strong>: <a> </a><a href="#">Cabinet</a>
                  </li>-->
                </ul>
              </div>
              
              <div class="portfolio-description">
                <h2>Le Cabinet</h2>
                <p>
                  Création d'un logiciel de gestion d'un Cabinet médical permettant 
                  au Patient de pouvoir directement s'enregistrer, au Médecin de voir les RDVs
                  et au assitantes de pouvoir gérer les préscription des médicaments 
                </p>
              </div>
            </div>

            <div class="portfolio-description">
              <h2>Le déroulement </h2>
                  <br>
              <p>
                Le projet cabinet médical a été mon tout premier projet, le sujet de ce 
                projet est que un patient puisse prendre un rendez-vous avec un docteur 
                et que le docteur soit automatiquement averti par ce dernier. Le but de ce 
                projet est de vérifier que nous étudiant savont mettre en place une base 
                de donnée et de savoir faire des apelles dans cette base de donnée.

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
