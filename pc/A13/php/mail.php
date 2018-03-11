
<?php

$your_name = $_REQUEST['nametxt'];
$email = $_REQUEST['emailtxt'];
$message = $_REQUEST['messagetxt'];


$recipient_email = "YOUR EMAIL HERE";
$donotreply_email = "DoNotReply@YOURWEBSITE.com";
$me = "YOURWEBSITE.com";
$me = "YOURWEBSITE.com";

$subject = "YOURWEBSITE.com message from " . $email;
//$headers = "From: " . $your_name . " <" . $email . ">\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1';

$content = "<html><head><title>Contact letter</title></head><body><br>";
$content .= "Name: <b>" . $your_name . "</b><br>";
$content .= "Email: <b>" . $email . "</b><br><hr><br>";
$content .= "Message: <b>" . $message . "</b><br>";
$content .= "<br></body></html>";




$forwardingthemessage = "$me

Has received the below message:

--------------------------------------------------
Name: $your_name
Email: $email

.........Message.........

$message

--------------------------------------------------


end of message";






$replymessage = "Hi $your_name

Thank you for your email.

We will follow up shortly.

Please DO NOT reply to this email.

Below is a copy of the message you submitted:
--------------------------------------------------
Name: $your_name
Email: $email
$message
--------------------------------------------------

Best regards
YOURWEBSITE.com";






mail("$recipient_email",
     "$subject",
     "$forwardingthemessage",
     "From: $email\nReply-To: $email");


mail("$email",
     "Receipt from $me",
     "$replymessage",
     "From: $donotreply_email\nReply-To: $donotreply_email");






?>
<html>
<body bgcolor="#000000">
<div align="center" style="margin-top:60px;color:#FFFFFF;font-size:11px;font-family:Tahoma;font-weight:bold">

Your message was sent. Thank you.

<BR><BR><BR>

<a href="javascript:history.back()"> <font color="FFFFFF"><---- Go Back</font> </a>

</div>
</body>
</html>
<!-- uncomment to resize the page -->	
<!-- <script>resizeTo(500, 500)</script> -->
