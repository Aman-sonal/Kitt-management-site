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

        // Sql query to be executed
        $sql = "INSERT INTO `complaint` (`com_id`, `com_desc`, `com_phn`, `com_timeslot`, `com_Mtype`, `com_roomno`, `com_status`, `com_userid`, `timestamp`, `hostel`) 
                VALUES (NULL, '$description', '$phn', '$time', '$mtype', '$room', 'pending', '0', current_timestamp(), '$hostel');";
        $result = mysqli_query($conn, $sql);

        
        if($result){ 
        $insert = true;
        header("Location: /khms/Kitt-management-site/Bootstrap4/conFusion/stcomplaint.php?register=true&alert=$insert");    
        echo "inserted";

        }
        else{
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        } 
   
                    //header("Location: /forum/index.php?loginsuccess=false&error=$showError");
    }


?>