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
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <nav class="navbar navbar-dark navbar-expand-sm bg-dark fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="./Mainpage.html"> <img src="LunaPic-Edit-7.PNG" class="img-fluid mr-5"
                    width="90" height="auto"></a>

            <div class="collapse navbar-collapse" id="Navbar1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span>
                            Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span
                                class="fa fa-info fa-lg"></span> About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span>
                            Contact</a></li>
                </ul>
                <span mx-3>
                    <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i
                            class="fa fa-google-plus"></i></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i
                            class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                            class="fa fa-linkedin"></i></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i
                            class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i
                            class="fa fa-youtube"></i></a>
                    <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                </span>
            </div>
            <button class="btn btn-success" type="button">Sign Out<span><i class="fa fa-sign-out"
                        aria-hidden="true"></i></span></button>
        </div>
    </nav>

    <div>
        <div class="container mr-auto d-block tbl">
            <div class="card">
                <h5 class="card-header text-center card-header bg-success">Grievances/ Request/ Enquiry/ FeedBack</h5>
                <div class="card-body">
                    <div class="card-text mr-auto d-block">
                        <?php
                        echo '<form action="test.php?form=true" method="POST">
                            <div class="form-row">
                                <div class="col-3">
                                    <label for="hostel">Hostel</label>
                                </div>
                                <div class="col-auto">
                                    <!-- <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Click Me !
                                            </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">K.P-1</a>
                                            <a class="dropdown-item" href="#">K.P-2</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                            <a class="dropdown-item" href="#">K.P-3</a>
                                        </div>
                                    </div>  -->
                                    <!-- <label for="inputState">Hostel :</label> -->
                                    <div class="form-group col-auto">
                                        <select id="hostel" name="hostel" class="form-control">
                                          <option selected >  K.P-1  </option>
                                          <option > K.P-2 </option>
                                          <option >K.P-3</option>
                                          <option >K.P-4</option>
                                         
                                        </select>
                                      </div>
                                </div>
                            </div>
                            <div class="form-row my-3">
                                    <div class="col-6 col-md-3">
                                        <label for="Maintainence"> Maintainence/Electical</label>
                                    </div>
                                    <div class="col-6 col-md-1">
                                        <input type="radio" class="form-control" name="Maintainence"  value="maintain">
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <label for="feedback"> FeedBack</label>
                                    </div>
                                    <div class="col-6 col-md-1">
                                        <input type="radio" class="form-control" name="selectt" value="feedback">
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <label for="feedback">Other</label>
                                    </div>
                                    <div class="col-6 col-md-1">
                                        <input type="radio" class="form-control" name="selectt" value="other">
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        
                        
                        <div class="maintain box">
                            
                                <div class="form-row">
                                    <div class="col-4 col-md-3">
                                        <label for="Maintainence">Room Cleaniness</label>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <input type="radio" class="form-control" id="main" name="main"  value="Room-Cleaniness"> 
                                    </div>
                                    <div class="col-4 col-md-1">
                                        <label for="Other">Others</label> 
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <input type="radio" class="form-control" name="selectt" value="Others-outside-problems">
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label for="feedback">Electrical Appliances</label>
                                    </div>
                                    <div class="col-auto col-md-1">
                                        <input type="radio" class="form-control" name="selectt" value="Electrical-appliances">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6 col-md-3">
                                        Contact Number :   * 
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <input type="telnum" class="form-control" name="phonenumber" placeholder="Whatsapp Number" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6 col-md-3">
                                        Description :  * 
                                    </div>
                                <div class="form-group">
                                    <label for="Description">Example textarea</label>
                                    <textarea class="form-control" id="Description" rows="3"></textarea>
                                </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6 col-md-3">
                                        Set Time Interval: * 
                                    </div>
                                    <div class="col-6 col-md-5 ">
                                        <label for="timeinterval"><strong>11a.m. - 12 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="time-interval" value="time-interval" required>
                                        <label for="timeinterval"><strong>2 p.m. - 3 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="time-interval" value="time-interval" required>
                                        <label for="timeinterval"><strong>5 p.m. - 6 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="time-interval" value="time-interval" required>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="feedback box">
                            <table class="table table-hover table-stripped  table-responsive">
                                <tbody>
                                  <tr>
                                    <th scope="row">Warden\'s Name</th>
                                    <td> Jo b Naam Hoga</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Mess Incharge</th>
                                    <td>12w12324</td>
                                  </tr>
                                  <tr>
                                    <div class="row row-content">
                                        <div class="col-4">
                                        <th scope="row">How\'s the mess Food</th>
                                        </div>
                                        <td>
                                            <div class="col-4">
                                                <label for="messsurvey">Average</label>
                                                <input type="radio" name="mess-survey">
                                            </div>
                                            <div class="col-4">
                                                <label for="messsurvey">Below Average</label>
                                                <input type="radio" name="mess-survey">
                                            </div>
                                        </td>
                                    </div>
                                  </tr>
                                  <tr>
                                    <td>
                                        <h4>We Would Love to improve ourself at any cost to provide you the best services</h4>
                                    </td>
                                    <td>
                                        <input type="text" row="6" name="feedbacktowardsMess">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <div class="other box">
                            <div class="row row-content">
                                <div class="col-12 col-md-6">
                                    <h5>We Would like to maintain discipline of our hostel and help erevyone towards achieving their goals</h5>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" rows="12"  cols="50" value="maintain-discipline" name="cyz">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Post Comment</button>
                        </form>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="ftr bg-dark text-light">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="#" class="text-light">Home</a></li>
                            <li><a href="#" class="text-light">About Us</a></li>
                            <li><a href="#" class="text-light">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 mt-5 ">
                        <a class="btn btn-social-icon btn-google " href="http://google.com/+"><i
                                class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i
                                class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                                class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i
                                class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i
                                class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto ">
                        <p>© Copyright 2020 Aman Sonal</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(window).on('scroll', function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('input[type="radio"]').click(function () {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>
</body>


</html>