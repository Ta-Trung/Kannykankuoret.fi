<?php require_once("../resources/config.php") ?>

<!--HEADER-->
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>   
    <!--MAIN CONTENT-->
    
    <?php include(TEMPLATE_FRONT . DS . "slider.php") ?>

    <!--PRODUCTS-->
    <div class="container section-title-container mb-3">
      <h3 class="section-title section-title-normal">
        <b></b>
        <span class="section-title__main">New Arrivals</span>
        <b></b>
        <a href="#">
          Browse all
          <i class="bi bi-chevron-right ml-5"></i>
        </a>
      </h3>
    </div>

    <div class="container">
    <div class="row position-relative">

      <?php get_products(); ?>

  <!--SLOGAN WITH ICONS-->
  <div class="row mb-3">
    <div class="container">
      <div class="column-inner">
        <div class="kk-seperator">
          <hr class="kk-seperator-line align-items-center solid">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  <div class="row">
      <div class="col-md-4">
        <div class="column-inner">
          <div class="kk-slogan-box px-2 align-items-center text-center">
            <div class="kk-slogan-box__top">
              <div class="kk-slogan-box__icon">
                <i class="bi bi-bug"></i>
              </div>
              <div class="kk-slogan-box__header">
                <h3 class="kk-slogan-box__title mt-0">CUSTOMER SUPPORT</h3>
                <p>Need Assistence?</p>
              </div>
              <div class="kk-slogan-box__description mt-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, possimus!
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="column-inner">
          <div class="kk-slogan-box px-2 align-items-center text-center">
            <div class="kk-slogan-box__top">
              <div class="kk-slogan-box__icon">
                <i class="bi bi-bug"></i>
              </div>
              <div class="kk-slogan-box__header">
                <h3 class="kk-slogan-box__title mt-0">CUSTOMER SUPPORT</h3>
                <p>Need Assistence?</p>
              </div>
              <div class="kk-slogan-box__description mt-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, possimus!
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="column-inner">
          <div class="kk-slogan-box px-2 align-items-center text-center">
            <div class="kk-slogan-box__top">
              <div class="kk-slogan-box__icon">
                <i class="bi bi-bug"></i>
              </div>
              <div class="kk-slogan-box__header">
                <h3 class="kk-slogan-box__title mt-0">CUSTOMER SUPPORT</h3>
                <p>Need Assistence?</p>
              </div>
              <div class="kk-slogan-box__description mt-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, possimus!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--FEATURE PRODUCTS-->
  <div class="container section-title-container mt-5 mb-3">
    <h3 class="section-title section-title-normal">
      <b></b>
      <span class="section-title__main">FEATURE PRODUCTS</span>
      <b></b>
      <a href="#">
        Browse all
        <i class="bi bi-chevron-right ml-5"></i>
      </a>
    </h3>
  </div>

  <div class="container">
    <div class="row position-relative">
        <div class="col-md-3 product-small">
          <div class="product-small__inner">
            <div class="product-small__box">
              <div class="product-small__image">
                <a href="#"><img src="https://picsum.photos/283/322?random=4" alt="Chicago" width="283" height="322"></a>
              </div>
              <div class="product-small__text">
                <div class="title-wrapper">
                  <p class="product-small__category no-text-overflow is-smaller opacity-75 overflow-hidden">Category 1</p>
                  <p class="product-small__name">
                    <a href="#">Product 1</a>
                  </p>
                </div>
                <div class="price-wrapper d-block">
                  <span class="product-small__price d-block">
                    <span class="product-small__amount">
                    <bdi>
                      <span>€</span>
                      18,00
                    </bdi>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 product-small">
          <div class="product-small__inner">
            <div class="product-small__box">
              <div class="product-small__image">
                <a href="#"><img src="https://picsum.photos/283/322?random=5" alt="Chicago" width="283" height="322"></a>
              </div>
              <div class="product-small__text">
                <div class="title-wrapper">
                  <p class="product-small__category no-text-overflow is-smaller opacity-75 overflow-hidden">Category 1</p>
                  <p class="product-small__name">
                    <a href="#">Product 1</a>
                  </p>
                </div>
                <div class="price-wrapper d-block">
                  <span class="product-small__price d-block">
                    <span class="product-small__amount">
                    <bdi>
                      <span>€</span>
                      18,00
                    </bdi>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 product-small">
          <div class="product-small__inner">
            <div class="product-small__box">
              <div class="product-small__image">
                <a href="#"><img src="https://picsum.photos/283/322?random=6" alt="Chicago" width="283" height="322"></a>
              </div>
              <div class="product-small__text">
                <div class="title-wrapper">
                  <p class="product-small__category no-text-overflow is-smaller opacity-75 overflow-hidden">Category 1</p>
                  <p class="product-small__name">
                    <a href="#">Product 1</a>
                  </p>
                </div>
                <div class="price-wrapper d-block">
                  <span class="product-small__price d-block">
                    <span class="product-small__amount">
                    <bdi>
                      <span>€</span>
                      18,00
                    </bdi>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 product-small">
          <div class="product-small__inner">
            <div class="product-small__box">
              <div class="product-small__image">
                <a href="#"><img src="https://picsum.photos/283/322?random=7" alt="Chicago" width="283" height="322"></a>
              </div>
              <div class="product-small__text">
                <div class="title-wrapper">
                  <p class="product-small__category no-text-overflow is-smaller opacity-75 overflow-hidden">Category 1</p>
                  <p class="product-small__name">
                    <a href="#">Product 1</a>
                  </p>
                </div>
                <div class="price-wrapper d-block">
                  <span class="product-small__price d-block">
                    <span class="product-small__amount">
                    <bdi>
                      <span>€</span>
                      18,00
                    </bdi>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>  
    </div>
  </div>

  <!--SIDEBAR-->

  <div class="container">
  <div class="row main-content-wrap">
    <div class="col-md-3 sidebar position-relative">
      <div class="sidebar__pin-wrapper">
        <div class="sidebar__content">
          <aside class="sidebar__sale-banner">
            <div class="block">
              <div class="kk-block">
                <div class="row sidebar__info-box mx-0 mt-0">
                  <div class="container col-md-12 position-relative">
                    <div class="wrapper pt-0">
                      <div class="sidebar__carousel mb-4 pb-1">
                        <div class="sidebar__stage-outer">
                          <div class="sidebar__stage px-0">
                            <div class="sidebar__item">
                              <div class="sidebar__item-box text-center ">
                                <div class="sidebar__icon-top text-center">
                                  <div class="sidebar__icon">
                                    <img src="https://picsum.photos/113/113?random=8" alt="Chicago" width="113" height="113">
                                  </div>
                                </div>
                                <div class="sidebar__icon-header">
                                  <h3 class="sidebar__icon-title mt-0">
                                    <small>UP TO</small>
                                    50
                                    <sup>%</sup>
                                    <sub>off</sub>
                                  </h3>
                                </div>
                                <div class="sidebar__icon-description position-relative">
                                  Bags, Clothing, T-Shirts, Shoes, Watches and much more...
                                  <a href="#" class="sidebar__icon-read">
                                    VIEW SALE
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          <aside class="sign-up">
            <div class="sign-up__text">
              <div class="sign-up__form">
                <form action="#"></form>
                  <div class="sign-up__wysija text-center">
                    <div class="sign-up__content pb-3 px-4">
                      <h4 class="sign-up__title">Subcribe Newsletter</h4>
                      <div class="sign-up__cont">
                        <p>Get all the latest information on Events, Sales and Offers.</p>
                        <div class="sign-up__paragraph mb-3">
                          <span class="sign-up__your-email">
                            <i class="bi bi-envelope sign-up__icon"></i>
                            <input type="email">
                          </span>
                        </div>
                        <p><input type="submit" value="SUBCRIBE" class="btn btn-primary"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
        
      </div>
    <!--PRODUCTS SECTION-->
    
    <div class="main-content col-lg-9">
    <div class="row mt-5 mb-1">
      <div class="col-sm-6 col-md-4">
        <div class="kk-wrapper pt-0 p-0">
          <div class="kk-latest-products">
            <div class="kk-latest-products__widget">
              <h2 class="kk-latest-products__title">Latest Products</h2>
              <ul class="kk-latest-products__product-list">
                <li>
                  <a href="#" class="kk-latest-products__product-image" title="Random Products">
                    <div class="kk-latest-products__img-effect">
                      <img src="https://picsum.photos/84/84?random=9" alt="Products" width="84" height="84">
                    </div>
                  </a>
                  <div class="kk-latest-products__product-details">
                    <a href="#"><span class="kk-latest-products__product-title">Product Title</span></a>
                    <div class="kk-latest-products__star-rating">
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                    </div>
                    <span class="kk-latest-products__amount">
                      <bdi>
                        <span class="kk-latest-products__currency">€</span>
                        101.00
                      </bdi>
                    </span>
                  </div>
                </li>

                <li>
                  <a href="#" class="kk-latest-products__product-image" title="Random Products">
                    <div class="kk-latest-products__img-effect">
                      <img src="https://picsum.photos/84/84?random=9" alt="Products" width="84" height="84">
                    </div>
                  </a>
                  <div class="kk-latest-products__product-details">
                    <a href="#"><span class="kk-latest-products__product-title">Product Title</span></a>
                    <div class="kk-latest-products__star-rating">
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                    </div>
                    <span class="kk-latest-products__amount">
                      <bdi>
                        <span class="kk-latest-products__currency">€</span>
                        101.00
                      </bdi>
                    </span>
                  </div>
                </li>

                 <li>
                  <a href="#" class="kk-latest-products__product-image" title="Random Products">
                    <div class="kk-latest-products__img-effect">
                      <img src="https://picsum.photos/84/84?random=9" alt="Products" width="84" height="84">
                    </div>
                  </a>
                  <div class="kk-latest-products__product-details">
                    <a href="#"><span class="kk-latest-products__product-title">Product Title</span></a>
                    <div class="kk-latest-products__star-rating">
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                    </div>
                    <span class="kk-latest-products__amount">
                      <bdi>
                        <span class="kk-latest-products__currency">€</span>
                        101.00
                      </bdi>
                    </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="kk-wrapper pt-0 p-0">
          <div class="kk-latest-products">
            <div class="kk-latest-products__widget">
              <h2 class="kk-latest-products__title">Best Selling</h2>
              <ul class="kk-latest-products__product-list">
                <li>
                  <a href="#" class="kk-latest-products__product-image" title="Random Products">
                    <div class="kk-latest-products__img-effect">
                      <img src="https://picsum.photos/84/84?random=9" alt="Products" width="84" height="84">
                    </div>
                  </a>
                  <div class="kk-latest-products__product-details">
                    <a href="#"><span class="kk-latest-products__product-title">Product Title</span></a>
                    <div class="kk-latest-products__star-rating">
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                    </div>
                    <span class="kk-latest-products__amount">
                      <bdi>
                        <span class="kk-latest-products__currency">€</span>
                        101.00
                      </bdi>
                    </span>
                  </div>
                </li>

                <li>
                  <a href="#" class="kk-latest-products__product-image" title="Random Products">
                    <div class="kk-latest-products__img-effect">
                      <img src="https://picsum.photos/84/84?random=9" alt="Products" width="84" height="84">
                    </div>
                  </a>
                  <div class="kk-latest-products__product-details">
                    <a href="#"><span class="kk-latest-products__product-title">Product Title</span></a>
                    <div class="kk-latest-products__star-rating">
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                    </div>
                    <span class="kk-latest-products__amount">
                      <bdi>
                        <span class="kk-latest-products__currency">€</span>
                        101.00
                      </bdi>
                    </span>
                  </div>
                </li>

                 <li>
                  <a href="#" class="kk-latest-products__product-image" title="Random Products">
                    <div class="kk-latest-products__img-effect">
                      <img src="https://picsum.photos/84/84?random=9" alt="Products" width="84" height="84">
                    </div>
                  </a>
                  <div class="kk-latest-products__product-details">
                    <a href="#"><span class="kk-latest-products__product-title">Product Title</span></a>
                    <div class="kk-latest-products__star-rating">
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                    </div>
                    <span class="kk-latest-products__amount">
                      <bdi>
                        <span class="kk-latest-products__currency">€</span>
                        101.00
                      </bdi>
                    </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="kk-wrapper pt-0 p-0">
          <div class="kk-latest-products">
            <div class="kk-latest-products__widget">
              <h2 class="kk-latest-products__title">Top rated</h2>
              <ul class="kk-latest-products__product-list">
                <li>
                  <a href="#" class="kk-latest-products__product-image" title="Random Products">
                    <div class="kk-latest-products__img-effect">
                      <img src="https://picsum.photos/84/84?random=9" alt="Products" width="84" height="84">
                    </div>
                  </a>
                  <div class="kk-latest-products__product-details">
                    <a href="#"><span class="kk-latest-products__product-title">Product Title</span></a>
                    <div class="kk-latest-products__star-rating">
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                    </div>
                    <span class="kk-latest-products__amount">
                      <bdi>
                        <span class="kk-latest-products__currency">€</span>
                        101.00
                      </bdi>
                    </span>
                  </div>
                </li>

                <li>
                  <a href="#" class="kk-latest-products__product-image" title="Random Products">
                    <div class="kk-latest-products__img-effect">
                      <img src="https://picsum.photos/84/84?random=9" alt="Products" width="84" height="84">
                    </div>
                  </a>
                  <div class="kk-latest-products__product-details">
                    <a href="#"><span class="kk-latest-products__product-title">Product Title</span></a>
                    <div class="kk-latest-products__star-rating">
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                    </div>
                    <span class="kk-latest-products__amount">
                      <bdi>
                        <span class="kk-latest-products__currency">€</span>
                        101.00
                      </bdi>
                    </span>
                  </div>
                </li>

                 <li>
                  <a href="#" class="kk-latest-products__product-image" title="Random Products">
                    <div class="kk-latest-products__img-effect">
                      <img src="https://picsum.photos/84/84?random=9" alt="Products" width="84" height="84">
                    </div>
                  </a>
                  <div class="kk-latest-products__product-details">
                    <a href="#"><span class="kk-latest-products__product-title">Product Title</span></a>
                    <div class="kk-latest-products__star-rating">
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                      <i class="bi bi-yin-yang kk-latest-products__star"></i>
                    </div>
                    <span class="kk-latest-products__amount">
                      <bdi>
                        <span class="kk-latest-products__currency">€</span>
                        101.00
                      </bdi>
                    </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="row px-0 mb-4">
        <div class="col-md-12 mt-5">
          <img src="https://picsum.photos/146/60?random=9" alt="">
          <img src="https://picsum.photos/146/60?random=9" alt="">
          <img src="https://picsum.photos/146/60?random=9" alt="">
          <img src="https://picsum.photos/146/60?random=9" alt="">
          <img src="https://picsum.photos/146/60?random=9" alt="">
        </div>
      </div>
    </div>
  </div>
</div>


<!-- FOOTER -->
<?php include(TEMPLATE_FRONT . DS . "footer.php")?>