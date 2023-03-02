<?php

$errorMSG = "";

// NAME
if (empty($_POST["firstName"])) {
    $errorMSG = "firstName is required ";
} else {
    $firstName =  addslashes(htmlentities(strip_tags(trim($_POST["firstName"]))));
}

// NAME
$lastName =  addslashes(htmlentities(strip_tags(trim($_POST["lastName"]))));

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email =  addslashes(htmlentities(strip_tags(trim($_POST["email"]))));
}

// Mobile Number
if (empty($_POST["mobile"])) {
    $errorMSG .= "Mobile is required ";
} else {
    $mobile =  addslashes(htmlentities(strip_tags(trim($_POST["mobile"]))));
}

// NAME
if (empty($_POST["companyName"])) {
    $errorMSG = "companyName is required ";
} else {
    $companyName =  addslashes(htmlentities(strip_tags(trim($_POST["companyName"]))));
}

$jobRole =  addslashes(htmlentities(strip_tags(trim($_POST["jobRole"]))));	
$others =  addslashes(htmlentities(strip_tags(trim($_POST["others"]))));
$descriptions =  addslashes(htmlentities(strip_tags(trim($_POST["message"]))));
$dataSystem = $_POST["dataSystem"];
$selectedItems = "";
$othersDispay = "";

if(!empty($dataSystem)){
    // Loop to store and display values of individual checked checkbox.
    foreach($dataSystem as $selected){
        //echo $selected."</br>";
        if($selected === "Data & Digital Audit"){
            $selectedItems .= '<tr>
            <td align="center" valign="top" style="background-color: #ffffff;">
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" bgcolor="#f3f9fd"
                    style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="middle" widht="40" style="padding-right: 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" widht="82" style="padding: 0 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/dda-icon.png" width="62" height="62" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" style="padding-left: 10px;">
                          <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">Data & Digital
                            Audit</p>
                          <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">How do we know
                            where we stand in data & digital before using vendor services? Which service to focus on first?
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="1" valign="top " height="10"></td>
          </tr>';
        }

        if($selected === "Data & Digital Strategy"){
            $selectedItems .= '<tr>
            <td align="center" valign="top" style="background-color: #ffffff;">
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" bgcolor="#f3f9fd"
                    style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="middle" widht="40" style="padding-right: 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" widht="82" style="padding: 0 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/dds-icon.png" width="62" height="62" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" style="padding-left: 10px;">
                          <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">Data & Digital
                            Strategy</p>
                          <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">How to build a
                            data-driven business culture, how do I measure and create my analytics future</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="1" valign="top " height="10"></td>
          </tr>';
        }
        if($selected === "Implementation & Data Management"){
            $selectedItems .= '<tr>
            <td align="center" valign="top" style="background-color: #ffffff;">
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" bgcolor="#f3f9fd"
                    style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="middle" widht="40" style="padding-right: 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" widht="82" style="padding: 0 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/idm-icon.png" width="62" height="62" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" style="padding-left: 10px;">
                          <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">Implementation
                            & Data Management</p>
                          <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">How do I know
                            my analytics tags are in place to capture the data we need? Is it scalable?</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="1" valign="top " height="10"></td>
          </tr>';
        }
        if($selected === "Reporting and Insights"){
            $selectedItems .= '<tr>
            <td align="center" valign="top" style="background-color: #ffffff;">
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" bgcolor="#f3f9fd"
                    style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="middle" widht="40" style="padding-right: 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" widht="82" style="padding: 0 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/ri-icon.png" width="62" height="62" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" style="padding-left: 10px;">
                          <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">Reporting and
                            Insights</p>
                          <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">What metrics to
                            analyze and create reports, and which KPI to focus on? We need actionable insights</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="1" valign="top " height="10"></td>
          </tr>';
        }
        if($selected === "Search Intelligence"){
            $selectedItems .= '<tr>
            <td align="center" valign="top" style="background-color: #ffffff;">
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" bgcolor="#f3f9fd"
                    style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="middle" widht="40" style="padding-right: 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" widht="82" style="padding: 0 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/si-icon.png" width="62" height="62" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" style="padding-left: 10px;">
                          <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">Search
                            Intelligence</p>
                          <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">How do we
                            increase our organic traffic & outperform in search engine results? What to do to improve domain,
                            page authority, & page ranking? Which inbound link is useful, & which is wrong?</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="1" valign="top " height="10"></td>
          </tr>';
        }
        if($selected === "VOC & Social Media Intelligence"){
            $selectedItems .= '<tr>
            <td align="center" valign="top" style="background-color: #ffffff;">
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" bgcolor="#f3f9fd"
                    style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="middle" widht="40" style="padding-right: 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" widht="82" style="padding: 0 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/vsmi-icon.png" width="62" height="62" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" style="padding-left: 10px;">
                          <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">VOC & Social
                            Media Intelligence</p>
                          <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">We have many
                            social channels; how do we outperform? How to keep customers happy, how to maintain a brand
                            reputation in constant changing digital space and customer expectations</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="1" valign="top " height="10"></td>
          </tr>';
        }
        if($selected === "Marketing Automation"){
            $selectedItems .= '<tr>
            <td align="center" valign="top" style="background-color: #ffffff;">
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" bgcolor="#f3f9fd"
                    style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="middle" widht="40" style="padding-right: 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" widht="82" style="padding: 0 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/ma-icon.png" width="62" height="62" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" style="padding-left: 10px;">
                          <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">Marketing
                            Automation</p>
                          <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">How can we
                            communicate to our customers across channels from time to time without missing the flow?</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="1" valign="top " height="10"></td>
          </tr>';
        }
        if($selected === "Omni / Multi-Channel Optimization"){
            $selectedItems .= '<tr>
            <td align="center" valign="top" style="background-color: #ffffff;">
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" bgcolor="#f3f9fd"
                    style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="middle" widht="40" style="padding-right: 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" widht="82" style="padding: 0 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/omco-icon.png" width="62" height="62" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" style="padding-left: 10px;">
                          <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">Omni /
                            Multi-Channel Optimization</p>
                          <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">How to measure
                            cross channel performance with different touchpoints across user-profiles and how do we position
                            our products/services to target based on their interactions</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="1" valign="top " height="10"></td>
          </tr>';
        }
        if($selected === "Digital Intelligence"){
            $selectedItems .= '<tr>
            <td align="center" valign="top" style="background-color: #ffffff;">
              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top" bgcolor="#f3f9fd"
                    style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="middle" widht="40" style="padding-right: 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" widht="82" style="padding: 0 10px;">
                          <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/di-icon.png" width="62" height="62" alt="Best of Mine" />
                        </td>
                        <td align="left" valign="middle" style="padding-left: 10px;">
                          <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">Digital
                            Intelligence</p>
                          <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">We have
                            extensive data sets with multiple sources to keep ourselves ahead of our competitors and
                            outperform always. How do we manage it? How to handle large volume & velocity of data? Which
                            platform to adopt?</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="left" colspan="1" valign="top " height="10"></td>
          </tr>';
        }
    }
}

if(!empty($others)) {
    $othersDispay = '<tr>
        <td align="center" valign="top" style="background-color: #ffffff;">
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td align="left" valign="top" bgcolor="#f3f9fd"
                style="border-radius: 12px; background: #f3f9fd; border: 1px solid #0278ca; box-shadow: 0px 12px 24px rgba(79, 110, 145, 0.07);padding: 20px 25px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left" valign="middle" width="30" style="padding-right: 10px;">
                    <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/blue-check.png" width="30" height="30" alt="Best of Mine" />
                    </td>
                    <td align="left" valign="middle" width="60" style="padding: 0 10px;">
                    <img style="display:block;" src="https://bestofmine.com/assets/images/emailer/others-icon.png" width="62" height="62"
                        alt="Best of Mine" />
                    </td>
                    <td align="left" valign="middle" style="padding-left: 10px;">
                    <p style="font-size: 20px; font-weight: 800; color: #1C1D1F; padding: 0; margin: 0;">Others</p>
                    <p style="font-size: 13px; font-weight: 300; color: #666666; padding: 0; margin: 0;">'.$others.'</p>
                    </td>
                </tr>
                </table>
            </td>
            </tr>
        </table>
        </td>
    </tr>
    <tr>
        <td align="left" colspan="1" valign="top " height="10"></td>
    </tr>';
}

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
$headers .= 'Reply-To:' .$email. "\r\n";
$headers .= 'From: '.$email.' <'.$email.'>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: mohandas.alle@gmail.com' . "\r\n";

//$HEADERS = "From: ".$email."  <".$email.">;\nReply-To: ".$email.";\nMIME-Version: 1.0;\nBcc:: mohandas.alle@gmail.com;\nContent-type: text/html; charset=iso-8859-1;";
$value = "mohandas.alle@gmail.com, mohandas.alle@bestofmine.com, contact@bestofmine.com,".$email;
//$userEmail = ".$email.";
$subject = "An enquiry from www.bestofmine.in for Book A Demo";

$message  = '<!doctype html>
		<html lang="en">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Best of Mine</title>
			<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
			<style rel="stylesheet" type="text/css">
			body {
				font-family: "Poppins", sans-serif;
			}
			</style>
	  	</head>
		 <body>
		 <table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="650"
		 style="margin:0 auto; width:650px; border: 1px solid #cccccc; font-family: "Poppins", Arial, Helvetica, sans-serif; font-size: 14px; color: #000000;">
			<tr>
				<td align="center" valign="top" bgcolor="#316EA7">
				<table width="90%" border="0" cellspacing="0" cellpadding="0">
					<tr>
					<td align="left" valign="top" height="325"
						style="line-height:325px; font-size: 22px; font-weight: bold; color: #ffffff; letter-spacing: 2px;">
						<img style="display:block;" src="https://bestofmine.com/assets/images/emailer/slice-1.jpg" width="650" height="325" alt="Best of Mine" />
					</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align="center" valign="top" style="background-color: #ffffff;">
					<table width="90%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" valign="top" bgcolor="#ffffff"
						style="text-align: left; padding: 20px 0 16px; font-size: 18px; color: #333333;">
						<p><strong>Dear '.$firstName.' '.$lastName.',</strong></p>
						<p>Thank you for your interest and to <strong>&apos; book a demo &apos;</strong> for the following services</p>
						<p style="margin-bottom: 0;">Service details follow as per your selection:</p>
						</td>
					</tr>
					</table>
				</td>
			</tr>'
				.$selectedItems
				.$othersDispay.
			'<tr>
                <td align="left" colspan="1" valign="top " height="10"></td>
            </tr>
            <tr>
				<td align="center" valign="top">
          <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top" width="150" style="font-size: 18px;">Company Name: </td>
              <td align="left" valign="top" style="font-size: 18px; color: #000000; font-weight: 800;">'.$companyName.'</td>
            </tr>
          </table>
				</td>
			</tr>
			<tr>
                <td align="left" colspan="1" valign="top " height="10"></td>
            </tr>
      <tr>
				<td align="center" valign="top">
          <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top" width="150" style="font-size: 18px;">Mobile Number: </td>
              <td align="left" valign="top" style="font-size: 18px; color: #000000; font-weight: 800;">
                <a href="tel:'.$mobile.'" style="color: #000000; text-decoration: none;">'.$mobile.'</a>
              </td>
            </tr>
          </table>
				</td>
			</tr>
			<tr>
        <td align="left" colspan="1" valign="top " height="10"></td>
    </tr>
      <tr>				
				<td align="center" valign="top" bgcolor="#ffffff">
					<table width="90%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="left" valign="top" style="color: #666666; padding: 14px 0; text-align: left;">'.nl2br($descriptions).'</td>
                        </tr>
                      </table>
				</td>
		  </tr>	
		  <tr>
        <td align="left" colspan="1" valign="top " height="10"></td>
    </tr>
		  <tr>
			<td align="center" valign="top" bgcolor="#0278CA" style="color: #ffffff; padding: 14px 0;">
				<table width="90%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="left" valign="top">
					<a href="tel:+971561631189" style="color: #ffffff; font-size: 12px; text-decoration: none;">
						<img style="display:inline-block; margin-right: 10px; vertical-align: middle;"
						src="https://bestofmine.com/assets/images/emailer/phone-call-icon.png" width="16" height="16" alt="Best of Mine" />+971 56 163 1189 </a>
					</td>
					<td align="left" valign="middle">
					<a href="mailto:mohandal.alle@bestofmine.com"
						style="color: #ffffff; font-size: 12px; vertical-align: middle; text-decoration: none;">
						<img style="display:inline-block; margin-right: 10px;  vertical-align: middle;"
						src="https://bestofmine.com/assets/images/emailer/email-icon.png" width="17" height="15" alt="Best of Mine" />
						mohandal.alle@bestofmine.com</a>
					</td>
					<td align="left" valign="middle" width="30">
					<a href="#">
						<img style="display:block;" src="https://bestofmine.com/assets/images/emailer/twitter-icon.png" width="19" height="15" alt="Best of Mine" />
					</a>
					</td>
					<td align="left" valign="middle" width="30">
					<a href="#">
						<img style="display:block;" src="https://bestofmine.com/assets/images/emailer/facebook-icon.png" width="10" height="17" alt="Best of Mine" />
					</a>
					</td>
					<td align="left" valign="middle" width="30">
					<a href="#">
						<img style="display:block;" src="https://bestofmine.com/assets/images/emailer/linkedin-icon.png" width="20" height="20" alt="Best of Mine" />
					</a>
					</td>
					<td align="left" valign="middle">
					<a href="#">
						<img style="display:block;" src="https://bestofmine.com/assets/images/emailer/instagram-icon.png" width="16" height="16" alt="Best of Mine" />
					</a>
					</td>
				</tr>
				</table>
			</td>
			</tr>
			<tr>
				<td align="center" valign="top" bgcolor="#ffffff" style="color: #666666; padding: 14px 0;">
					<table width="90%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" valign="top">
						<a href="mailto:mohandas.alle@bestofmine.com?Subject=Unsubscribe" target="_blank"
							style="color: #666666; font-size: 12px; text-decoration: none;">
							Unsubscribe </a> |
						<a href="https://wa.me/?text=https://www.bestofmine.com/" target="_blank"
							style="color: #666666; font-size: 12px; text-decoration: none;">
							Refer a Friend</a>
						</td>
						<td align="left" valign="middle" style="color: #666666; font-size: 11px; text-align: right;">
						&copy; 2021 BESTOFMINE. All rights reserved.
						</td>
					</tr>
					</table>
				</td>
			</tr>			
			</table>
		 </body>
		</html>';


// send email
//$success = mail($EmailTo, $Subject, $Body, "From:".$email);
$success = mail($value, $subject, $message, $headers);
//$success = mail($userEmail, $subject, $message, $HEADERSUSER);

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