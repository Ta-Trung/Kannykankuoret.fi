<?php require_once("../../resources/config.php"); ?>
<?php include(TEMPLATE_BACK . "/sidebar_nav.php") ?>

<main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h2>All users</h2>
    <a href="index.php?add_user" class="btn btn-primary">Add User</a>
    <h4 class="text-danger"><?php display_message(); ?></h4>
    <div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <?php echo display_users(); ?>
        </tbody>
    </table>
    </div>
</main>

<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script type="module" src="assets/js/dashboard.js"></script>

</body>
</html>


