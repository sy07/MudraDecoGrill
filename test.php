function sendmail($to,$subject,$message,$name)
{

define('SMTP_HOST','relay-hosting.secureserver.net');
define('SMTP_PORT',587);
define('SMTP_AUTH',true);

 

$mail = new PHPMailer();

$mail->IsSMTP();
$mail -> SMTPDebug = 1;
$mail->Host = "smtpout.secureserver.net";
$mail->SMTPAuth = SMTP_AUTH;
$mail->Port = 80;
$mail->Username = "askus@mudradecogrill.com";
$mail->Password = "Yash@251198";
//$mail->SMTPSecure = 'ssl';
$mail->SetFrom('askus@mudradecogrill.com', 'Cagney');
$mail->AddReplyTo("askus@mudradecogrill.com","Cagney");
$mail->Subject = $subject;
$body = $message;
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $name);
if(!$mail->Send()) {
return 0;
} else {
return 1;
}