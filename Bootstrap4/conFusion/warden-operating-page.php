<<<<<<< HEAD
=======
<?php 
    include "partials/_dbconnect.php";
    $showAlert = false;
    $showError = false;
    $WorkDone = false;
    //Adding Remarks to complaint
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $remark =$_POST['remarks'];
        $id =  $_POST['snoEdit'];
        $sql = "UPDATE `complaint` SET `remark` = '$remark' WHERE `complaint`.`com_id` = $id";
        $result = mysqli_query($conn , $sql);
        if($result){
            $showAlert=true;
        }else{
            $showError = true;
        }
        
    }
    $_userid = $_GET['userid'];
    $sql= "SELECT * FROM `users` WHERE `user_id` = $_userid ";
        $result= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
            {
                $_name = $row['user_name'];
               
               // $catdesc= $row['cat_description'];
            }
        // Word Completed changes
    if(isset($_GET['complete'])){
        $sno = $_GET['complete'];
        $sql = "UPDATE `complaint` SET `com_status` = 'Completed' WHERE `complaint`.`com_id` = $sno; ";
        $result = mysqli_query($conn, $sql);
        if($result){
            $WorkDone=true;
            $showAlert=true;
        }
      }


?>



>>>>>>> 15d6aa500ac555fc929f872fdc0aacbb343c9196
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

</head>

<body>
    <?php
       // include "partials/_dbconnect.php";
        // include "partials/_header.php";    

    ?>

    <!-- <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="./Mainpage.html"> <img src="LunaPic-Edit-7.PNG" class="img-fluid mr-5" width="50" height="auto"></a>
            <div class="collapse navbar-collapse" id="Navbar1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg mr-1"></span> <b>Home</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg mr-1"></span><b>About Us</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg mr-1"></span><b>Contact</b></a></li>
                </ul>
                <span class="navbar-text">
                    <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                </span>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed ">
        <a class="navbar-brand mr-auto" href="./Mainpage.html"> <img src="LunaPic-Edit-7.PNG" class="img-fluid mr-5"
                width="50" height="auto"></a>
        <div class="collapse navbar-collapse" id="Navbar1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li>
                        <span class="navbar-text">
                            <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i
                                    class="fa fa-google-plus"></i></a>
                            <a class="btn btn-social-icon btn-facebook"
                                href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                                    class="fa fa-linkedin"></i></a>
                            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i
                                    class="fa fa-twitter"></i></a>
                            <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                        </span>
                    </li>
                </ul>
            </div>
    </nav>
    <?php
              if($showAlert)
                {  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Success!</strong>";if($WorkDone){ echo " Status has been successfully changed to completed.";}else {echo " Remark has been successfully updated."; }
              echo"
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>×</span>
          </button>
      </div>";}
      if($showError)
      {  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Success!</strong> Remark updation failed. Please try few moments later.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>×</span>
</button>
</div>";}
        ?>

     
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4"><strong> <?php echo $_name; ?></strong></h1>
            <hr class="my-4">
            <p class="lead">Please report your issues here, We will be happy to resolve it.</p>
        </div>
    </div>
     
        <div class="warden-side-complaint-table my-5 ">
            <table class="table table-responsive" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Student's Complain</th>
                        <th scope="col">Time Slot</th>
                        <th scope="col">Room Number</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                   $sql= "SELECT * FROM `complaint` WHERE `com_status` LIKE 'pending' AND `hostel` LIKE '$_name' ";
                    $result= mysqli_query($conn, $sql);
                    $sl = 0;
                    while($row = mysqli_fetch_assoc($result))
                    {   $sl = $sl + 1;
                        echo '
                            <tr>
                    <th scope="row">'.$sl.'</th>
                    <td>'. $row["com_desc"] .' </td>
                    <td> '. $row["com_timeslot"] .' </td>
                    <td> '. $row["com_roomno"] .' </td>
                    <td>
                        <button type="button" class="remark btn btn-primary" data-toggle="modal" id='.$row["com_id"].' data-target="#ModalCenter">
                           Edit
                        </button>
                    </td>
                    <td>
                        <button type=" button" class=" complete btn btn-primary" id='.$row["com_id"].'>
                            Completed
                        </button>                
                    </td>
                    </tr>';
                    }
                
                ?>
                </tbody>
            </table>
        </div>
           

        <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/khms/Kitt-management-site/Bootstrap4/conFusion/warden-operating-page.php?userid=<?php echo $_userid; ?>">
                            <input type="hidden" name="snoEdit" id="snoEdit">
                            <div class="form-row">
                                <div class="col-">

                                    <label for="remark">Add your remarks. </label>
                                    <input type="text" rows="5" cols='15' name="remarks" id='remarksarea'>
                                </div>
                                <div class="col">
                                    <input type="text" name="date-and-time" id="datePicker">
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

        <!-- Footer -->
        <?php include 'partials/_footer.php'; ?>
        <!-- <footer class="ftr">
        <div>
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
                    </div>
                </div>
                <div class="row justify-content-center">
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
        <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
        $(document).ready(function() {
            $('#myTable').DataTable();
        })
        </script>
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
        <script>
        edits = document.getElementsByClassName('remark');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                console.log(e.target.id);
                snoEdit.value = e.target.id;
                //$('#ModalCenter').modal('toggle');


            })
        })
        </script>
        <script>
        comp = document.getElementsByClassName('complete');
        Array.from(comp).forEach((element) => {
            element.addEventListener("click", (e) => {
                sno = e.target.id;
                console.log("edit --  ");
                console.log(e.target.id);

                uid = <?php echo $_userid; ?>;
                console.log("uid", uid);
                if (confirm("Are you sure you want to mark it completed!")) {
                    console.log("yes");
                    window.location =
                        `/khms/Kitt-management-site/Bootstrap4/conFusion/warden-operating-page.php?complete=${sno}&userid=${uid}`;
                } else {
                    console.log("no");
                }
            })
        })
        </script>
        <script src="warden-operating-page.js"></script>
</body>

</html>