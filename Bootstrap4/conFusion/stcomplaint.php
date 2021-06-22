<?php 
session_start();
    if(!isset($_SESSION['loggedin']) ||  $_SESSION['loggedin']!=true)
    {
        header("location : Mainpage.php");
        exit();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php 
        include 'partials/_dbconnect.php';
        include 'partials/_header.php';
   
        if(isset($_GET['alert']))
         { 
            if($_GET['alert']){
                echo '
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol> </svg>
                <div class="alert alert-success  alert-dismissible d-flex align-items-center" role="alert" id="success-alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                  Added Successfully.
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
         }
     if(isset($_GET['register']) && $_GET['register']=='failed')
         { 
            echo'
            <svg>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </symbol>
            </svg> 
            <div class="alert alert-danger alert-dismissible d-flex align-items-center" role="alert" id="error-alert>
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              An example danger alert with an icon
            </div>';
     }
    
     $_userid = $_GET['userid'];
     $sql= "SELECT * FROM `users` WHERE `user_id` = {$_userid} ";
        $result= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $_name = $row['user_name'];
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
    <div class="container justify-content-between mx-auto mt-6">
        <div class="card text-center">
            <div class="card-header  text-center card-header bg-success">
                Grievances/ Request/ Enquiry/ FeedBack
            </div>
            <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active"  id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Maintenance</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Valuable Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                    Feedback</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <?php
                    echo '<form action="partials/_handlecomplaint.php" method="POST">
                        <input type="hidden" name="userid" value='.$_userid.'>
                        <input type="hidden" name="hostel" value="kp-6" >
                        <div class=" flex d-flex mx-auto mb-3 justify-content-around">
                        <div class="form-check mx-4">
                            <input class="form-check-input" type="radio" name="roomCleaniness" value="room-cleaniness" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Room Cleaniness
                            </label>
                        </div>
                        <div class="form-check mx-4">
                            <input class="form-check-input" type="radio" name="roomCleaniness" value="Electical-cleaniness" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Electical appliances
                            </label>
                        </div>
                        <div class="form-check mx-4">
                            <input class="form-check-input" type="radio" name="roomCleaniness" value="Others-cleaniness" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Others
                            </label>
                        </div>
                        </div>
                        <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Contact Number</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="phoneNumber" placeholder="Calling Number">
                                </div>
                         </div>
                         <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Room Number</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="roomNumber">
                                </div>
                         </div>
                         <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Set Interval</label>
                                <div class="col-sm-10 flex d-flex">
                                <div class="form-check mx-4">
                                    <input class="form-check-input" type="radio" name="setInterval" value="11 am to 12 pm" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        11 A.M to 12 P.M
                                    </label>
                                </div>
                                <div class="form-check mx-4">
                                    <input class="form-check-input" type="radio" name="setInterval" id="flexRadioDefault2" value="3 am to 5 pm" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        3 P.M to 5 P.M
                                    </label>
                                </div>
                                <div class="form-check mx-4">
                                    <input class="form-check-input" type="radio" name="setInterval" value="6 am to 7 pm" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        6 P.M to 7 P.M
                                    </label>
                                </div>
                                </div>
                         </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Describe: </label>
                            <div class="col-sm-10 offset-sm-2">
                                <div class="form-group">
                                    <textarea class="form-control" id="Description" name="Description" rows="2" placeholder="Specify your  complaint in not more than 100 words"></textarea>
                                </div>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>'?>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <table class="table table-striped">
                    <tbody>
                        <tr>
                        <td>Hostel</td>
                        <td>kp-6</td>
                        </tr>
                        <tr>
                            <td>Hostel Phone Number</td>
                            <td> 
                                000000000
                            </td>
                            </tr>
                        <tr>
                        
                        <td>Warden Name</td>
                        <td>XYZ</td>
                        </tr>
                        <tr>
                    
                            <td >Mess Incharge</td>
                            <td>ABC</td>
                        </tr>
                        <tr>
                            <td>Hostel Rules and Reguldation</td>
                            <td>
                            <a class="btn btn-primary" href="#" role="button">Download</a>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <?php  echo' <form action="" method="POST">
                                <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Room Cleaniness Rating</label>
                                        <div class="col-sm-10">
                                        <div class="flex d-flex mx-auto justify-content-around">
                                            <div class="form-check mx-4">
                                                <input class="form-check-input" type="radio" name="roomCleaninessRating" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                Daily
                                                </label>
                                </div>
                                <div class="form-check mx-4">
                                                <input class="form-check-input" type="radio" name="roomCleaninessRating" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Once in Week
                                                </label>
                                </div>
                                <div class="form-check mx-4">
                                                <input class="form-check-input" type="radio" name="roomCleaninessRating" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Once in Month
                                                </label>
                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Hostel Cleaniness Rating</label>
                                        <div class="col-sm-10">
                                        <div class="flex d-flex mx-auto justify-content-around">
                                            <div class="form-check mx-4">
                                                <input class="form-check-input" type="radio" name="hostelCleaninessRating" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                Good 
                                                </label>
                                            </div>
                                            <div class="form-check mx-4">
                                                <input class="form-check-input" type="radio" name="hostelCleaninessRating" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Average
                                                </label>
                                            </div>
                                            <div class="form-check mx-4">
                                                <input class="form-check-input" type="radio" name="hostelCleaninessRating" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Below Average
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mess Food Rating</label>
                                        <div class="col-sm-10">
                                        <div class="flex d-flex mx-auto justify-content-around">
                                            <div class="form-check mx-4">
                                                <input class="form-check-input" type="radio" name="messFoodRating" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                Good 
                                                </label>
                                            </div>
                                            <div class="form-check mx-4">
                                                <input class="form-check-input" type="radio" name="messFoodRating" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Average
                                                </label>
                                            </div>
                                            <div class="form-check mx-4">
                                                <input class="form-check-input" type="radio" name="messFoodRating" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Below Average
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 ml-2">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Your Monthly Feedback for your hostel</label>
                                        <div class="col-sm-10">
                                        <div class="form-group">
                                    <textarea class="form-control" id="Description" name="feedbackDescription" rows="2" placeholder="Not more than 100 words"></textarea>
                                        </div>
                                        </div>
                                </div>
                                <div class="row mb-3 ml-2">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Any Suggesstion Warden</label>
                                        <div class="col-sm-10">
                                        <div class="form-group">
                                    <textarea class="form-control" id="Description" name="wardenFeedback" rows="2" placeholder="Not more than 100 words"></textarea>
                                        </div>
                                        </div>
                                </div>
                                </form>                 
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>'?>;
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Complaint Table -->
         <div class="container mx-auto">
            <table class="table table-success table-striped">
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
                    $remark;
                    if($row['com_status']==0) $remark="Not Completed";
                    else $remark="Completed";
                    echo "<tr>
                    <th scope='row' class='sorting_1' tabindex='0'>". $sno . "</th>
                    <td>". $row['timestamp'] . "</td>
                    <td>". $row['com_desc'] . "</td>
                    <td>". $row['com_status'] . "</td>
                    <td>". $row['com_timeslot'] . "</td>
                    <td>". $remark . "</td>
                </tr>";
                }  
                ?>
            </tbody>
            </table>
         </div>


    <!-- FOOTER -->
    <?php include 'partials/_footer.php'; ?>


    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </script> -->
    <script type="text/javascript">
    // $(document).ready(function() {
    //     $('input[type="radio"]').click(function() {
    //         var inputValue = $(this).attr("value");
    //         var targetBox = $("." + inputValue);
    //         $(".box").not(targetBox).hide();
    //         $(targetBox).show();
    //     });
    // });/
    const alertMsg = document.querySelector("#success-alert");
    if (alertMsg) {
    setTimeout(() => {
        alertMsg.remove();
    }, 2000);
    }
    const alertMsg = document.querySelector("#error-alert");
    if (alertMsg) {
    setTimeout(() => {
        alertMsg.remove();
    }, 5000);
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








