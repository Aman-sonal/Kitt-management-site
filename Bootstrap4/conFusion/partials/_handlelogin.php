<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        include '_dbconnect.php';
        $mail = $_POST['Email'];
        $pass = $_POST['password'];
        $empty=false;
        if(empty($mail) || empty($pass))
        {
            $empty=true;
            header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainPage/Mainpage.php?emptyField=$empty");
            exit();
        }
       else{
        $sql = "SELECT * FROM `users` WHERE `user_mail` = '$mail' AND `status`='active'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
            while($row = mysqli_fetch_assoc($result)){
               
                if(password_verify($pass, $row['password'])){
                    // setcookie("type" , $row['usermail'], time()+ 3600);
                    session_start();
                    $login = true;
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$row['user_name'];
                    $_SESSION['_userid']=$row['user_id'];
                    $id = $row['user_id'];
                    $n =strpos($row['user_mail'],"@");
                    $str = substr($row['user_mail'],0,$n);
                    if($str == 'KP-2' ||$str == 'KP-1' || $str == 'KP-3'|| $str == 'KP-4')
                    {
                        header("location: \khms\Kitt-management-site\Bootstrap4\conFusion\warden-operating-page.php?loginsuccess=true&userid=$id");    
                        exit();
                    }else{
                     header("location: \khms\Kitt-management-site\Bootstrap4\conFusion\stcomplaint.php?loginsuccess=true&userid=$id");
                     exit();
                    }
                }else{
                      $showError = "Invalid Credentials"; 
                    }
                   
                }
            }
        else{
            $showError = "User Does not exist.";
        }
       }
       header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/mainpage.php?loginsuccess=false&error=$showError");
}


?>