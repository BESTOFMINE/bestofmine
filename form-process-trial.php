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

if (empty($_POST["objective"])) {
    $errorMSG = "objective is required ";
} else {
    $objective = $_POST["objective"];
}

if (empty($_POST["website"])) {
    $errorMSG = "website is required ";
} else {
    $website = $_POST["website"];
}

$competitors1 = $_POST['competitors1'];
$competitors2 = $_POST['competitors2'];
$competitors3 = $_POST['competitors3'];

// $dataSystem = $_POST['dataSystem'];

$facebookUrl = $_POST['facebookUrl'];
$linkedInUrl = $_POST['linkedInUrl'];
$instagramUrl = $_POST['instagramUrl'];
$youTubeUrl = $_POST['youTubeUrl'];
$twitterUrl = $_POST['twitterUrl'];
$pininterestUrl = $_POST['pininterestUrl'];
$others = $_POST['others'];





// $dataname = ''; // avoid php info messages.

// foreach($dataSystem as $value){
//     $dataname .= $value . PHP_EOL;
// }


$EmailTo = "mohandas.alle@gmail.com, mohandas.alle@bestofmine.com, contact@bestofmine.com";
$Subject = "An enquiry from www.bestofmine.in for Start Free Trial";

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
$Body .= "The objective for this free trail: ";
$Body .= $objective;
$Body .= "\n\n";
$Body .= "Your company website you want us to audit: ";
$Body .= $website;
$Body .= "\n\n";
$Body .= "competitors1: ";
$Body .= $competitors1;
$Body .= "\n\n";
$Body .= "competitors2: ";
$Body .= $competitors2;
$Body .= "\n\n";
$Body .= "competitors3: ";
$Body .= $competitors3;
$Body .= "\n\n";
$Body .= "Your Social Media Accounts (facebook.com): ";
$Body .= $facebookUrl;
$Body .= "\n\n";
$Body .= "Your Social Media Accounts (linkedin.com): ";
$Body .= $linkedInUrl;
$Body .= "\n\n";
$Body .= "Your Social Media Accounts (instagram.com): ";
$Body .= $instagramUrl;
$Body .= "\n\n";
$Body .= "Your Social Media Accounts (youtube.com): ";
$Body .= $youTubeUrl;
$Body .= "\n\n";
$Body .= "Your Social Media Accounts (pinterest.com): ";
$Body .= $pininterestUrl;
$Body .= "\n\n";
$Body .= "Your Social Media Accounts (twitter.com): ";
$Body .= $twitterUrl;
$Body .= "\n\n";
$Body .= "Others Social Media Accounts: ";
$Body .= $others;
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