<?php 
if(isset($_GET['id'])){
    $query = query("SELECT * FROM products WHERE product_id = ". escape_string($_GET['id']) . "");
    confirm($query);

    while($row = fetch_array($query)){
    $product_title               = escape_string($row['product_title']);
    $product_category_id         = escape_string($row['product_category_id']);
    $product_price               = escape_string($row['product_price']);
    $product_description         = escape_string($row['product_description']);
    $product_short_description   = escape_string($row['product_short_description']);
    $product_quantity            = escape_string($row['product_quantity']);
    $product_image               = escape_string($row['product_image']);
    $product_status              = escape_string($row['product_status']);

    $product_image = display_image($row['product_image']);
    }
    
    update_product();
}

?>


<?php include(TEMPLATE_BACK . "/sidebar_nav.php"); ?>
<section class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 edit-product-admin">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-body">
                            <h5 class="card-title">Edit Product</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Product Name</label>
                                        <input type="text" name="product_title" id="firstname" class="form-control" value="<?php echo $product_title; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Product Short Description</label>
                                        <input type="text" name="product_short_description" id="lastname" class="form-control" placeholder="Product Short Description" 
                                        <?php echo $product_short_description; ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Category</label>
                                        <select name="product_category_id" id="" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="<?php echo $product_category_id; ?>"><?php echo show_product_category_title($product_category_id); ?></option>
                                                <?php show_categories_add_products(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Status</label>
                                        <br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" class="form-check-input" name="product_status" <?php echo $product_status; ?>>
                                            <label for="customRadioInline1" class="form-check-label ml-3">Publish</label>
                                        </div>
                                        <br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" class="form-check-input" name="product_status" <?php echo $product_status; ?>>
                                            <label for="customRadioInline2" class="form-check-label ml-3">Draft</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Price</label>
                                        <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1">
                                                <svg class="bi text-dark" width="24" height="24">
                                                    <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#cash"/>
                                                </svg>
                                               </span>
                                           </div>
                                           <input type="text" name="product_price" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1" 
                                           value="<?php echo $product_price; ?>"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Quantity</label>
                                        <div class="input-group mb-3">
                                           <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon2">
                                                <svg class="bi text-dark" width="24" height="24">
                                                    <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#scissors"/>
                                                </svg>
                                               </span>
                                           </div>
                                           <input type="number" name="product_quantity" class="form-control" aria-describedby="basic-addon2" value="<?php echo $product_quantity; ?>"> 
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mt-5 ml-4">Product Description</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="product_description" rows="4" <?php echo $product_description; ?>></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Meta title</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Meta Keywork</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>-->
                                <div class="col-md-3">
                                    <h5 class="card-title mt-3">Upload Image</h5>
                                    <div class="product-img">
                                        <img src="..\..\resources\uploads<?php echo $product_image; ?>" alt="" width='200'>
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
                                            <br>
                                        </div>
                                        <div class="fileupload btn btn-info wave-effect-wave-light text-white mt-3">
                                            <span>Upload Another Image</span>
                                            <input type="file" name="file" class="upload">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="row">
                                <div class="col-md-12">
                                    <h5 class="card-title mt-5">General Info</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered td-padding">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Brand">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Stellar">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Brand">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Stellar">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Brand">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Stellar">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Brand">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Stellar">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Brand">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="Stellar">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>-->
                            <hr>
                            <div class="form-action mt-5">
                                <button type="submit" name="update" class="btn btn-success text-white">
                                    <svg class="bi" width="24" height="24">
                                        <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#check"/>
                                    </svg>
                                    Update
                                </button>
                                <button type="button" class="btn btn-dark"> Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>