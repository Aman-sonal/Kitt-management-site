<?php
    $showAlert=false;
    $showError=false;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        include '_dbconnect.php';
        $useremail = $_POST['signmail'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $exists=false;
        //check wheather this username exists
        $existsql = "SELECT * FROM `users` WHERE `user_mail` = '$useremail'"; 
        $result = mysqli_query($conn, $existsql);
        $userExist = mysqli_num_rows($result);
        echo $username;
        echo $useremail;
        echo $password;
        if($userExist > 0)
        {
            $showError = "User mail id Already Exists!!";
        }else if($password == $cpassword)
                {   $hash = password_hash($password, PASSWORD_DEFAULT);
                  $sql = "INSERT INTO `users` (`user_id`, `user_name`, `user_mail`, `password`) VALUES (NULL, '$username', '$useremail', '$hash')";
                  $result = mysqli_query($conn, $sql);
                echo "aaaaaa";
                if($result){
                    $showAlert = true;
                   header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainpage.php?signupsuccess=true");
                   exit();
                    }
                 }else{echo "pass match";
                        $showError = "Passwords did not matched";
                        
                    }
                   
                    echo "asdd";
                  //  header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainpage.php?signupsuccess=false&error=$showError");
    }
?>