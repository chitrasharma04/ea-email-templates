<?php

$lawyer_name = "Chitra Sharma";
$otp = "123456";

$emailTemplate = file_get_contents('index.html');
$emailTemplate = str_replace('{{lawyer_name}}', $lawyer_name, $emailTemplate);
$emailTemplate = str_replace('{{otp}}', $otp, $emailTemplate);
echo $emailTemplate;


?>