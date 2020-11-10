<!DOCTYPE html>
<html lang="en">

<head>
    <title>KIIT Management </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<<<<<<< HEAD
 
=======

>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="mainpage.css">
<<<<<<< HEAD
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
=======
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>

<body>
    <?php 
        include 'partials/_dbconnect.php';
        include 'partials/_header.php';
    ?>
 
    <div class="container">
        <?php 
            if(isset($_GET['alert']))
            { if($_GET['alert']){
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your issue has been successfully registered. We will try to resolve it asap.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>×</span>
        </button>
    </div>";
            }}
      ?>
    </div>

    <div >   
        <div class="container mr-auto d-block tbl ">
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
            <div class="card">
                <h5 class="card-header text-center card-header bg-success">Grievances/ Request/ Enquiry/ FeedBack</h5>
                <div class="card-body">
                    <div class="card-text mr-auto d-block">
                        <?php
<<<<<<< HEAD
                        echo '<form action="test.php?form=true" method="POST">
=======
                        echo '<form action="partials/_handlecomplaint.php" method="POST">
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
                            <div class="form-row">
                                <div class="col-3">
                                    <label for="hostel">Hostel</label>
                                </div>
<<<<<<< HEAD
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
=======
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
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
<<<<<<< HEAD
                                        <input type="radio" class="form-control" name="Maintainence"  value="maintain">
=======
                                        <input type="radio" class="form-control" name="selectt"  value="maintain">
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
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
<<<<<<< HEAD
                                    <button type="submit" class="btn btn-success">Submit</button>
=======
                                    
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
                            </div>
                        
                        
                        <div class="maintain box">
                            
                                <div class="form-row">
                                    <div class="col-4 col-md-3">
                                        <label for="Maintainence">Room Cleaniness</label>
                                    </div>
                                    <div class="col-2 col-md-1">
<<<<<<< HEAD
                                        <input type="radio" class="form-control" id="main" name="main"  value="Room-Cleaniness"> 
=======
                                        <input type="radio" class="form-control"  name="selectM"  value="Room-Cleaniness"> 
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
                                    </div>
                                    <div class="col-4 col-md-1">
                                        <label for="Other">Others</label> 
                                    </div>
                                    <div class="col-2 col-md-1">
<<<<<<< HEAD
                                        <input type="radio" class="form-control" name="selectt" value="Others-outside-problems">
=======
                                        <input type="radio" class="form-control" name="selectM" value="Others-outside-problems">
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label for="feedback">Electrical Appliances</label>
                                    </div>
                                    <div class="col-auto col-md-1">
<<<<<<< HEAD
                                        <input type="radio" class="form-control" name="selectt" value="Electrical-appliances">
=======
                                        <input type="radio" class="form-control" name="selectM" value="Electrical-appliances">
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6 col-md-3">
                                        Contact Number :   * 
                                    </div>
                                    <div class="col-6 col-md-5">
<<<<<<< HEAD
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
=======
                                        <input type="telnum" class="form-control" name="phone" placeholder="Whatsapp Number" required>
                                    </div>
                                </div>
                                <div class="form-row my-2">
                                <div class="col-6 col-md-3 ">
                                    Room Number :   * 
                                </div>
                                <div class="col-6 col-md-5 ">
                                    <input type="text" class="form-control" name="room" placeholder="Room Number" required>
                                </div>
                            </div>
                                <div class="form-row my-2">
                                    <div class="col-6 col-md-3">
                                        Description :  * 
                                    </div>
                                <div class="form-group ">
                                         <textarea class="form-control" id="Description" name="Description" rows="3"></textarea>
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
                                </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6 col-md-3">
                                        Set Time Interval: * 
                                    </div>
                                    <div class="col-6 col-md-5 ">
<<<<<<< HEAD
                                        <label for="timeinterval"><strong>11a.m. - 12 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="time-interval" value="time-interval" required>
                                        <label for="timeinterval"><strong>2 p.m. - 3 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="time-interval" value="time-interval" required>
                                        <label for="timeinterval"><strong>5 p.m. - 6 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="time-interval" value="time-interval" required>
                                    </div>
                                </div>
                            
=======
                                        <label for="time-interval"><strong>11a.m. - 12 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="tinterval" value="11a.m. - 12 p.m." required>
                                        <label for="time-interval"><strong>2 p.m. - 3 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="tinterval" value="2 p.m. - 3 p.m." required>
                                        <label for="time-interval"><strong>5 p.m. - 6 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="tinterval" value="5 p.m. - 6 p.m." required>
                                    </div>
                                </div>
                                <center><button type="submit" class="btn btn-success my-2">Submit</button></center>
                                
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
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
<<<<<<< HEAD
=======
                              <button type="submit" class="btn btn-success">Submit</button>
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
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
<<<<<<< HEAD
                        </div>
                        <button type="submit" class="btn btn-success">Post Comment</button>
=======
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
                        </form>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

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
=======
    <?php
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=="true" ){
        echo "logged in";
         echo '<div> <p> <h2>'.$_SESSION["username"].'</h2></p></div>';
       }else echo 'not found';
       
    ?>
    <!-- Complaint Table -->
    <div class="col-12">
        <div class="container my-2 ">

            <strong>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Time Slot</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php 
        
                        $sql = "SELECT * FROM `complaint`";
                        $result = mysqli_query($conn, $sql);
                        $sno = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $sno = $sno + 1;
                            echo "<tr>
                            <th scope='row' class='sorting_1' tabindex='0'>". $sno . "</th>
                            <td>". $row['com_desc'] . "</td>
                            <td>". $row['com_status'] . "</td>
                            <td>". $row['com_timeslot'] . "</td>
                        </tr>";
                        }  
                        ?> 


                    </tbody>
                </table>
            </strong>
        </div>
    </div>


    <!-- FOOTER -->
    <?php include 'partials/_footer.php'; ?>
    
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
<<<<<<< HEAD
        $(window).on('scroll', function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>
    <script type="text/javascript">
=======
>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
        $(document).ready(function () {
            $('input[type="radio"]').click(function () {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>
<<<<<<< HEAD
=======

    <!-- data table -->
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            responsive: true
        });
    </script>

>>>>>>> f8d315cc08e35ae12c4db27437ffdc341787aa7a
</body>


</html>