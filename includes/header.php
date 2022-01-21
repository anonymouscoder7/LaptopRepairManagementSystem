<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title>Laptop Repairing</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <header class="container-fluid">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="cont-det">                   
                            <li>+9779815703456</li>
                            <li>laptoprepair@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-lg-block">
                        <ul class="social-link">
                            <li><a href=""><i class="fab fa-github"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li> <a href="https://in.pinterest.com/"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                            <li> <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="login.php">LogIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo">
                        <a href="index.html">
                            <img src="assets/images/xwoxlogo.JPG" alt="">
                        </a>

                        <a data-toggle="collapse" data-target="#nav-head" href="#nav-head"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div class="col-md-9 ">
                        <div class="contact d-none d-md-block">
                            <ul>
                                <li>
                                    <div class="cont-ro">
                                        <div class="ico">
                                            <i class="fas fa-phone-volume"></i>
                                        </div>
                                        <div class="det">
                                            <p>Contact Us</p>
                                            <b>+9779815703456</b>
                                        </div>
                                    </div>
                                </li>
                                
                                    <!-- Get Quote -->
                                    <div class="cont-ro">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Send Request</button>
                                    </div>
                                    <!-- Get Quote Model -->
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-xs-12  pdl">
                                                        <form action="dashboard/database/create_repair.php" method="POST">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Full name">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="address"> Address</label>
                                                                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="phone">Contact</label>
                                                                    <input type="number" name="contact" class="form-control" id="phone" placeholder="Contact">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="pname">Product Name</label>
                                                                    <select id="pname" name="product" class="form-control">
                                                                        <option selected>Choose...</option>
                                                                        <option>Laptop</option>
                                                                        <option>Desktop</option>
                                                                        <option>Mobile</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="defect">Defect</label>
                                                                    <input type="text" name="defect" class="form-control" id="defect" placeholder="Defect">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="message">Message</label>
                                                                    <textarea rows="1" name="message" id="message" placeholder="(Optional)" class="form-control input-sm"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Send Details</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Get Quotes Model -->
                                    <!--End  Get Quote -->
                                </li>
                            </ul>
                        </div>
                        <div id="nav-head" class="nav-part d-none d-md-block">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about_us.php">About Us</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact_us.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>