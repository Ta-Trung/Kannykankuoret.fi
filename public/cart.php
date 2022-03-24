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
        redirect("checkout.php");
    } else{
        redirect("checkout.php");
    }
}

if(isset($_GET['delete'])){ //press x to delete item
    $_SESSION['product_' . $_GET['delete']] = '0';
    redirect("checkout.php");   
}





?>