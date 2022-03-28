<?php require_once("../resources/config.php") ?>

<?php 

if(isset($_GET['add'])){//Collect data from Add to Cart -button in the form of ADD
    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']). "");//connect to database
    confirm($query);

    while($row = fetch_array($query)){
        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){//If product quantity is not equal to product in the session of ADD
            $_SESSION['product_' . $_GET['add']]+=1; //add one to current product id
            redirect("checkout.php");
        } else{
            set_message("We only have " . $row['product_quantity'] . " " .$row['product_title']. " available");
            redirect("checkout.php");
        }
    }

    //$_SESSION['product_' . $_GET['add']] +=1;
    //redirect("index.php");
}

if(isset($_GET['remove'])){ //press minus to reduce item quantity
    $_SESSION['product_' . $_GET['remove']]--;
    if($_SESSION['product_' . $_GET['remove']] < 1){
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        unset($_SESSION['item_sub']);
        redirect("checkout.php");
    } else{
        redirect("checkout.php");
    }
}

if(isset($_GET['delete'])){ //press x to delete item
    $_SESSION['product_' . $_GET['delete']] = '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);
    unset($_SESSION['item_sub']);
    redirect("checkout.php");   
}

function cart(){
    $total = 0;
    $sub   = 0;
    $item_quantity = 0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

    foreach($_SESSION as $name  =>  $value){
        if($value > 0){
            if(substr($name, 0, 8) == "product_"){

            $length = strlen($name);
            $id     = substr($name, 8 , $length);

            $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). "");
            confirm($query);
    
            while($row = fetch_array($query)){
                $product_price = $row['product_price']*$value;
                $sub += $product_price ;
                $item_quantity += $value;
                
                $product = <<<DELIMETER
                    <div class="col-md-2 col-lg-2 col-xl-2 mt-3">
                    <img src="https://via.placeholder.com/71x89" alt="" class="img-fluid rounded-3">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Shirt</h6>
                        <h6 class="text-black mb-0">{$row['product_title']}</h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <a class="btn btn-link px-2" href="cart.php?remove={$row['product_id']}">
                            <svg class="bi text-dark mt-3" width="10" height="10">
                                <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#dash"/>
                            </svg>
                        </a>
                        <input type="number" id="form1" min="0" name="quantity" value="{$value}" class="form-control form-control-sm">
                        <a class="btn btn-link px-2" href="cart.php?add={$row['product_id']}">
                            <svg class="bi text-dark mt-3" width="10" height="10">
                                <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#plus"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">&euro; {$row['product_price']}</h6>
                    </div>
                    <div class="col-md-1 col-lg-1 text-end">
                        <a href="cart.php?delete={$row['product_id']}" class="text-muted">
                            <svg class="bi text-dark" width="24" height="24">
                                <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#x"/>
                            </svg>
                        </a>
                    </div>

                    <input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
                    <input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
                    <input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
                    <input type="hidden" name="quantity_{$quantity}" value="{$value}">
                    
                    DELIMETER;
    
                    echo $product;

                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
                }
                $_SESSION['item_sub'] = $sub;
                $_SESSION['item_total'] = $total += $sub;
                $_SESSION['item_quantity'] = $item_quantity;
            }
        }    
    }   
}

function show_paypal(){

    if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1 ){
    $paypal_button = <<<DELIMETER
    <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" 
    border="0" name="upload" alt="PayPal - The safer, easier way to pay online!">
    DELIMETER;
  
    return $paypal_button;
    }
  }


















 






?>