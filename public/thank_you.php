<!-- GET GLOBAL CONNECTION FROM CONFIG.PHP -->
<?php require_once("../resources/config.php") ?>

<!-- HEADER -->
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<?php 
    process_transaction();
?>

<!-- START SESSION -->
<!--SHOPPING CART -->
<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <h1 class="text-center">THANK YOU</h1>
    </div>
</section>

<!-- FOOTER -->
<?php include(TEMPLATE_FRONT .DS. "footer.php") ?>