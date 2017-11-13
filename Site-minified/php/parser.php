<?php
include_once('db.php');
// Sanitize post vars
$fname=mysqli_real_escape_string($con, $_POST['fname1']);
$fnameclean = filter_var($fname, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$lname=mysqli_real_escape_string($con, $_POST['lname1']);
$lnameclean = filter_var($lname, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$email=mysqli_real_escape_string($con, $_POST['email1']);
$emailclean = filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
$message=mysqli_real_escape_string($con, $_POST['message11']);
$messageclean = filter_var($message1, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
// Insert into DB
mysqli_query($con, "INSERT INTO contact('First', 'Last', 'Mail', 'Message') VALUES ('$fnameclean', '$lnameclean', '$emailclean', '$messageclean')");
// Headers
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
$headers = 'From: <andreimhlazar@gmail.com>' . "\r\n";
// Mail Details
$to = "andreimhlazar@gmail.com";	
$from = $email;
$subject = 'Ati completat o cerere pe AndreiLazar.net .';
$messagemail = nl2br($_POST['message']);
// Send
mail($to, $subject, $messagemail, $headers);
$con->close();
?>