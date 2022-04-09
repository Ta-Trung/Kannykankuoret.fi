<?php require_once("../../resources/config.php") ?>
<?php include(TEMPLATE_BACK . "/sidebar_nav.php"); ?>
<section class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 product-admin">
    <div class="container-fluid">
        <div class="row product-admin__page-title">
            <div class="col-md-5 align-self-center">
                <h4 class="product-admin__text-themecolor">Products</h4>
                <h4 class="text-danger"><?php display_message(); ?></h4>
            </div>
        </div>
        <div class="row">
            <?php get_products_in_admin(); ?>
        </div>
    </div>
</section>