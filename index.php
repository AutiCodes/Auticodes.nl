<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AutiCodes</title>
  <meta content="My portfolio" name="description">
  <meta content="Kelvin de Reus AutiCodes Portfolio" name="keywords">
  <meta content="Kelvin de Reus" name="author">
  <meta name="og:image" content="assets\img\AutiCodes2.png">
  <meta name="og:title" content="Kelvin de Reus">
  <meta name="twitter:image" content="assets\img\AutiCodes2.png">
  <meta name="twitter:title" content="Kelvin de Reus">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
  <header id="header" class="header d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i><span>What i do</span></a></li>
        <li><a href="https://uptime.auticodes.nl" target="_blank"><i class="bi bi-diagram-2 navicon"></i><span>Uptime page</span></a></li>
      </ul>
    </nav>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
      <img src="assets/img/bgnew.png" alt="">

      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h2 class="text-white">AutiCodes</h2>
            <p class="text-white"><span class="typed" data-typed-items="Change code, not the world. But later, change the world with that code."></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            <div class="social-links">
              <a href="https://github.com/AutiCodes" target="_blank" class="text-white"><i class="bi bi-github"></i></a>
              <a href="https://www.youtube.com/@AutiCodes" target="_blank" class="text-white"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>
        </p>
      </div>
    <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/ik-cut.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>
              Developer, IT fanatic and RC pilot
            </h2>
            <p class="fst-italic py-3">
            I'm a tech enthusiast with an love for programming, web hosting, hardware, software, electronics and building awesome but functional projects!<br>
            In my spare time i love to go to the gym and fly with RC planes and drones by an local RC club.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>11 may 2001</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>https://auticodes.nl</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Groenlo, Netherlands</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>
                    <?php
                      $diff = date_diff(date_create("11-05-2001"), date_create(date("d-m-Y")));
                      echo $diff->format("I'm %y years, %m months and %d days old");
                    ?>
                  </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>contact@auticodes.nl</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /About Section -->


    <!-- Resume Section -->
    <section id="resume" class="resume section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p></p>
      </div>
      <!-- End Section Title -->

      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Software developer</h4>
              <h5>11-2024 - 12-2024</h5>
              <p><em>hanninkhof.de</em></p>
              <ul>
                <li>
                  Software development
                </li>
                <li>
                  Development off an paying, booking and customer management system for an vacation home company
                </li>
                <li>
                  also helping them configuring their company website
                </li>
              </ul>
            </div>
            <!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Helpdesk employee</h4>
              <h5>02-2022 - 06-2022</h5>
              <p><em>Teleperformance, Netherlands</em></p>
              <ul>
                <li>
                  First line helpdesk
                </li>
                <li>
                  Giving tech support to employees
                </li>
                <li>
                  Making manuals for other helpdesk employees
                </li>
              </ul>
            </div>
            <!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>IT EMPLOYEE</h4>
              <h5>11-2021 - 12-2021</h5>
              <p><em>Centralpoint, Netherlands</em></p>
              <ul>
                <li>IT migration, delivering laptops to employees</li>
              </ul>
            </div><!-- End Resume Item -->
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Services i run for others</h3>

            <div class="resume-item pb-0">
              <h4>festivalkleintjehollands.nl (paid)</h4>
              <ul>
                <li>Web hosting</li>
                <li>Mailserver hosting</li>
                <li><a href="https://festivalkleintjehollands.nl" target="_blank">TRMC.nl</a></li>
              </ul>
            </div>
            <!-- End Resume Item -->

            <div class="resume-item pb-0">
              <h4>TRMC.nl (paid)</h4>
              <ul>
                <li>Web hosting</li>
                <li>Mailserver hosting</li>
                <li>Web development</li>
                <li><a href="https://trmc.nl" target="_blank">TRMC.nl</a></li>
              </ul>
            </div>
            <!-- End Resume Item -->

            <div class="resume-item pb-0">
              <h4>AllDayTechAndGaming.nl</h4>
              <ul>
                <li>Web hosting</li>
                <li>Mailserver hosting</li>
                <li>Web and Discord bot development</li>
                <li><a href="https://alldaytechandgaming.nl" target="_blank">AllDayTechAndGaming.nl</a></li>
              </ul>
            </div>
            <!-- End Resume Item -->
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Projects</h3>

            <div class="resume-item pb-0">
              <h4>Kiyomi</h4>
              <p>
                <em>
                  An custom solution build for <a href="https://trmc.nl target="_blank">TRMC</a>. It allows for club members to register their flights easily before taking flight on the club field. Management from TRMC can then view the flights, export them for them for the local authority and more.
                </em>
              </p>
              <ul>
                <li><a href="">
                  <div class="social-links">
                    <a href="https://github.com/AutiCodes/Kiyomi" target="_blank" class="text-white">
                      <i class="bi bi-github">
                        Github
                      </i>
                    </a>
                </div></a></li>
                <li>In active development</li>
              </ul>
            </div>
            <!-- End Resume Item -->

            <div class="resume-item pb-0">
              <h4>Sakura CMS</h4>
              <p><em>An Laravel based CMS</em></p>
              <ul>
              <li><a href="">
                <div class="social-links">
                  <a href="https://github.com/AutiCodes/Sakura" target="_blank" class="text-white">
                    <i class="bi bi-github">
                      Github
                    </i>
                  </a>
              </div></a></li>
              <li>Still work in progress</li>
            </ul>
            </div>

            <div class="resume-item pb-0">
              <h4>Contributor Invoiceplane</h4>
              <p><em>An Invoice management system. Currently contributing to V2</em></p>
              <ul>
              <li><a href="">
                <div class="social-links">
                  <a href="https://github.com/InvoicePlane" target="_blank" class="text-white">
                    <i class="bi bi-github">
                      Github
                    </i>
                  </a>
              </div></a></li>
              <li>Still work in progress</li>
            </ul>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Projects</h3>

            <div class="resume-item pb-0">
              <h4>Wordpress plugin</h4>
              <p><em>An Wordpress plugin to send an notification to an Discord channel when a new article has been posted</em></p>
              <ul>
                <li><a href="">
                  <div class="social-links">
                    <a href="https://github.com/AutiCodes/Wordpress-posts-to-Discord" target="_blank" class="text-white">
                      <i class="bi bi-github">
                        Github
                      </i>
                    </a>
                </div></a></li>
                <li>Finished</li>
              </ul>
            </div>

            <div class="resume-item pb-0">
              <h4>Get my IP</h4>
              <p>
                <em>
                  I was done with pulling 10MB+ to get my WAN IP. So i've made my own!
                </em>
              </p>
              <ul>
                <li><a href="">
                  <div class="social-links">
                    <a href="https://github.com/AutiCodes/get-my-ip" target="_blank" class="text-white">
                      <i class="bi bi-github">
                        Github
                      </i>
                    </a>
                </div></a></li>
                <li>Finished</li>
              </ul>
            </div>
            <!-- End Resume Item -->

            <div class="resume-item pb-0">
              <h4>AllDayBot</h4>
              <p>
                <em>
                  A Discord bot build for a tech&gaming community
                </em>
              </p>
              <ul>
                <li><a href="">
                  <div class="social-links">
                    <a href="https://github.com/AutiCodes/AllDayBot" target="_blank" class="text-white">
                      <i class="bi bi-github">
                        Github
                      </i>
                    </a>
                </div></a></li>
                <li>In active development</li>
              </ul>
            </div>
            <!-- End Resume Item -->
          </div>
        </div>
      </div>
    </section>
    <!-- /Resume Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>What i do</h2>
        <p>
          I do a lot of stuff. Tho these below are the main things.
        </p>
      </div><!-- End Section Title -->

      <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item item-cyan position-relative">
            <div class="icon">
              <img src="assets/img/services/code.png" width="100" height="100">
            </div>
            <a href="" class="stretched-link">
              <h3>Software development</h3>
            </a>
            <p>Coding websites with Laravel and Bootstrap. Creating Discord bots with Disnake.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item item-orange position-relative">
            <div class="icon">
              <img src="assets/img/services/server.png" width="100" height="100">
            </div>
            <a href="" class="stretched-link">
              <h3>Hosting</h3>
            </a>
            <p>Hosting websites, databases and Discord bots on Ubuntu server 22.04 and 24.04 LTS.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item item-teal position-relative">
            <div class="icon">
              <img src="assets/img/services/email.png" width="100" height="100">
            </div>
            <a href="" class="stretched-link">
              <h3>E-mail hosting</h3>
            </a>
            <p>Hosting E-mail services with Exim, Dovecot and an SMTP relay.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item item-red position-relative">
            <div class="icon">
              <img src="assets/img/services/site.png" width="100" height="100">
            </div>
            <a href="" class="stretched-link">
              <h3>Web management</h3>
            </a>
            <p>Managing websites like WordPress.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item item-indigo position-relative">
            <div class="icon">
              <img src="assets/img/services/thinker.png" width="100" height="100">
            </div>
            <a href="" class="stretched-link">
              <h3>Thinkering</h3>
            </a>
            <p>I love to thinker with hardware, software and electronics.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item item-pink position-relative">
            <div class="icon">
              <img src="assets/img/services/cad.png" width="100" height="100">
            </div>
            <a href="" class="stretched-link">
              <h3>CAD</h3>
            </a>
            <p>Creating design for my hobby in the RC plane's</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- /Services Section -->

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What people think of my work</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>
                        I am super happy with Kelvin's services! He makes sure my website always runs fast and secure, and communication is smooth and hassle-free. That's what we as Rotterdammers like. Always available, quick with solutions - highly recommended for carefree website management!
                      </span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Sander Den Breejen</h3>
                    <h4>Ceo &amp; Founder HandBuildComputers</h4>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="assets/img/testimonials/handbuildcomputer.png" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>
                      I am the secretary of the Twentse Radio Modelvliegtuig Club TRMC. Fortunately, we have Kelvin as a member in our beautiful active association. Kelvin offered his services to host our website www.trmc.nl and to update it together with me. In addition, Kelvin has created a club manager for us in which we can keep track of flights made but also communicate via email with our members. The membership file is also kept in it. We are very happy with his service, the website and the club manager are running to our full satisfaction and more importantly everything is well secured.
                      </span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Wim</h3>
                    <h4>Secretary TRMC</h4>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="assets/img/testimonials/trmc.png" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div> <!-- End testimonial item -->

          </div>
        <div class="swiper-pagination"></div>
      </div>

      </div>
    </section><!-- /Testimonials Section -->
  </main>

  <footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <div class="copyright">
        <span>Copyright</span> <strong class="px-1 sitename">Kelvin de Reus </strong> <?php echo date('Y'); ?>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>