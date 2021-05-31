<?php 
session_start();
    if(!isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true)
    {
        header("location : Mainpage.php");
        exit;
    }
?>

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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <?php 
        include 'partials/_dbconnect.php';
        include 'partials/_header.php';
   
        if(isset($_GET['alert']))
         { 
            if($_GET['alert']){
                echo "<div class='alert alert-success alert-dismissible fade show mt-6 close ' role='alert'>
                    <strong>Success!</strong> Your issue has been successfully registered. We will try to resolve it asap.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                    </button>
                </div>";
            }
         }
     if(isset($_GET['register']) && $_GET['register']=='failed')
         { 
            echo "<div class='alert alert-danger alert-dismissible fade show close ' role='alert'>
    <strong>Failed!</strong> Your issue could not be registered. Try again after some time.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
     }
    
     $_userid = $_GET['userid'];
     $sql= "SELECT * FROM `users` WHERE `user_id` = $_userid ";
        $result= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
            {
                $_name = $row['user_name'];
               
               // $catdesc= $row['cat_description'];
            }

      ?>
    <!-- Jumbotron -->
    <br><br><br><br><br><br>
    <div class="container">
    <div class="jumbotron">
        <h1 class="display-4"> <strong>Hello, <?php echo $_name; ?>!</strong></h1>
        <hr class="my-4">
        <p class="lead">Please report your issues here, We will be happy to resolve it.</p>
    </div>

   
    <div>
        <div class="container mr-auto d-block tbl ">
            <div class="card">
                <h5 class="card-header text-center card-header bg-success">Grievances/ Request/ Enquiry/ FeedBack</h5>
                <div class="card-body">
                    <div class="card-text mr-auto d-block">
                        <?php
                        echo '<form action="partials/_handlecomplaint.php" method="POST">
                        <input type="hidden" name="userid" value='.$_userid.' >
                            <div class="form-row">
                                <div class="col-3">
                                    <label for="hostel">Hostel</label>
                                </div>
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
                                        <input type="radio" class="form-control" name="selectt"  value="maintain">
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
                                    
                            </div>
                        
                        
                        <div class="maintain box">
                            
                                <div class="form-row">
                                    <div class="col-4 col-md-3">
                                        <label for="Maintainence">Room Cleaniness</label>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <input type="radio" class="form-control"  name="selectM"  value="Room-Cleaniness"> 
                                    </div>
                                    <div class="col-4 col-md-1">
                                        <label for="Other">Others</label> 
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <input type="radio" class="form-control" name="selectM" value="Others-outside-problems">
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <label for="feedback">Electrical Appliances</label>
                                    </div>
                                    <div class="col-auto col-md-1">
                                        <input type="radio" class="form-control" name="selectM" value="Electrical-appliances">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6 col-md-3">
                                        Contact Number :   * 
                                    </div>
                                    <div class="col-6 col-md-5">
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
                                </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6 col-md-3">
                                        Set Time Interval: * 
                                    </div>
                                    <div class="col-6 col-md-5 ">
                                        <label for="time-interval"><strong>11a.m. - 12 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="tinterval" value="11a.m. - 12 p.m." required>
                                        <label for="time-interval"><strong>2 p.m. - 3 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="tinterval" value="2 p.m. - 3 p.m." required>
                                        <label for="time-interval"><strong>5 p.m. - 6 p.m.</strong></label>
                                        <input type="radio"  class="form-control" name="tinterval" value="5 p.m. - 6 p.m." required>
                                    </div>
                                </div>
                                <center><button type="submit" class="btn btn-success my-2" onclick="closeAlert()">Submit</button></center>
                                
                        </div>
                        <div class="feedback box">
                            <table class="table table-hover table-stripped  table-responsive">
                                <tbody>
                                  <tr>
                                    <th scope="row">Warden\'s Name</th>
                                    <td>Wardens Name</td>
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
                              <button type="submit" class="btn btn-success">Submit</button>
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
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        </form>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Complaint Table -->



    <div class="col-12">
        <div class="container my-2 ">

            <strong>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Time Slot</th>
                            <th scope="col">Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
        
                        $sql = "SELECT * FROM `complaint` WHERE `user_id` = $_userid";
                        $result = mysqli_query($conn, $sql);
                        $sno = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $sno = $sno + 1;
                            echo "<tr>
                            <th scope='row' class='sorting_1' tabindex='0'>". $sno . "</th>
                            <td>". $row['timestamp'] . "</td>
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


    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript">
    $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        } else {
            $('nav').removeClass('black');
        }
    })
    </script> -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        });
    });
    function closeAlert()
    {
        var close = document.getElementsByClassName('close');
        close.innerHTML= `<strong>Success!</strong> Your issue has been successfully registered. We will try to resolve it asap.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>`;
        setTimeout(function(){
        close.parentNode.removeChild(el);
        },duration);
    }
    </script>
    <!-- data table -->
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        responsive: true
    });
    </script>

</body>


</html>