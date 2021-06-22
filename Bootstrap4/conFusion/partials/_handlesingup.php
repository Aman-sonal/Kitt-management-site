<?php
    $showAlert=false;
    $showError=false;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        include '_dbconnect.php';
        $useremail = $_POST['Email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $empty=false;
        if(empty($useremail) || empty($username) || empty($password) || empty($cpassword))
        {
            $empty=true;
            header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainPage/Mainpage.php?emptyField=$empty");
            exit();
        }
        $exists=false;
        //check wheather this username exists
        $existsql = "SELECT * FROM `users` WHERE `user_mail` = '$useremail'"; 
        $result = mysqli_query($conn, $existsql);
        $userExist = mysqli_num_rows($result);
        $showError=false;
        if($userExist > 0)
        {
            $showError=true;
            header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainPage/Mainpage.php?userExist=$showError");
            exit();
        }
        else if($password == $cpassword){
            $hashPass = password_hash($password, PASSWORD_DEFAULT);
            $hashCPass = password_hash($password, PASSWORD_DEFAULT);
            $token= bin2hex(random_bytes(15));
            $sql = "INSERT INTO `users` (`user_id`, `user_name`, `user_mail`, `password`, `cpassword`, `token`) VALUES (NULL, '$username', '$useremail', '$hashPass','$hashCPass', '$token')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
                $subject="Account Activation mail";
                $body="Hi! $user_name. Click here to activate your account. http://localhost/KHMS/Kitt-management-site/Bootstrap4/conFusion/partials/_handlesignup2.php?token=$token";
                $sender_mail="From: amansonal.kit@gmail.com";
                if(mail($useremail,$subject, $body, $sender_mail))
                {
                   $_SESSION['message']= "Check your email address to activate this account $useremail";
                   header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainPage/Mainpage.php?signupsuccess=$showAlert");
                }
                else{
                    $_SESSION['message']= "Something went wrong. PLease try after sometime";
                }
                exit();
            }
            else{
                $showAlert = false;
                header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainPage/Mainpage.php?signupsuccess=$showAlert");
                exit();
            }
        }
        else{
            $passMatch =false;
                header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainPage/Mainpage.php?passwordMatch=$passMatch");
               exit();
        }
        //  header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainpage.php?signupsuccess=false&error=$showError");
    }
?>