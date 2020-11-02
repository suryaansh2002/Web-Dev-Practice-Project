<?php

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'Suryaansh', 'perfectcup');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message= mysqli_real_escape_string($mysqli, $_POST['message']);

$email2 = "suryaansh28@gmail.com";
$subject = "Test Message";

if (strlen($fname) > 50) {
    echo 'fname_long';

} elseif (strlen($fname) < 2) {
    echo 'fname_short';

} elseif (strlen($email) > 50) {
    echo 'email_long';

} elseif (strlen($email) < 2) {
    echo 'email_short';

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';

} elseif (strlen($message) > 500) {
    echo 'message_long';

} elseif (strlen($message) < 3) {
    echo 'message_short';

} else {

	require 'phpmailer/PHPMailerAutoload.php';
	
	$mail= new PHPMailer;
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Post=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='suryaansh28@gmail.com';
	$mail->Password='soumyaar';

	$mail->setFrom($email,$fname);
	$mail->addAddress('suryaansh28@gmail.com');
	$mail->addReplyTo($email);

	$mail->isHTML(true);
	$mail->Subject="Contact Form Message- " . $fname;
	$mail->Body=$message;

	if(!$mail->send()){

		echo "Mail could not be sent!";
		echo "Mailer Error: " . $mail->ErrorInfo;
		
	}else{
		echo 'true';
	}

}
?>