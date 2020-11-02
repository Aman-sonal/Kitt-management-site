<!DOCTYPE html>
<html lang="en">

<head>
    <title>KIIT Management </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="mainpage.css">
</head>

<body>
    <!-- <?php include 'partials/_header.php'; ?> -->
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="./Mainpage.html"> <img src="LunaPic-Edit-7.PNG" class="img-fluid mr-5"
                    width="90" height="auto"></a>
            <div class="collapse navbar-collapse" id="Navbar1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg mr-1"></span>
                            <b>Home</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span
                                class="fa fa-info fa-lg mr-1"></span><b>About Us</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span
                                class="fa fa-address-card fa-lg mr-1"></span><b>Contact</b></a></li>
                </ul>
                <span class="navbar-text">
                    <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i
                            class="fa fa-google-plus"></i></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i
                            class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                            class="fa fa-linkedin"></i></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i
                            class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                </span>
            </div>
        </div>
    </nav>

    <div class="bg-image">
        <div class="text-center">
            <img src="https://cdn.kiit.ac.in/wp-content/uploads/2018/04/KIIT-Logo-side-w1600.png" class="img-fluid" width="700" height="600">
        </div>
        <img src="LunaPic-Edit-7.PNG" class="img-fluid mx-auto d-block logo">
        <div class="d-flex flex-row wrapper justify-content-center">
            <h2>Welcome <span></span></h2>
        </div>
        <div class="form-box mx-auto d-block mb-5">
            <form>
                <div class="row">
                    <div class="col-12 col-auto">
                        <h4 class="text-white text-center"><b><span style="color:chocolate">S</span>ign <span
                                    style="color:chocolate">I</span>n</b></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-auto text-center heading">
                        <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="for-box">
                    <div class="form-group row">
                        <label for="userID" class="col-sm-4  col-form-label text-white">UserName</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="userId" placeholder="UserName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4  col-form-label text-white">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-4 col-form-label text-white">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-4 mx-5 order-2 order-md-1">
                            <button class="btn btn-danger btnn" id="btn-1" href="#" role="button">forgot
                                password</button>
                        </div>
                        <div class="col-4 mx-5 order-1 order-md-2">
                            <button class="btn btn-primary ml-5 btn-lg" id="btn-2" href="./studentcomplaint.html"
                                role="button">login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- FOOTER -->
    <?php include 'partials/_footer.php'; ?>
    <!-- <footer class="ftr">
        <div >
            <div>             
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class=" col-12 col-md-6 mt-5">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                </div>
           </div>
           <div  class="row justify-content-center">             
                <div class="col-auto ">
                    <p>© Copyright 2020 Aman Sonal</p>
                </div>
            </div>
        </div>
        </div>
    </footer> -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        } else {
            $('nav').removeClass('black');
        }
    })
    </script>
</body>


</html>