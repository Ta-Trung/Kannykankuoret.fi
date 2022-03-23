<!-- GET GLOBAL CONNECTION FROM CONFIG.PHP -->
<?php require_once("../resources/config.php") ?>

<!-- HEADER -->
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<!--SHOPPING CART -->
<section class="h-100 h-custom">
    <div class="conatiner py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping cart</h1>
                                        <h6 class="mb-0 text-muted">3 items</h6>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="https://via.placeholder.com/71x89" alt="" class="img-fluid rounded-3">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-muted">Shirt</h6>
                                            <h6 class="text-black mb-0">Cotton T-Shirt</h6>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2">
                                                <svg class="bi text-dark" width="24" height="24">
                                                    <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#dash"/>
                                                </svg>
                                            </button>
                                            <input type="number" id="form1" min="0" name="quantity" value="1" class="form-control form-control-sm">
                                            <button class="btn btn-link px-2">
                                                <svg class="bi text-dark" width="24" height="24">
                                                    <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#plus"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">€ 44.00</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 text-end">
                                            <a href="#" class="text-muted">
                                                <svg class="bi text-dark" width="24" height="24">
                                                    <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#x"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="https://via.placeholder.com/71x89" alt="" class="img-fluid rounded-3">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-muted">Shirt</h6>
                                            <h6 class="text-black mb-0">Cotton T-Shirt</h6>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2">
                                                <svg class="bi text-dark" width="24" height="24">
                                                    <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#dash"/>
                                                </svg>
                                            </button>
                                            <input type="number" id="form1" min="0" name="quantity" value="1" class="form-control form-control-sm">
                                            <button class="btn btn-link px-2">
                                                <svg class="bi text-dark" width="24" height="24">
                                                    <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#plus"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">€ 44.00</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 text-end">
                                            <a href="#" class="text-muted">
                                                <svg class="bi text-dark" width="24" height="24">
                                                    <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#x"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="pt-5">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-body">
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

                                    <div class="d-flex justiify-content-between mb-4">
                                        <h5 class="text-uppercase">Item 3</h5>
                                        <h5>€ 132.00</h5>
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
                                        <h5 class="text-uppercase">Total price</h5>
                                        <h5>€ 137.00</h5>
                                    </div>

                                    <button type="button" data-mdb-ripple-color="dark" class="btn btn-dark btn-block btn-lg">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include(TEMPLATE_FRONT .DS. "footer.php") ?>