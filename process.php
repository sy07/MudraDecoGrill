<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$to = "dharam42764@gmail.com";
$subject = "Inquiry from Website";

$name=$_POST['name'];
$mob=$_POST['mob'];
$person= $name . " " . $mob;
$mail= "askus@mudradecogrill.com";
$info=$_POST['details'];


mail($to,$subject, $person, $info);

echo "Inquiry has been sent! Thank you $name";

?>