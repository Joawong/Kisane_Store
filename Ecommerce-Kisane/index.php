<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
$con = mysqli_connect('localhost', 'root', 'root', 'ecomm_kisanestore');

?>


<!-- Cover -->
<main>
  <div class="hero">
    <a href="/Ecommerce-Kisane/shop.php" class="btn1">Ver todos los productos
    </a>
  </div>
  <!-- Main -->
  <div class="wrapper">
    <h1>Colecciones<h1>

  </div>



  <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

      <?php

      getPro();

      ?>

    </div><!-- row Ends -->

  </div><!-- container Ends -->
  <!-- FOOTER -->
  <footer class="page-footer">

    <div class="footer-nav">
      <div class="container clearfix">

        <!-- refs added -->
        <div class="footer-nav__col footer-nav__col--account">
          <div class="footer-nav__heading">Tu cuenta</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="cart.php" class="footer-nav__link">Ver Carrito</a>
            </li>
            <li class="footer-nav__item">
              <a href="/Ecommerce-Kisane/customer/my_account.php?my_orders" class="footer-nav__link">Ubicar Orden</a>
            </li>
            <li class="footer-nav__item">
              <a href="/Ecommerce-Kisane/customer/my_account.php?edit_account" class="footer-nav__link">Actualizar Información</a>
            </li>
          </ul>
        </div>


        <div class="footer-nav__col footer-nav__col--contacts">
          <div class="footer-nav__heading">Contact details</div>
          <address class="address">
            Head Office: KisaneStoreCR.<br>
            Heredia Costa Rica
          </address>
          <div class="phone">
            Telephone:
            <a class="phone__number" href="tel:0123456789">0123-456-789</a>
          </div>
          <div class="email">
            Email:
            <a href="mailto:kisanestore24@gmail.com" class="email__addr">support@gmail.com</a>
          </div>
        </div>

      </div>
    </div>

    <div class="page-footer__subline">
      <div class="container clearfix">

        <div class="copyright">
          &copy; <?php echo date("Y"); ?> KisaneStoreCR&trade;
        </div>

      </div>
    </div>
  </footer>
  </body>

  </html>