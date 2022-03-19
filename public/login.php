<?php require_once("../resources/config.php") ?>

<!--HEADER-->
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<!-- LOGIN FORM -->
<div class="container form-container">
    <form action="" method="post" class="form-signin text-center">
        <?php login_user(); ?>
        <img src="./assets/img/KännykänKuoretLogo.png" alt="" class="mb-4" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" class="form-signin__control" id="inputUsername" placeholder="User name" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-signin__control" id="inputPassword" placeholder="Password" required="">
        <div class="form-signin__checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© Trung Ta 2022</p>
    </form>
</div>

<!--FOOTER-->
<?php include(TEMPLATE_FRONT . DS . "footer.php")?>