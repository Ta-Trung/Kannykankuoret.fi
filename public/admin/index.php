<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . "/header.php"); ?>

<?php 
if($_SERVER['REQUEST_URI'] == "/kannykankuoret.fi/public/admin/" || $_SERVER['REQUEST_URI'] == "/kannykankuoret.fi/public/admin/index.php" ){
  include(TEMPLATE_BACK . "/admin_content.php");
}

if(isset($_GET['orders'])){
  include(TEMPLATE_BACK . "/orders.php");
}

if(isset($_GET['add_product'])){
  include(TEMPLATE_BACK . "/add_product.php");
}

if(isset($_GET['categories'])){
  include(TEMPLATE_BACK . "/categories.php");
}

if(isset($_GET['edit_product'])){
  include(TEMPLATE_BACK . "/edit_product.php");
}

if(isset($_GET['products'])){
  include(TEMPLATE_BACK . "/products.php");
}

?>

  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script type="module" src="assets/js/dashboard.js"></script>

</body>
</html>
