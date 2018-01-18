<?php
	$fname = !empty($_POST['fname']) ? $_POST['fname'] : 'Null';
    $lname = !empty($_POST['lname']) ? $_POST['lname'] : 'Null';
    $telephone = !empty($_POST['telephone']) ? $_POST['telephone'] : 'Null';
    $email = !empty($_POST['email']) ? $_POST['email'] : 'Null';
	$message = !empty($_POST['message']) ? nl2br($_POST['message']) : 'Null';
    $to = "scorppion2005@yahoo.com";	
	$from = $email;
    $subject = 'S-a completat un formular pe AndreiLazar.Net .';
    
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: ". $from. "\r\n";
    $headers .= "Reply-To: ". $from. "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "X-Priority: 1" . "\r\n"; 

    echo ($fname + " ");
    echo ($lname + " ");
    echo ($email + " ");
    
if( mail('andreimhlazar@gmail.com', $subject, $message, $headers) ){
		echo "Succes";
	} else {
		echo "Mesajul nu s-a putut trimite. Va rugam incercati mai tarziu.";
	}

?>