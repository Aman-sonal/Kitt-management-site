<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<?php 
    include '../partials/_dbconnect.php';
    if(isset($_POST['submit']))
    {
        if(isset($_GET['token']))
        {
            $token= $_GET['token'];
            $password= mysqli_real_escape_string($conn, $_POST['password']);
            $cpassword= mysqli_real_escape_string($conn, $_POST['cpassword']);
            if($password== $cpassword)
            {
                $hashPass = password_hash($password, PASSWORD_DEFAULT);
                $hashCPass = password_hash($cpassword, PASSWORD_DEFAULT); 
                $update= "update users set password = '$hashPass' where token='$token'";
                $iquery=mysqli_query($conn,$update);
                if($iquery){
                    $_SESSION['message']= "Your Password has been successfully updated";
                    header("Location: ../mainPage/Mainpage.php");
                }else{
                    $_SESSION['msg']="There has been some issue. please try after some time";
                    header("location: _resetPassword.php");
                }
            }else{
                $_SESSION['msg']="Password not Matching";
            }
        }else{
            echo "No such token found";
        }
    }
?>

<div class=" container d-flex flex-row  justify-content-around forgotPassword-form">
        <div>
            <form action="" method="POST">
                <div class="col-auto m-3">
                    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="New Password">
                </div>
                <div class="col-auto m-3">
                    <input type="password"  name="cpassword" class="form-control" id="inputPassword2" placeholder="Confirm Password">
                </div>
                <div class="col-auto m-3">
                    <?php  
                        if(isset($_SESSION['msg']))
                        {
                            if($_SESSION['msg'])
                            {
                                echo $_SESSION['msg'];
                            }
                        }
                    ?>
                </div>
                <div class="col-auto m-3">
                    <button type="submit" name="submit" class="btn btn-primary mb-3">Reset Password</button>
                </div>
            </form>              
        </div> 
    </div>
</body>
</html>