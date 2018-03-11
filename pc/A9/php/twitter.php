<?php

// get the twitter info from Flash
$user = isset($_REQUEST["ID"]) ? $_REQUEST["ID"] : '';

if($user == "") {
	exit;
}

// get the contents of the proper xml file
$file = file_get_contents("http://twitter.com/statuses/user_timeline/" . $user  . ".xml" );

// send the xml back to Flash
echo $file;
 
?>