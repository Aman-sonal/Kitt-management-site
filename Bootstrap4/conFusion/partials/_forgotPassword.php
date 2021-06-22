
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
    <link rel="stylesheet" href="_forgotPassword.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php include '../partials/_dbconnect.php'; ?>

    <?php 
        if(isset($_POST['submit']))
        {
            $email= mysqli_real_escape_string($conn, $_POST['email']);
            $query="select * from users where user_mail='$email'";
            $result=mysqli_query($conn,$query);
            $rowCount= mysqli_num_rows($result); 
            if($rowCount){
                $userDataArray= mysqli_fetch_array($result);
                $user_name= $userDataArray['user_name'];
                $token= $userDataArray['token'];
                $subject="Password Recovery Mail";
                $body="Click here to reset your password. http://localhost/KHMS/Kitt-management-site/Bootstrap4/conFusion/partials/_resetPassword.php?token=$token";
                $sender_mail="From: amansonal.kit@gmail.com";
                if(mail($email,$subject, $body, $sender_mail))
                {
                   $_SESSION['passMsg']= "Check your email address to activate this account $email";
                   header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainPage/Mainpage.php");
                }
                else{
                    $_SESSION['forgot']= "Something went wrong. PLease try after sometime";
                }
            }else{
                $_SESSION['forgot']= 'User Mail not Found';
            }
        }  
    
    ?>
    <div class=" container d-flex flex-row  justify-content-around forgotPassword-form">
        <div class="jumbotron">
            <h1 class="display-4"> <strong>Forgot Password! </strong></h1>
            <hr class="my-4">
            <p class="lead"><b>Please fill your valid Email Id</b></p> 
        </div>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="col-auto m-3">
                    <label for="inputPassword2" class="visually-hidden"></label>
                    <input type="email" class="form-control" id="inputPassword2" placeholder="Email">
                    <div>
                        <p><?php 
                            if(isset($_SESSION['forgot']))
                            {
                                if($_SESSION['forgot'])
                                {
                                    echo $_SESSION['forgot'];
                                }
                            }
                        
                        ?></p> 
                    </div>
                </div>
                <div class="col-auto m-3">
                    <button type="submit" name="submit" class="btn btn-primary mb-3">Confirm identity</button>
                </div>
            </form>   
            
        </div> 
    </div>
    <!-- FOOTER -->
    <!-- <?php include 'partials/_footer.php'; ?> -->
   

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </script>
</body>


</html>