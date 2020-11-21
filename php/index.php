<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Form PHP </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="CareMed demo project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" type="text/css" href="styles/contact.css">
  <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>
  <div class="super_container">
    <!-- Header -->
    <header class="header trans_200">

      <!-- Top Bar -->
      <div class="top_bar">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                <div class="top_bar_item"><a href="faqs.html">FAQs</a></div>

                <div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">WhatsApp:
                  +563 47558 623</div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Header Content -->
      <div class="header_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="header_content d-flex flex-row align-items-center justify-content-start">
                <nav class="main_nav ml-auto">
                  <ul>
                    <li><a href="index.html">INICIO</a></li>
                    <li><a href="about.html">¿QUÍENES SOMOS?</a></li>
                    <li><a href="services.html">SERVICIOS</a></li>
                    <li><a href="news.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACTO</a></li>
                  </ul>
                </nav>
                <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Logo -->
      <div class="logo_container_outer">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="logo_container">
                <a href="index.html">
                  <div class="logo_content d-flex flex-column align-items-start justify-content-center">
                    <div class="logo_line"></div>
                    <div class="logo d-flex flex-row align-items-center justify-content-center">
                      <div class="logo_text">HAWA<span>II</span></div>
                      <div class="logo_box">+</div>
                    </div>
                    <div class="logo_sub">FISIOTERAPIA</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>

    <!-- Menu -->

    <div class="menu_container menu_mm">

      <!-- Menu Close Button -->
      <div class="menu_close_container">
        <div class="menu_close"></div>
      </div>

      <!-- Menu Items -->
      <div class="menu_inner menu_mm">
        <div class="menu menu_mm">
          <ul class="menu_list menu_mm">
            <li class="menu_item menu_mm"><a href="index.html">INICIO</a></li>
            <li class="menu_item menu_mm"><a href="about.html">¿QUÍENES SOMOS?</a></li>
            <li class="menu_item menu_mm"><a href="services.html">SERVICIOS</a></li>
            <li class="menu_item menu_mm"><a href="news.html">BLOG</a></li>
            <li class="menu_item menu_mm"><a href="contact.html">CONTACTO</a></li>
          </ul>
        </div>
        <div class="menu_extra">

          <div class="menu_emergencies">WhatsApp: +563 47558 623</div>
        </div>

      </div>

    </div>

    <!-- Home -->

    <div class="home">
      <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/plainturquesa.png"
        data-speed="0.8"></div>
      <div class="home_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_content">
                <div class="home_title"><span>CONTACTO</span> HAWAII FISIOTERAPIA</div>
                <div class="breadcrumbs">
                  <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li>Volver</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact -->

    <div class="contact">
      <div class="container">
        <div class="row">

          <!-- Contact Info -->
          <div class="col-lg-6">
            <div class="section_title">
              <h2>Queremos escucharte </h2>
            </div>
            <div class="contact_text" style="text-align: justify;
					text-justify: inter-word;">
              <p>Si requieres información de alguno de nuestros servicios o tienes alguna consulta que hacernos por
                favor rellena el formulario y uno de nuestros Medicos Especialistas se pondrá en contacto contigo lo
                antes posible.</p>
            </div>
            <ul class="contact_about_list">
              <li>
                <div class="contact_about_icon"><img src="images/phone-call.svg" alt=""></div><span>33100-17488 y
                  33100-17489</span>
              </li>
              <li>
                <div class="contact_about_icon"><img src="images/envelope.svg" alt=""></div>
                <span>contacto@fisioterapiahawaii.com</span>
              </li>
              <li>
                <div class="contact_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Hawaii 1679,
                  Colonia Niños Héroes <br> C.P. 44260, Guadalajara, Jalisco. México</span>
              </li>
            </ul>
          </div>

          <!-- Contact Form -->
          <div class="col-lg-6 form_col">
            <div class="contact_form_container">
              <form action="contactform.php" method="post" id="contact_form" class="contact_form">
                <div class="row">
                  <?php
									$Mensaje = "";
									if (isset($_GET['error'])) {
										$Mensaje = "Por Favor Rellene los Espacios en Blanco";
										echo '<div class="alert alert-danger">' . $Mensaje . '</div>';
									}
									if (isset(($_GET)['success'])) {
										$Mensaje = "Tu Mensaje ha Sido Enviado Correctamente";
										echo '<div class="alert alert-success">' . $Mensaje . '</div>';
									}

									?>

                  <div class="col-md-6 input_col">
                    <div class="input_container input_name">
                      <input id="nombre" type="text" name="Nombre" class="contact_input" placeholder="Nombre"
                        required="required">
                    </div>
                  </div>
                  <div class="col-md-6 input_col">
                    <div class="input_container"><input type="email" name="Email" class="contact_input"
                        placeholder="Email" required="required"></div>
                  </div>
                </div>
                <div class="input_container"><input type="text" name="Asunto" class="contact_input" placeholder="Asunto"
                    required="required"></div>
                <div class="input_container"><textarea name="Mensaje" class="contact_input contact_text_area"
                    placeholder="Mensaje" required="required"></textarea></div>
                <button class="button contact_button" name="btn-send"><a href="#">Enviar</a></button>
              </form>
            </div>
          </div>
        </div>
        <div class="row map_row">
          <div class="col">

            <!-- Contact Map -->

            <div class="contact_map">

              <!-- Google Map -->

              <div class="map">
                <div id="google_map" class="google_map">
                  <div class="map_container">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14928.82764841134!2d-103.3599471!3d20.7018208!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x423a74f0557fb037!2sCentro%20M%C3%A9dico%20Hawaii!5e0!3m2!1sen!2suk!4v1603466548170!5m2!1sen!2suk"
                      width="1200" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                      tabindex="0"></iframe>
                    <div id="map"></div>
                  </div>
                </div>
              </div>

              <!-- Working Hours -->
              <div class="box working_hours">
                <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                  <div style="width:29px; height:29px;"><img src="images/alarm-clock.svg" alt=""></div>
                </div>
                <div class="box_title">Horario de Atención</div>
                <div class="working_hours_list">
                  <ul>
                    <li class="d-flex flex-row align-items-center justify-content-start">
                      <div>Lunes – Viernes</div>
                      <div class="ml-auto">8:00 – 21.30</div>
                    </li>
                    <li class="d-flex flex-row align-items-center justify-content-start">
                      <div>Sábado</div>
                      <div class="ml-auto">8:00 – 15:00</div>
                    </li>
                    <li class="d-flex flex-row align-items-center justify-content-start">
                      <div>Domingo</div>
                      <div class="ml-auto">Permanece Cerrado</div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
      <div class="footer_container">
        <div class="container">
          <div class="row">

            <!-- Footer - About -->
            <div class="col-lg-4 footer_col">
              <div class="footer_about">
                <div class="footer_logo_container">
                  <a href="index.html" class="d-flex flex-column align-items-center justify-content-center">
                    <div class="logo_content">
                      <div class="logo d-flex flex-row align-items-center justify-content-center">
                        <div class="logo_text">HAWA<span>II</span></div>
                        <div class="logo_box">+</div>
                      </div>
                      <div class="logo_sub">FISIOTERAPIA</div>
                    </div>
                  </a>
                </div>
                <div class="footer_about_text">
                  <p>En centro Médico Hawaii tu Salud es Nuestra Especialidad.</p>
                </div>
                <ul class="footer_about_list">
                  <li>
                    <div class="footer_about_icon"><img src="images/phone-call.svg" alt=""></div><span>33100-17488 y
                      33100-17489</span>
                  </li>
                  <li>
                    <div class="footer_about_icon"><img src="images/envelope.svg" alt=""></div>
                    <span>contacto@fisioterapiahawaii.com</span>
                  </li>
                  <li>
                    <div class="footer_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Hawaii 1679,
                      Colonia Niños Héroes <br> C.P. 44260, Guadalajara, Jalisco. México</span>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Footer - Links -->
            <div class="col-lg-4 footer_col">
              <div class="footer_links footer_column">
                <div class="footer_title">Enlaces Útiles</div>
                <ul>
                  <li><a href="about.html#testimoniales">Testimoniales</a></li>
                  <li><a href="faqs.html">FAQs</a></li>
                  <li><a href="contact.html">Bolsa de Trabajo</a></li>
                  <li><a href="Aviso de Privacidad.pdf" target="_blanket">Aviso de Privacidad</a></li>
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="about.html">¿Quíenes Somos?</a></li>
                  <li><a href="services.html">Servicios</a></li>
                  <li><a href="news.html">Blog</a></li>


                </ul>
              </div>
            </div>

            <!-- Footer - News -->
            <div class="col-lg-4 footer_col">
              <div class="footer_news footer_column">
                <div class="footer_title">Enlaces Útiles</div>
                <ul>
                  <li>
                    <div class="footer_news_title"><a href="blog1.html">7 razones para visitar al Fisioterapeuta</a>
                    </div>
                    <div class="footer_news_date">Octubre 20, 2020</div>
                  </li>
                  <li>
                    <div class="footer_news_title"><a href="blog3.html">Síndrome del cuello de Texto</a></div>
                    <div class="footer_news_date">Julio 28, 2020</div>
                  </li>
                  <li>
                    <div class="footer_news_title"><a href="blog2.html">COVID-19</a></div>
                    <div class="footer_news_date">Marzo 15, 2020</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
                <div class="cr">
                  Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                  </script> All rights reserved | Centro Médico Hawaii Fisioterapia.</div>
                <div class="footer_social ml-lg-auto">
                  <ul>
                    <li><a href="https://www.facebook.com/Fisioterapia-Hawaii-114880973696248/" target="_blank"><i
                          class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/fisioterapiahawaii/" target="_blank"><i
                          class="fa fa-instagram" aria-hidden="true"></i></a></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="styles/bootstrap4/popper.js"></script>
  <script src="styles/bootstrap4/bootstrap.min.js"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="plugins/parallax-js-master/parallax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCxUbJmYenikufQQ9txIMEfkreAz58-Sw4&callback=initMap">
  </script>
  <script src="js/contact.js"></script>
</body>

</html>