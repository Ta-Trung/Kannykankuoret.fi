<!-- GET GLOBAL CONNECTION FROM CONFIG.PHP -->
<?php require_once("../resources/config.php") ?>

<!-- FOOTER -->
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<!-- PAGE HEADER -->
<header id="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto text-center">
                <h1>Contact Us</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non, aut.</p>
            </div>
        </div>
    </div>
</header>

<!-- CONTACT SECTION -->
<section id="contact" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h4>Get in Touch</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, officiis?</p>
                        <h4>Address</h4>
                        <p>550 Main st, Boston MA</p>
                        <h4>Email</h4>
                        <p>test@test.com</p>
                        <h4>Phone</h4>
                        <p>(555) 555-5555</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card p-4">
                    <div class="card-body">
                        <h3 class="text-center">Please fill out this form to contact us</h3>
                        <hr>
                        <form action="" method="post" id="contactForm" name="sentMessage">
                            <?php send_message(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="submit" type="submit" value="Submit" class="btn btn-outline-danger btn-block">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STAFF -->
<section id="staff" class="py-5 text-center bg-dark text-white">
    <div class="container">
        <h1>Welcome to our village</h1>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <img src="https://via.placeholder.com/180x180" alt="" class="img-fluid rounded-circle mb-2">
                <h4>Trung Ta</h4>
                <small>Web Developer</small>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include(TEMPLATE_FRONT .DS. "footer.php") ?>