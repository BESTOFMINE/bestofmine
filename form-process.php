<?php

$errorMSG = "";

// NAME
if (empty($_POST["firstName"])) {
    $errorMSG = "firstName is required ";
} else {
    $firstName = $_POST["firstName"];
}

// NAME
$lastName = $_POST["lastName"];

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Mobile Number
if (empty($_POST["mobile"])) {
    $errorMSG .= "Mobile is required ";
} else {
    $mobile = $_POST["mobile"];
}

// NAME
if (empty($_POST["companyName"])) {
    $errorMSG = "companyName is required ";
} else {
    $companyName = $_POST["companyName"];
}

$jobRole = $_POST["jobRole"];
$jobTitle = $_POST["jobTitle"];
$dataSystem = $_POST['dataSystem'];
$others = $_POST['others'];
$message = $_POST['message'];




$dataname = ''; // avoid php info messages.

foreach($dataSystem as $value){
    $dataname .= $value . PHP_EOL;
}


$EmailTo = "mohandas.alle@gmail.com, mohandas.alle@bestofmine.com, contact@bestofmine.com";
$Subject = "An enquiry from www.bestofmine.in for Book A Demo";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $firstName . " " . $lastName ;
$Body .= "\n\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n\n";
$Body .= "Mobile Number: ";
$Body .= $mobile;
$Body .= "\n\n";
$Body .= "Company Name: ";
$Body .= $companyName;
$Body .= "\n\n";
$Body .= "Job Role: ";
$Body .= $jobRole;
$Body .= "\n\n";
$Body .= "Job Title: ";
$Body .= $jobTitle;
$Body .= "\n\n";
$Body .= "Data System Name: ";
$Body .= $dataname;
$Body .= "\n\n";
$Body .= "Others Data System Name: ";
$Body .= $others;
$Body .= "\n\n";
$Body .= "Message: ";
$Body .= $message;
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