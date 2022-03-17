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

<!--CATEGORY MAIN -->
<div id="category-main" class="category-main">
    <div class="container">
        <div class="row">
            <div class="col-md-3 category-main__sidebar pt-0 pb-5 position-relative">
                <div class="category-main__sidebar-content">
                    <aside class="category-main__product-categories mb-0 mt-0 p-5">
                        <h3 class="category-main__product-title p-0 position-relative">
                            Categories
                        </h3>
                        <ul>
                            <?php get_categories() ?>
                        </ul>
                    </aside>
                </div>
            </div>

            <div class="col-md-9 category-main__content p-0 pb-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://via.placeholder.com/880x280" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/880x280" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/880x280" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>

                <div class="product-footer__related-products">
                        <h3 class="product pt-5 pb-5">Products</h3>
                        <div class="container">
                        <div class="row position-relative">
                        <?php get_products(); ?>
                        <?php get_products(); ?>
                        <?php get_products(); ?>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- FOOTER -->
<?php include(TEMPLATE_FRONT . DS . "footer.php")?>