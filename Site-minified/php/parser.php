<?php
if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['message']) ){
	$fname = $_POST['fname']; // HINT: use preg_replace() to filter the data
    $lname = $_POST['lname'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
	$message = nl2br($_POST['message']);
	$to = "scorppion2005@yahoo.com";	
	$from = $email;
    $subject = 'S-a completat un formular pe AndreiLazar.Net .';
	$message = '<b>fname:</b> '.$fname.' '.$lname.' <br><b>Mail:</b> '.$email.' <br><b>Tipul firmei:</b> '.$tipfirma.' <p><b>Comentarii: </b>'.$comentarii.'</p>';
  
    $message = '<html><body>';
    $message .= '<img src="http://milie37.000webhostapp.com/img/MihaelaIlieLogoMic.jpg" alt="Mihaela Ilie" />';
    $message .= '<table rules="all" style="border: solid 3px #253340; border-radius: 2px; border-spacing: 0;" cellpadding="10">';
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>fname:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$fname." ".$lname."</td></tr>";
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Numar de telefon:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$nrtel."</td></tr>";
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Mail:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$email."</td></tr>";
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Tipul de firma:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$tipfirma."</td></tr>";
    $message .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Comentarii:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$comentarii."</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $messagemail, $headers) ){
		echo "Succes";
	} else {
		echo "Mesajul nu s-a putut trimite. Va rugam incercati mai tarziu.";
	}
}
?>