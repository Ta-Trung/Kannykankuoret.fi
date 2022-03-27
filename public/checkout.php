<!-- GET GLOBAL CONNECTION FROM CONFIG.PHP -->
<?php require_once("../resources/config.php") ?>
<?php require_once("cart.php") ?>

<!-- HEADER -->
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<!-- START SESSION -->
<!--SHOPPING CART -->
<section class="h-100 h-custom">
    <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 checkout-page">
                <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
                <div class="col-12">
                    <div class="card card-registration card-registration-2">
                        <div class="card-body p-0">
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="sb-i4irb13445926@business.example.com">
                        <input type="hidden" name="currency_code" value="EUR">
                        <input type="hidden" name="upload" value="1">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Shopping cart</h1>
                                            <h6 class="mb-0 text-muted"><?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?> items</h6>
                                        </div>
                                        <hr class="my-4">
                                        
                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <?php cart(); ?>
                                        </div>
                                        
                                       
                                        <hr class="my-4">
                                       
                                        <div class="pt-5">
                                            <h6 class="mb-0">
                                                <a href="shop.php" class="text-body">
                                                    <svg class="bi text-dark" width="24" height="24">
                                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#arrow-left"/>
                                                    </svg> Back to Shop
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">Quantity:</h5>
                                            <h5>
                                            <?php 
                                                echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";
                                            ?>
                                            </h5>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Shipping</h5>

                                        <div class="mb-4 pb-2">
                                            <select class="select">
                                                <option value="1">Standard-Delivery- €5.00</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                            </select>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Code</h5>

                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" class="form-control form-control-lg">
                                                <label class="form-label">Enter Code</label>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Sub price</h5>
                                            <h5>
                                            &euro; <?php 
                                                echo isset($_SESSION['item_sub']) ? $_SESSION['item_sub'] : $_SESSION['item_sub'] = "0";
                                                ?>
                                            </h5>
                                        </div>

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>
                                            &euro; <?php
                                                echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";
                                                ?>
                                            </h5>
                                        </div>

                                        <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" border="0" name="upload" alt="PayPal - The safer, easier way to pay online!">
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<!-- FOOTER -->
<?php include(TEMPLATE_FRONT .DS. "footer.php") ?>