<?php
$upload_directory = "uploads";
//HELPER FUNCTIONS

//Get last order id
function last_id(){
  global $connection;
  return mysqli_insert_id($connection);
  
}

//Set message when password or username wrong input
function set_message($msg){
  if(!empty($msg)){
    $_SESSION['message'] = $msg;
  } else{
    $msg = "";
  }
}

//Display message when password or username wrong input
function display_message(){
  if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }
}

//redirect to defined pages
function redirect($location){
    header("Location: $location ");
}

//connect to localhost globally
function query($sql) {
    global $connection;

    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;

    if(!$result) {
        die("QUERY FAIL " . mysqli_error($connection));
    }
}

function escape_string($string){
    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}

/** FRONT END FUNCTIONS**/

//GET PRODUCTS
function get_products(){
    $query = query("SELECT * FROM products");
    confirm($query);
    

    while($row = fetch_array($query)){
        $product_image = display_image($row['product_image']);
        $product = <<<DELIMETER
        <div class="col-md-3 product-small">
          <div class="product-small__inner">
            <div class="product-small__box">
              <div class="product-small__image">
                <a href="item.php?id={$row['product_id']}"><img src="../resources/uploads/{$product_image}" alt="Chicago" width="283" height="322"></a>
              </div>
              <div class="product-small__text">
                <div class="title-wrapper">
                  <p class="product-small__category no-text-overflow is-smaller opacity-75 overflow-hidden">Category 1</p>
                  <p class="product-small__name">
                    <a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                  </p>
                </div>
                <div class="price-wrapper d-block">
                  <span class="product-small__price d-block">
                    <span class="product-small__amount">
                    <bdi>
                      <span>€</span>
                      {$row['product_price']}
                    </bdi>
                    </span>
                  </span>
                </div>
                <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary mt-3">Art To Cart</a>
              </div>
            </div>
          </div>
        </div>
        DELIMETER;

        echo $product;
    }
}

//Get categories
function get_categories(){
  $query = query("SELECT * FROM categories");
  confirm($query);

  while($row = mysqli_fetch_array($query)) {
      $category_links = <<<DELIMETER
      <li class='kk-header__menu-item position-static'>
      <a href='category.php?id={$row['cat_id']}' class='kk-header__nav-link position-relative d-flex align-items-center flex-row'>
      <i class='bi bi-arrow-right-circle-fill mr-3'></i>
      <span class='kk-header__nav-link-text'>{$row['cat_title']}</span>
      <i class='bi bi-chevron-right kk-header__menu-expand-icon ml-5'></i>
      </a>
      </li>
      DELIMETER;

      echo $category_links;
  }
}

//get products in category pages
function get_products_in_cat_page(){
  $query = query("SELECT * FROM products WHERE product_category_id = " . escape_string(($_GET['id'])). " ");
  confirm($query);

  while($row = fetch_array($query)){
      $product_image = display_image($row['product_image']);
      $product = <<<DELIMETER
      <div class="col-md-3 product-small">
        <div class="product-small__inner">
          <div class="product-small__box">
            <div class="product-small__image">
              <a href="item.php?id={$row['product_id']}"><img src="../resources/uploads/{$product_image}" alt="Chicago" width="283" height="322"></a>
            </div>
            <div class="product-small__text">
              <div class="title-wrapper">
                <p class="product-small__category no-text-overflow is-smaller opacity-75 overflow-hidden">Category 1</p>
                <p class="product-small__name">
                  <a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                </p>
              </div>
              <div class="price-wrapper d-block">
                <span class="product-small__price d-block">
                  <span class="product-small__amount">
                  <bdi>
                    <span>€</span>
                    {$row['product_price']}
                  </bdi>
                  </span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      DELIMETER;

      echo $product;
  }
}

//get products in shop pages
function get_products_in_shop_page(){
  $query = query("SELECT * FROM products");
  confirm($query);

  while($row = fetch_array($query)){
      $product_image = display_image($row['product_image']);
      $product = <<<DELIMETER
      <div class="col-md-3 product-small">
        <div class="product-small__inner">
          <div class="product-small__box">
            <div class="product-small__image">
              <a href="item.php?id={$row['product_id']}"><img src="../resources/uploads/{$product_image}" alt="Chicago" width="283" height="322"></a>
            </div>
            <div class="product-small__text">
              <div class="title-wrapper">
                <p class="product-small__category no-text-overflow is-smaller opacity-75 overflow-hidden">Category 1</p>
                <p class="product-small__name">
                  <a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                </p>
              </div>
              <div class="price-wrapper d-block">
                <span class="product-small__price d-block">
                  <span class="product-small__amount">
                  <bdi>
                    <span>€</span>
                    {$row['product_price']}
                  </bdi>
                  </span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      DELIMETER;

      echo $product;
  }
}

//LOGIN SYSTEM
function login_user(){
  if(isset($_POST['submit'])){
    $username = escape_string($_POST['username']);
    $password = escape_string($_POST['password']);

    $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");
    confirm($query);

    if(mysqli_num_rows($query) == 0){

      set_message("Your password or username are incorrect");
      redirect("login.php");
    }else{

      $_SESSION['username'] =   $username;
      redirect("admin");
    }
  }
}


//Send messages function
function send_message(){
  if(isset($_POST['submit'])){//if submit button pressed
    $to          = "tatrung1301@gmail.com"; //send message to this host email
    $firstname   =    $_POST['firstname']; //collect data from First Name
    $lastname    =    $_POST['lastname']; //collect data from Last Name
    $email       =    $_POST['email']; //collect data from Email
    $subject     =    $_POST['subject']; //collect data from Subject
    $message     =    $_POST['message']; //collect data from Message

    $headers = "From: {$firstname} {$lastname} {$email}";
    
    $result = mail($to, $subject, $message, $headers);

    if(!$result) {

      set_message("failed to send your message");
      redirect("contact.php");

    } else {

      set_message("Your message has been sent");
      redirect("contact.php");

    }

  }
}

/** BACK END FUNCTIONS**/
function display_orders(){
  $query = query("SELECT * FROM orders");
  confirm($query);

  while($row = fetch_array($query)){
    $orders = <<<DELIMETER
    <tr>
      <td>{$row['order_id']}</td>
      <td>{$row['order_amount']}</td>
      <td>{$row['order_transaction']}</td>
      <td>{$row['order_currency']}</td>
      <td>{$row['order_status']}</td>
      <td><a class="btn btn-danger" href="../../resources/template/back/delete_order.php?id={$row['order_id']}">Remove</a></td>
    </tr>
    DELIMETER;

   echo $orders;

  }
}

//ADMIN PRODUCTS PAGES
function display_image($picture){
  global $uploads_directory;
  return $uploads_directory . DS . $picture;
}


function get_products_in_admin(){
  $query = query("SELECT * FROM products");
  confirm($query);

  while($row = fetch_array($query)){
    $category = show_product_category_title($row['product_category_id']);
    $product_image = display_image($row['product_image']);
    $product = <<<DELIMETER
    <div class="col-lg-3 col-md-6">
        <div class="card mb-3">
            <div class="card-body">
                <div class="product-img">
                    <img src="../../resources/uploads{$product_image}" alt="" width='335' height='249'>
                    <div class="pro-img-overlay">
                        <a href="index.php?edit_product&id={$row['product_id']}" class="bg-info">
                            <svg class="bi text-dark" width="24" height="24">
                                <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#pencil"/>
                            </svg>
                        </a>
                        <a href="../../resources/template/back/delete_product.php?id={$row['product_id']}" class="bg-danger">
                            <svg class="bi text-dark" width="24" height="24">
                                <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#trash"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="product-text">
                    <span class="pro-price bg-primary text-dark">€{$row['product_price']}</span>
                    <h5 class="card-title mb-0">{$row['product_title']}</h5>
                    <h4 class="card-title mb-0">{$category}</h4>
                    <small class="text-muted db">{$row['product_short_description']}</small>
                </div>
            </div>
        </div>
    </div>
    DELIMETER;
    echo $product;
  }
}

function show_product_category_title($product_category_id){
  $category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}'");
  confirm($category_query);

  while($category_row = fetch_array($category_query)){
    return $category_row['cat_title'];
  }
}






//ADD PRODUCTS IN ADMIN
function add_product(){
  if(isset($_POST['publish'])){
    $product_title        = escape_string($_POST['product_title']);
    $product_category_id  = escape_string($_POST['product_category_id']);
    $product_price        = escape_string($_POST['product_price']);
    $product_description  = escape_string($_POST['product_description']);
    $product_short_desc   = escape_string($_POST['product_short_description']);
    $product_quantity     = escape_string($_POST['product_quantity']);
    $product_image        = escape_string($_FILES['file']['name']);
    $image_temp_location  = escape_string($_FILES['file']['tmp_name']);

    move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $product_image); 

    $query = query("INSERT INTO products(product_title,product_category_id,product_price,product_description,product_short_description, product_quantity,product_image) VALUES('{$product_title}','{$product_category_id}','{$product_price}','{$product_description}','{$product_short_desc}', '{$product_quantity}','{$product_image}')");
    $last_id = last_id();
    confirm($query);
    set_message("New product with id {$last_id} just added");
    redirect("index.php?products");
  }
}

//Get categories
function show_categories_add_products(){
  $query = query("SELECT * FROM categories");
  confirm($query);

  while($row = mysqli_fetch_array($query)) {
      $category_options = <<<DELIMETER
      <option value="{$row['cat_id']}">{$row['cat_title']}</option>
      DELIMETER;

      echo $category_options;
  }
}

//UPDATNG PRODUCTS IN ADMIN
function update_product(){
  if(isset($_POST['update'])){
    $product_title        = escape_string($_POST['product_title']);
    $product_category_id  = escape_string($_POST['product_category_id']);
    $product_price        = escape_string($_POST['product_price']);
    $product_description  = escape_string($_POST['product_description']);
    $product_short_description   = escape_string($_POST['product_short_description']);
    $product_quantity     = escape_string($_POST['product_quantity']);
    $product_status       = escape_string($_POST['product_status']);
    $product_image        = escape_string($_FILES['file']['name']);
    $image_temp_location  = escape_string($_FILES['file']['tmp_name']);

    if(empty($product_image)){
      $get_pic = query("SELECT product_image FROM products WHERE product_id = " .escape_string($_GET['id']). " ");
      confirm($get_pic);
      while($pic = fetch_array($get_pic)){
        $product_image = $pic['product_image'];
      }
    }

    move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $product_image); 

    $query = "UPDATE products SET ";
    $query .= "product_title               = '{$product_title}'      , ";
    $query .= "product_category_id         = '{$product_category_id}', ";
    $query .= "product_price               = '{$product_price}'      , ";
    $query .= "product_description         = '{$product_description}', ";
    $query .= "product_short_description   = '{$product_short_description}' , ";
    $query .= "product_quantity            = '{$product_quantity}'   , ";
    $query .= "product_status              = '{$product_status}'   , ";
    $query .= "product_image               = '{$product_image}'        ";
    $query .= "WHERE product_id=" . escape_string($_GET['id']);

    $send_update_query = query($query);
    confirm($send_update_query);
    set_message("Products have been updated");
    redirect("index.php?products");
  }
}

/** CATEGORIES IN ADMIN**/
function show_categories_in_admin(){
  $query  = "SELECT * FROM categories";
  $category_query = query($query);
  confirm($query);

  while($row  = fetch_array($category_query)){
    $cat_id  = $row['cat_id'];
    $cat_title  = $row['cat_title'];

    $category = <<<DELIMETER
    <div class="col-lg-3 col-md-6">
        <div class="card mb-3">
            <div class="card-body">
                <div class="product-img">
                    <img src="https://via.placeholder.com/335x249" alt="">
                    <div class="pro-img-overlay">
                        <a href="#" class="bg-info">
                            <svg class="bi text-dark" width="24" height="24">
                                <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#pencil"/>
                            </svg>
                        </a>
                        <a href="../../resources/template/back/delete_category.php?id={$row['cat_id']}" class="bg-danger">
                            <svg class="bi text-dark" width="24" height="24">
                                <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#trash"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="product-text">
                    <span class="pro-price bg-primary text-dark">€15</span>
                    <h5 class="card-title mb-0">{$cat_id}. {$cat_title}</h5>
                    <small class="text-muted db">Product description small</small>
                </div>
            </div>
        </div>
    </div>
    DELIMETER;
    echo $category;
  }
}

function add_category(){
  if(isset($_POST['add_category'])){
    $cat_title  = escape_string($_POST['cat_title']);

    if(empty($cat_title)  || $cat_title == " "){
      echo "This cannot be emptied";
    } else{
    $insert_cat = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}')");
    confirm($insert_cat);
    set_message("CATEGORY CREATED");
    }
  }
}

/** ADMIN USERS **/
function display_users(){
  $query  = "SELECT * FROM users";
  $user_query = query($query);
  confirm($query);

  while($row  = fetch_array($user_query)){
    $user_id   = $row['user_id'];
    $username  = $row['username'];
    $email     = $row['email'];
    $password  = $row['password'];

    $user = <<<DELIMETER
    <tr>
      <td>{$row['user_id']}</td>
      <td>{$row['username']}</td>
      <td>{$row['email']}</td>
      <td>{$row['password']}</td>
      <td><a class="btn btn-danger" href="../../resources/template/back/delete_user.php?id={$row['user_id']}">Remove</a></td>
    </tr>
    DELIMETER;
    echo $user;
  }
}


function add_user(){
  if(isset($_POST['add_user'])){
    $user_name    =   escape_string($_POST['username']);
    $email        =   escape_string($_POST['email']);
    $password     =   escape_string($_POST['password']);
    $user_photo   =   escape_string($_FILES['file']['name']);
    $photo_temp   =   escape_string($_FILES['file']['tmp_name']);

    move_uploaded_file($photo_temp, UPLOAD_DIRECTORY .DS. $user_photo);

    $query = query("INSERT INTO users(username, email, password, user_photo) VALUES('{username}', '{email}', '{password}', '{user_photo}')");
    confirm($query);
    set_message("USER CREATED");
    redirect("index.php?users");
    
  }
}
























?>