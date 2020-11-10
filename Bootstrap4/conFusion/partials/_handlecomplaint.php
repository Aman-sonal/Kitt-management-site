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
        $sql = "INSERT INTO `complaint` (`com_d`, `com_desc`, `com_phn`, `com_timeslot`, `com_Mtype`, `com_roomno`, `com_status`, `com_userid`, `timestamp`, `hostel`) 
                VALUES (NULL, '$description', '$phn', '$time', '$mtype', '$room', 'pending', '$userid', current_timestamp(), '$hostel');";
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