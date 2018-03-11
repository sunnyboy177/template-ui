<?php

error_reporting(0);
set_time_limit(90);

// building the headers
$emailTo = $_POST['theTo'];
$emailFrom = $_POST['theFrom'];
$name = $_POST['theName'];
$subject = $_POST['theSubject'];
$greeting = $_POST['theGreeting'] . "\n\n";

// send from email field Boolean
$ef = $_POST['ee'];
$eff = (int)$ef;

if($eff != 999) {
	$sendFromE = true;
}
else {
	$sendFromE = false;
}

// push the field titles into an Array
$str = $_POST['tt'];
$arr = explode("r7yi2s", $str);

// push the submitted data into an Array
$st = $_POST['ff'];
$ar = explode("z85c64", $st);
$counter = count($ar);

$details .= $greeting;

// loop through and build the email body
for($i = 0; $i < $counter; $i++) {
	if($i != 0) {
	
		$details .= $arr[$i] . " = " . $ar[$i] . "\n";
		
		if($sendFromE) {
			if($eff == $i) {
				$emailFrom = $ar[$i];
				$sendFromE = false;
			}
		}
		
	}
}

// build the headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: " . $emailFrom . " <" . $name . "> \n";
$headers .= "Reply-To: " . $emailFrom . "\n\n";
	
mail($emailTo, $subject, $details, $headers);

?>