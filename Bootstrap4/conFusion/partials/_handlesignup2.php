<?php 
      session_start();    
    include '_dbconnect.php'; 
    if(isset($_GET['token']))
    {
        $token= $_GET['token'];
        $update_query= "update  users set status= 'active' where token= '$token' ";
        $result= mysqli_query($conn, $update_query);
        if($result)
        {
            if(isset($_SESSION['message'])){
                $_SESSION['message']= 'Account verification done';
                header('Location: ../mainPage/Mainpage.php');
            }else{
                $_SESSION['message']= 'You are logged out';
                header('Location: ../mainPage/Mainpage.php');
            }
        }else{
            $_SESSION['message']= 'Account verification unsuccessfull';
            header('Location: ../mainPage/Mainpage.php');
        }
    }
?>