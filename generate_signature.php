<?php

#var_dump($_POST);
#die();
//Set the Content Type
header('Content-type: image/jpeg');

// Create Image From Existing File
$jpg_image = imagecreatefromjpeg('images/baseline_image.jpg');

// Allocate A Color For The Text
$black = imagecolorallocate($jpg_image, 0, 0, 0);

// Set Path to Font File
$font_path = 'fonts/Helvetica.ttf';

// Set Text to Be Printed On Image
$fullname = $_POST["firstName-input"] . " " . $_POST["lastName-input"];
$jobtitle = $_POST["jobTitle-input"];
$website = "www.naturalwayofliving.com";
$email = $_POST["emailAddress-input"] . "@naturalwayofliving.com";
$mobilephone = $_POST["mobilePhone-input"];

//Pre-process data before printing to image
if (strlen(trim($_POST['officePhone-input'])) > 0)  {
    $officephone = $_POST["officePhone-input"];
    $phonenumbers = $mobilephone . " | " .  $officephone;
}else{
    $phonenumbers = $mobilephone;
}
if (strlen(trim($_POST['department-input'])) > 0) {
    $department = $_POST["department-input"]." | ";
    $organisation = "$department" ."Natural Way Of Living";
}else{
    $organisation = "Natural Way Of Living";
}

// Print Name on Image
imagettftext($jpg_image, 15, 0, 202, 40, $black, $font_path, $fullname);

// Print JobTitle on Image
imagettftext($jpg_image, 11, 0, 202, 62, $black, $font_path, $jobtitle);

// Print Organisation + Department name on Image
imagettftext($jpg_image, 11, 0, 202, 84, $black, $font_path, $organisation);

// Print Office phone + Mobile phone on Image
imagettftext($jpg_image, 10, 0, 227, 153, $black, $font_path, $phonenumbers);

// Print Office phone + Mobile phone on Image
imagettftext($jpg_image, 10, 0, 227, 175, $black, $font_path, $email);

// Print Company Website on Image
imagettftext($jpg_image, 10, 0, 227, 199, $black, $font_path, $website);

// Send Image to Browser
imagejpeg($jpg_image);

// Clear Memory
imagedestroy($jpg_image);
?>

