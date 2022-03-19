<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap"
      rel="stylesheet"
    />
    <title>Kännykän Kuoret Netistä</title>
  </head>
  <body>
    <header id="kk-header" class="kk-header"></header>
      <div class="kk-header__main">
      <!--TOP BAR TEXT-->
      <div class="kk-header__top-bar">
        <div class="bg-primary text-dark text-center position-relative pt-2 pb-2">
          <div class="kk-header__top-bar-container">FREE SHIPPING OVER 40$</div>
        </div>
      </div>

      <!--HEADER-->
      <div class="kk-header__general-header">
        <div class="container">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <a class="text-muted kk-header__icon-search" href="#">
                <i class="bi bi-search text-right"></i>
              </a>
            </div>
            <div class="col-4 text-center">
              <a class="kk-header__logo text-dark" href="/kannykankuoret.fi/public"
                ><img
                  src="./assets/img/KännykänKuoretLogo.png"
                  width="246"
                  height="92"
                  alt="Kännykän Kuoret"
              /></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="text-muted kk-header__login-customer" href="login.php"
                >Login / Register</a
              >
              <a class="icon kk-header__top-icon-cart mx-3" href="#"
                ><i class="bi bi-bag"></i
              ></a>
            </div>
          </div>
        </div>
      </div>

            <?php include(TEMPLATE_FRONT . DS . "header-bottom.php") ?>
            <?php include(TEMPLATE_FRONT . DS . "header-right.php") ?>
          </div>
          </div>
        </div>
      </div>
    </header>