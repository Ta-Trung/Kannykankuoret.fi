<?php add_category(); ?>
<?php include(TEMPLATE_BACK . "/sidebar_nav.php"); ?>
<section class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 product-admin">
    <div class="container-fluid">
        <div class="row product-admin__page-title">
            <div class="col-md-5 align-self-center">
                <h4 class="product-admin__text-themecolor">Categories</h4>
            </div>
        </div>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="addNewCategory">Add New Category</label>
                        <input type="text" name="cat_title" class="form-control" id="addNewCategory">
                        <button type="submit" name="add_category" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </form>
        <h5><?php display_message(); ?></h5>
        <div class="row">  
            <?php show_categories_in_admin() ?>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img">
                            <img src="https://via.placeholder.com/335x249" alt="">
                            <div class="pro-img-overlay">
                                <a href="#" class="bg-info">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-danger">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#trash"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-text">
                            <span class="pro-price bg-primary text-dark">???15</span>
                            <h5 class="card-title mb-0">Product title</h5>
                            <small class="text-muted db">Product description small</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img">
                            <img src="https://via.placeholder.com/335x249" alt="">
                            <div class="pro-img-overlay">
                                <a href="#" class="bg-info">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-danger">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#trash"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-text">
                            <span class="pro-price bg-primary text-dark">???15</span>
                            <h5 class="card-title mb-0">Product title</h5>
                            <small class="text-muted db">Product description small</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img">
                            <img src="https://via.placeholder.com/335x249" alt="">
                            <div class="pro-img-overlay">
                                <a href="#" class="bg-info">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-danger">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#trash"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-text">
                            <span class="pro-price bg-primary text-dark">???15</span>
                            <h5 class="card-title mb-0">Product title</h5>
                            <small class="text-muted db">Product description small</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img">
                            <img src="https://via.placeholder.com/335x249" alt="">
                            <div class="pro-img-overlay">
                                <a href="#" class="bg-info">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-danger">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#trash"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-text">
                            <span class="pro-price bg-primary text-dark">???15</span>
                            <h5 class="card-title mb-0">Product title</h5>
                            <small class="text-muted db">Product description small</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img">
                            <img src="https://via.placeholder.com/335x249" alt="">
                            <div class="pro-img-overlay">
                                <a href="#" class="bg-info">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-danger">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#trash"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-text">
                            <span class="pro-price bg-primary text-dark">???15</span>
                            <h5 class="card-title mb-0">Product title</h5>
                            <small class="text-muted db">Product description small</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img">
                            <img src="https://via.placeholder.com/335x249" alt="">
                            <div class="pro-img-overlay">
                                <a href="#" class="bg-info">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-danger">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#trash"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-text">
                            <span class="pro-price bg-primary text-dark">???15</span>
                            <h5 class="card-title mb-0">Product title</h5>
                            <small class="text-muted db">Product description small</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img">
                            <img src="https://via.placeholder.com/335x249" alt="">
                            <div class="pro-img-overlay">
                                <a href="#" class="bg-info">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-danger">
                                    <svg class="bi text-dark" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#trash"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="product-text">
                            <span class="pro-price bg-primary text-dark">???15</span>
                            <h5 class="card-title mb-0">Product title</h5>
                            <small class="text-muted db">Product description small</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>