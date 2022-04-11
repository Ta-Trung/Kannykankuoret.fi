<?php include(TEMPLATE_BACK . "/sidebar_nav.php"); ?>

<section class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 vh-100 add-user-admin">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <h5 class="text-center h1 fw-bold mb-5 mx-1 mx-md4 mt-4">Add new user</h5>

                                <form action="" class="mx-1 mx-md-4">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <svg class="bi text-dark mr-3 mt-5" width="24" height="24">
                                            <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#joystick"/>
                                        </svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <label for="idAdmin" class="form-label">User ID</label>
                                            <input type="text" id="idAdmin" name="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <svg class="bi text-dark mr-3 mt-5" width="24" height="24">
                                            <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#person-fill"/>
                                        </svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <label for="usernameAdmin" class="form-label">Username</label>
                                            <input type="text" id="usernameAdmin" name="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <svg class="bi text-dark mr-3 mt-5" width="24" height="24">
                                            <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#envelope-fill"/>
                                        </svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <label for="emailAdmin" class="form-label">Email</label>
                                            <input type="email" id="emailAdmin" name="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <svg class="bi text-dark mr-3 mt-5" width="24" height="24">
                                            <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#bricks"/>
                                        </svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <label for="passwordAdmin" class="form-label">Password</label>
                                            <input type="password" id="passwordAdmin" name="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="button" class="btn btn-primary btn-lg">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>