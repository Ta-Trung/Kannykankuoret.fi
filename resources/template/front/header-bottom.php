<!--HEADER BOTTOM-->




<!--<div class="kk-header__bottom">
<div class="row">
<div class="container">
<div class="kk-header__bottom-inner d-flex flex-row flex-nowrap justify-content-between">
<div class="col-md-3 justify-content-start ml-n3 d-flex align-items-center">
    <div class="kk-header__cats position-relative mr-3 ml-3" role="navigation">
    <span class="kk-header__menu-opener bg-primary text-dark light d-flex align-items-center">
        <i class="bi bi-list kk-header__menu-opener-icon mr-3"></i>
        <span class="kk-header__menu-open-label">Browse Categories</span>
        <i class="bi bi-chevron-down kk-header__menu-expand-icon ml-auto"></i>
    </span>
    <div class="kk-header__dropdown kk-header__dropdown-cats">
        <ul id="menu-categories" class="kk-header__menu kk-header__nav kk-header__nav-vertical position-relative mr-0 ml-0 flex-wrap text-left mb-0 pl-0">

        <?php 
            $query = "SELECT * FROM categories";
            $send_query = mysqli_query($connection, $query);

            if(!$send_query){
                die("QUERY FAILED " . mysqli_error($connection));
            }

            while($row = mysqli_fetch_array($send_query)) {
                echo "<li class='kk-header__menu-item position-static'>
                <a href='#' class='kk-header__nav-link position-relative d-flex align-items-center flex-row'>
                <i class='bi bi-arrow-right-circle-fill mr-3'></i>
                <span class='kk-header__nav-link-text'>{$row['cat_title']}</span>
                <i class='bi bi-chevron-right kk-header__menu-expand-icon ml-5'></i>
                </a>
                </li>";
            }
        ?>
        </ul>
    </div>
    </div>
</div>-->