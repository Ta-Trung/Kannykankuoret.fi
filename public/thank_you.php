<!-- GET GLOBAL CONNECTION FROM CONFIG.PHP -->
<?php require_once("../resources/config.php") ?>
<?php require_once("cart.php") ?>

<!-- HEADER -->
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<?php 
if(isset($_GET['tx'])){
    $amount = $_GET['amt'];
    $currency = $_GET['cc'];
    $transaction = $_GET['tx'];
    $status = $_GET['st'];

    $query = query ("INSERT INTO orders (order_amount,order_transaction,order_status,order_currency) VALUES ('{$amount}','{$currency}','{$transaction}','{$status}')");
    confirm($query);
    session_destroy();
}else {
    redirect("index.php");
}
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