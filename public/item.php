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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



