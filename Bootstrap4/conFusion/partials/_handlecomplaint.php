<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        include '_dbconnect.php';
        $phn = $_POST['phone'];
        $time = $_POST['tinterval'];
        $mtype = $_POST['selectM'];
        $hostel = $_POST['hostel'];
        $description = $_POST["Description"];
        $room = $_POST["room"];
        $userid = $_POST['userid'];

        // Sql query to be executed
        $sql = "INSERT INTO `complaint` (`com_desc`, `com_status`, `timestamp`, `com_phone`, `com_roomno`, `com_timeslot`, `hostel`, `user_id`) 
                VALUES ('$description', 0 , current_timestamp(), '$phn', '$room', , '$time' , '$hostel', '$userid');";
        $result = mysqli_query($conn, $sql);

        
        if($result){ 
        $insert = true;
        header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/stcomplaint.php?register=true&alert=$insert&userid=$userid");    
        echo "inserted";

        }
        else{
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/stcomplaint.php?register=failed&userid=$userid");
        } 
   
                    //header("Location: /forum/index.php?loginsuccess=false&error=$showError");
    }


?>