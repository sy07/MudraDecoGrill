
<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["mobile"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$to = "soniyash0007@gmail.com";
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = "From: _mainaccount@mudradecogrill.com"; // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail($to, $from, $name, $mobile, $email, $subject, $message);
echo '<script>alert("Your mail has been sent successfuly!")</script>';
header("Location: http://www.mudradecogrill.com/");
}
}
}
?>
