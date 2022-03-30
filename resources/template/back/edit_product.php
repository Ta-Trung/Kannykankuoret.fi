<?php include(TEMPLATE_BACK . "/sidebar_nav.php"); ?>
<section class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 edit-product-admin">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <div class="card-title">Edit Product</div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Product Name</label>
                                        <input type="text" id="firstname" class="form-control" placeholder="Product name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Sub Title</label>
                                        <input type="text" id="lastname" class="form-control" placeholder="Product name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Category</label>
                                        <select name="" id="" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 3</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Status</label>
                                        <br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" class="form-check-input" name="customRadioInline1">
                                            <label for="customRadioInline1" class="form-check-label">Publish</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" class="form-check-input" name="customRadioInline2">
                                            <label for="customRadioInline2" class="form-check-label">Draft</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>