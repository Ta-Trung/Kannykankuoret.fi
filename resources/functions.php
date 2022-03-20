<?php

//HELPER FUNCTIONS

function set_message($msg){
  if(!empty($msg)){
    $_SESSION['message'] = $msg;
  } else{
    $msg = "";
  }
}

function display_message(){
  if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }
}

function redirect($location){
    header("Location: $location ");
}

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
        $product = <<<DELIMETER
        <div class="col-md-3 product-small">
          <div class="product-small__inner">
            <div class="product-small__box">
              <div class="product-small__image">
                <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt="Chicago" width="283" height="322"></a>
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

function get_products_in_cat_page(){
  $query = query("SELECT * FROM products WHERE product_category_id = " . escape_string(($_GET['id'])). " ");
  confirm($query);

  while($row = fetch_array($query)){
      $product = <<<DELIMETER
      <div class="col-md-3 product-small">
        <div class="product-small__inner">
          <div class="product-small__box">
            <div class="product-small__image">
              <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt="Chicago" width="283" height="322"></a>
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

function get_products_in_shop_page(){
  $query = query("SELECT * FROM products");
  confirm($query);

  while($row = fetch_array($query)){
      $product = <<<DELIMETER
      <div class="col-md-3 product-small">
        <div class="product-small__inner">
          <div class="product-small__box">
            <div class="product-small__image">
              <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt="Chicago" width="283" height="322"></a>
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
      redirect("./admin/admin.html");
    }
  }
}

/** BACK END FUNCTIONS**/

?>