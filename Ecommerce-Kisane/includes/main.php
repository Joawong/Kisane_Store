</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
            <?php
            if (!isset($_SESSION['customer_email'])) {
              echo "Bienvenido : Usuario!";
            } else {
              echo "Bienvenido : " . $_SESSION['customer_email'] . "!";
            }
            ?>
          </a>
        </div>

        <div class="basket">
          <a href="./cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>


        <ul class="login">

          <li class="login__item">
            <?php
            if (!isset($_SESSION['customer_email'])) {
              echo '<a href="customer_register.php" class="login__link">Registrarse</a>';
            } else {
              echo '<a href="customer/my_account.php?my_orders" class="login__link">Mi Cuenta</a>';
            }
            ?>
          </li>


          <li class="login__item">
            <?php
            if (!isset($_SESSION['customer_email'])) {
              echo '<a href="checkout.php" class="login__link">Iniciar Sesión</a>';
            } else {
              echo '<a href="./logout.php" class="login__link">Desloguear</a>';
            }
            ?>

          </li>
        </ul>

      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="/Ecommerce-Kisane/index.php">
            <img class="logo__img" src="images/logo.png" alt="Kisane logotype" width="200" height="10">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="/Ecommerce-Kisane/shop.php">
                Hombres

              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="/Ecommerce-Kisane/shop.php">
                Mujeres

              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="/Ecommerce-Kisane/shop.php">
                Tienda
              </a>
            </li>
            <li class="categories__item">
              <a class="categories__link" href="/Ecommerce-Kisane/about.php">
                Sobre Nosotros
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
                Cuenta
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Opciones</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="/Ecommerce-Kisane/customer/my_account.php?my_wishlist" class="dropdown__link">Mi Wishlist</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="/Ecommerce-Kisane/customer/my_account.php?my_orders" class="dropdown__link">Mis Ordenes</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="/Ecommerce-Kisane/cart.php" class="dropdown__link">Carrito de Compras</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="/Ecommerce-Kisane/customer/my_account.php?edit_account" class="dropdown__link">Editar Cuenta</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="//Ecommerce-Kisane/customer/my_account.php?change_pass" class="dropdown__link">Cambiar Contraseña</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="/Ecommerce-Kisane/customer/my_account.php?delete_account" class="dropdown__link">Borrar Cuenta</a>
                      </li>
                    </ul>
                  </div>
                </div>


              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>