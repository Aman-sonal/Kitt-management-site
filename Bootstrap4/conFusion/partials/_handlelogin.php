<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        include '_dbconnect.php';
        $mail = $_POST['usermail'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM `users` WHERE `user_mail` = '$mail'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
            while($row = mysqli_fetch_assoc($result)){
               
                if(password_verify($pass, $row['password'])){
                    $login = true;  
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$row['user_name'];
                    $_SESSION['_userid']=$row['user_id'];
                    header("location: \khms\Kitt-management-site\Bootstrap4\conFusion\stcomplaint.php?loginsuccess=true");
                    exit();
                }else{
                      $showError = "Invalid Credentials"; 
                    }
                   
                }
            }
        else{
            $showError = "User Does not exist.";
        }
        header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainpage.php?loginsuccess=false&error=$showError");
}


?>