<?php require_once("../resources/config.php") ?>

<!--HEADER-->
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>   

<!-- BREADCRUMBS -->
<section class="breadcrumb bg-transparent position-relative text-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 clearfix">
                <div class="breadcrumb__wrap pt-left position-relative">
                    <span>
                        <a href="#">HOME</a>
                        /
                        <span>
                            <a href="#">SHOP</a>
                            /
                            <span class="breadcrumb__last">Product Name</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<div class="container">
    <div class="product-main">
        <div class="row px-0">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-main__images position-relative mb-5 opacity-100">
                            <div class="product-main__image-tools position-absolute p-3">
                                <div class="product-main__wishlist-icon position-relative">
                                    <button class="product-main__wishlist-button px-0">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <figure class="product-main__gallery product-main__gallery-slider product-main__gallery-slider-nav-small product-main__gallery-mb-half product-main__gallery-is-draggable product-main__gallery-flickity-enabled">
                                <div class="product-main__viewport overflow-hidden position-relative">
                                    <div class="div product-main__slider">
                                        <div class="product-main__gallery-image">
                                            <a href="#"><img src="https://via.placeholder.com/370x370" alt="" width="510" height="510"></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="product-thumbnails product-main__gallery-is-draggable product-main__gallery-flickity-enabled pt-0">
                            <div class="product-thumbnails__viewport">
                                <div class="product-thumbnails__slider">
                                    <div class="row ml-1">
                                        <div class="col-md-4">
                                            <a href="#"><img src="https://via.placeholder.com/76x91" alt="" width="76" width="91"></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><img src="https://via.placeholder.com/76x91" alt="" width="76" width="91"></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><img src="https://via.placeholder.com/76x91" alt="" width="76" width="91"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 product-info pt-3 ">
                        <h1 class="product-info__title">Product #1</h1>
                        <div class="product-info__is-divider"></div>
                        <div class="product-info__price d-block">
                            <p>
                                <span class="kk-latest-products__amount">
                                    <bdi>
                                        <span class="kk-latest-products__currency">€</span>
                                        101.00
                                    </bdi>
                                </span>
                            </p>
                        </div>
                        <div class="product-info__description">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum quam natus mollitia nobis nesciunt maxime rem amet. Minus, placeat. Placeat?</p>
                        </div>
                        <form action="#" class="product-info__cart">
                            <div class="product-info__quantity product-info__button-added mb-3">
                                <input type="button" value="-" class="product-info__minus product-info__button product-info__is-form">
                                <label for="" class="product-info__screen-reader-text">Product #1</label>
                                <input type="number" class="product-info__input-text" step="1" min="1" max name= "quantity" value="1" title="Qty" size="4" placeholder inputmode="numeric">
                                <input type="button" value="+" class="product-info__plus product-info__button product-info__is-form">
                            </div>
                            <button type="submit" name="add-to-cart" value="56" class="btn btn-primary product-info__single-add-to-cart">Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



