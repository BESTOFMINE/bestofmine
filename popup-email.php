<?php

$errorMSG = "";

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

$EmailTo = "mohandas.alle@gmail.com, mohandas.alle@bestofmine.com, contact@bestofmine.com";
$Subject = "An enquiry from www.bestofmine.in for Book A Demo Downloaded";

// prepare email body text
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>