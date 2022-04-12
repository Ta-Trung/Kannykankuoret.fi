<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . "/sidebar_nav.php") ?>

<main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<h2>Reports</h2>
<h4 class="text-danger"><?php display_message(); ?></h4>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>Product ID</th>
            <th>Order ID</th>
            <th>Price</th>
            <th>Product title</th>
            <th>Product quantity</th>
        </tr>
        </thead>
        <tbody>
        <?php echo display_report(); ?>
        </tbody>
    </table>
</div>
</main>


  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script type="module" src="assets/js/dashboard.js"></script>

</body>
</html>
