<?php
//Cette fonction doit être appelée avant tout code html
session_start();
include("assets/includes/menu.php");
?>
  <body>
    <!-- ======= Hero Section ======= -->
    <div
      id="fond"
      class="hero route bg-image"
      style="background-image: url(assets/img/fond-login.jpg)"
    >
      <div class="overlay-itro"></div>
      <div class="hero-content display-table">
        <div class="table-cell">
          <div class="container">
            <!--<p class="display-6 color-d">Hello, world!</p>-->
            <h1 class="hero-title mb-4">Portfolio Nathan WENDLING</h1> 
            <p class="hero-subtitle">
              <p class="display-6 color-d">BTS SIO Option SISR</p>
              <!--<span
                class="typed"
                data-typed-items="Designer, Développeur, Manager"
              ></span>-->
            </p>
            <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-sm-6 col-md-5">
                        <div class="about-img">
                          <img
                            src="assets/img/profils.jpg"
                            class="img-fluid rounded b-shadow-a"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-7">
                        <div class="about-info">
                          <p>
                            <span class="title-s">Nom: </span>
                            <span>Nathan WENDLING</span>
                          </p>
                          <p>
                            <span class="title-s">Profil: </span>
                            <span>Étudiant SIO Option SISR</span>
                          </p>
                          <p>
                            <span class="title-s">Email: </span>
                            <span>nathan.wendling@moniris.com</span>
                          </p>
                          <p>
                            <span class="title-s">Téléphone: </span>
                            <span>07 83 64 56 85</span>
                          </p>
                        </div>
                          <a target="_blank" href="https://fr-fr.facebook.com/"><img src="assets/img/facebook.png"></a>&nbsp;&nbsp;
                          <a target="_blank" href="https://twitter.com/?lang=fr"><img src="assets/img/twitter.png"></a>&nbsp;&nbsp;
                          <a target="_blank" href="https://fr.linkedin.com/"><img src="assets/img/linkedin.png"></a>
                      </div>
                    </div>
                    <div class="skill-mf">
                      <p class="title-s">Compétences</p>
                      <span>HTML</span> <span class="pull-right">85%</span>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 85%"
                          aria-valuenow="85"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span>SQL</span> <span class="pull-right">90%</span>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 90%"
                          aria-valuenow="90"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span>PHP</span> <span class="pull-right">80%</span>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 80%"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span>JAVASCRIPT</span>
                      <span class="pull-right">40%</span>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 40%"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span>PYTHON</span>
                      <span class="pull-right">20%</span>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 20%"
                          aria-valuenow="20"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <span>C#</span>
                      <span class="pull-right">40%</span>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width:40%"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="about-me pt-4 pt-md-0">
                      <div class="title-box-2">
                        <h5 class="title-left">Présentation</h5>
                      </div>
                      <p class="lead">
                        Je suis WENDLING Nathan, étudiant en deuxième année de BTS SIO
                        (Services Informatiques aux Organisations), Option SLAM 
                        (Solutions Logicielles et Application Métier) l'option centré
                        sur le développement, a l'école Iris (75017).
                      </p>
                      <p class="lead">
                        Actuellement diplomé du BAC PRO SN (Systèmes Numériques)
                         Option RISC (Réseaux Informatiques et systèmes communicants).
                      </p>
                    </div>
                    <p class="d-flex align-items-center justify-content-center"><a class="btn btn-primary btn js-scroll px-4" href="assets/doc/CV.pdf" target="blank" role="button">Accéder a mon CV</a></p>
                  </div>
                </div>
              </div>
      <!-- End About Section -->

      <!-- ======= Présentation BTS ======= -->
              <div class="title-box">
                <h3 class="title-left">Qu'est ce que le BTS SIO ?</h3>
                  <br>
                <p class="lead">
                  Le Brevet de Technicien Supérieur aux Services Informatiques aux 
                  Organisations (<b>BTS SIO</b>), s'adresse à ceux qui souhaitent se former 
                  en deux ans aux métiers d'administrateur réseau ou de développeur. 
                  Pour par la suite intégré directement le marché du travail ou continuer 
                  des études, dans le domaine de l'informatique.
                </p>
                  <br>
                <h3 class="title-right">Le BTS SIO propose deux spécialités :</h3>
              </div>
              <div class="about">
                <div id="about" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="title-box-2">
                        <h5 class="title-left">Option <b>SISR</b></h5>
                      </div>
                      <p class="lead">
                        L’option Solution d’infrastructure, systèmes et réseaux forme des 
                        professionnels des réseaux et équipements informatiques (installation, 
                        maintenance, sécurité). En sortant d’un <b>BTS SIO SISR</b>, vous serez 
                        capables de gérer et d’administrer le réseau d’une société et d’assurer 
                        sa sécurité et sa maintenance.
                        <br/><br/>
                        Les techniciens supérieurs en informatique option <b>SISR</b>, 
                        peuvent accéder aux métiers de :
                        <br/><br/>
                        • Administrateur systèmes et réseaux 
                        <br/>
                        • Informaticien support et déploiement 
                        <br/>
                        • Pilote d’exploitation 
                        <br/>
                        • Support systèmes et réseaux 
                        <br/>
                        • Technicien d’infrastructure 
                        <br/>
                        • Technicien de production 
                        <br/>
                        • Technicien micro et réseaux
                      </p>
                    </div>
                    <div class="col-md-6">
                      <div class="title-box-2 pt-4 pt-md-0">
                        <h5 class="title-left">Option <b>SLAM</b></h5>
                      </div>
                        <p class="lead">
                        L’option Solutions logicielles et applications métiers forme des 
                        spécialistes des logiciels (rédaction d’un cahier des charges, 
                        formulation des besoins et spécifications, développement,
                        intégration au sein de la société).
                        <br/><br/>
                        Les techniciens supérieurs en informatique option <b>SLAM</b>, 
                        peuvent accéder aux métiers de :
                        <br/><br/>
                        • Développeur d’applications informatiques  
                        <br/>
                        • Développeur informatique 
                        <br/>
                        • Analyste d’applications ou d’études
                        <br/>
                        • Analyste programmeur 
                        <br/>
                        • Programmeur analyste 
                        <br/>
                        • Programmeur d’applications
                        <br/>
                        • Responsable des services applicatifs 
                        <br/>
                        • Technicien d’études informatiques 
                        </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Portfolio Section ======= -->
      <section id="work" class="portfolio-mf sect-pt4 route">
        <div id="portfolio" class="paddsection">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box text-center">
                  <h3 class="title-a">Portfolio</h3>
                  <div class="col-md-12 mb-3">
                  <div class="line-mf"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <div id="myBtnContainer">
                    <li class="btn123 active123" onclick="filterSelection123('all123')">Tout</li>
                    <li class="btn123" onclick="filterSelection123('DevWeb')">Développement Web</li>
                    <li class="btn123" onclick="filterSelection123('Stage')">Stage</li>
                    <li class="btn123" onclick="filterSelection123('Syst')">Système</li>
                    <li class="btn123" onclick="filterSelection123('Program')">Programmation</li>
                  </div>
                  
                </ul>
              </div>
          
                <div class="col-md-4 column123 DevWeb">
                  <div class="work-box">
                    <a
                      href="assets/img/PortFolio-1/Taff-1.png"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox">
                      <div class="work-img">
                        <img src="assets/img/PortFolio-1/Taff-1.png" alt="" class="img-fluid" />
                      </div>
                    </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">Cabinet Médical</h2>
                        <div class="w-more">
                          <span class="w-ctegory">Développement Web</span> /
                          <span class="w-date">2019</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="Taff-1.php"> 
                            <span class="bi bi-plus-circle"></span>
                          </a>
                        </div>
                      </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 column123 Stage">
                        <div class="work-box">
                          <a
                            href="assets/img/Portfolio-2/Taff-2.png"
                            data-gallery="portfolioGallery"
                            class="portfolio-lightbox"
                          >
                          <div class="work-img">
                            <img src="assets/img/PortFolio-2/Taff-2.png" alt="" class="img-fluid" />
                          </div>
                        </a>
                        <div class="work-content">
                          <div class="row">
                            <div class="col-sm-8">
                            <h2 class="w-title">CEA Grenoble</h2>
                            <div class="w-more">
                            <span class="w-ctegory">Stage</span> /
                            <span class="w-date">16 Nov. - 18 Déc. 2020</span>
                            </div>
                              </div>
                                <div class="col-sm-4">
                                  <div class="w-like">
                                  <a href="Taff-2.php">
                                    <span class="bi bi-plus-circle"></span
                                  ></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 column123 Syst">
                          <div class="work-box">
                            <a
                              href="assets/img/PortFolio-3/Taff-3.png"
                              data-gallery="portfolioGallery"
                              class="portfolio-lightbox"
                            >
                          <div class="work-img">
                            <img src="assets/img/PortFolio-3/Taff-3.png" alt="" class="img-fluid" />
                          </div>
                          </a>
                          <div class="work-content">
                            <div class="row">
                              <div class="col-sm-8">
                                <h2 class="w-title">OCSInventory</h2>
                                <div class="w-more">
                                  <span class="w-ctegory">Système</span> /
                                  <span class="w-date">2020</span>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="w-like">
                                  <a href="Taff-3.php">
                                    <span class="bi bi-plus-circle"></span
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 column123 DevWeb">
                        <div class="work-box">
                          <a
                            href="assets/img/PortFolio-4/unknown-2.png"
                            data-gallery="portfolioGallery"
                            class="portfolio-lightbox"
                          >
                            <div class="work-img">
                              <img src="assets/img/PortFolio-4/unknown-2.png" alt="" class="img-fluid" />
                            </div>
                          </a>
                          <div class="work-content">
                            <div class="row">
                              <div class="col-sm-8">
                                <h2 class="w-title">PPE</h2>
                                <div class="w-more">
                                  <span class="w-ctegory">Développement Web</span> /
                                  <span class="w-date">2019 - 2021</span>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="w-like">
                                  <a href="Taff-4.php">
                                    <span class="bi bi-plus-circle"></span
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">
                &copy; Copyright <strong>PortFolio</strong>. All Rights Reserved
              </p>
              <div class="credits">
                Designed by
                <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>
</html>
