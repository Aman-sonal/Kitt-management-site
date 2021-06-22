<?php 
$email= "1806228@kiit.ac.in";
$sub="testing";
$body="Email Verification Done. ";
$headers="From: amansonal.kit@gmail.com";
if(mail($email,$sub, $body, $headers))
{
    echo "Sending mail...";
}
else{
    echo "could'nt sent";
}

?>