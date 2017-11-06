<?php
if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['telephone']) && isset($_POST['email']) &&  isset($_POST['message']) ){
	$f = $_POST['fname']; // HINT: use preg_replace() to filter the data
    $l = $_POST['lname'];
    $tel = $_POST['telephone'];
    $email = $_POST['email'];
	$message = nl2br($_POST['message']);
	$to = "scorppion2005@yahoo.com";	
	$from = $email;
	$subject = 'Ati completat o cerere pe AndreiLazar.net .';
	$message = '<b>Name:</b> '.$f.' '.$l.' <br><b>Mail:</b> '.$email.' <br><b>Telephone:</b> '.$tel.' <p><b>Message </b>'.$message.'</p>';
  
    $send = '<html><body>';
    $send .= '<img src="http://milie37.000webhostapp.com/img/MihaelaIlieLogoMic.jpg" alt="Mihaela Ilie" />';
    $send .= '<table rules="all" style="border: solid 3px #253340; border-radius: 2px; border-spacing: 0;" cellpadding="10">';
    $send .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Nume:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$f." ".$l."</td></tr>";
    $send .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Numar de telefon:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$tel."</td></tr>";
    $send .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Mail:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$email."</td></tr>";
    $send .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Tipul de firma:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$tipfirma."</td></tr>";
    $send .= "<tr><td  style='background: #E5E5E5; color: #081727; padding: 2px;'><strong>Comentarii:</strong> </td><td style='background: #081727; color: #E5E5E5; padding: 2px;'>".$comentarii."</td></tr>";
    $send .= "</table>";
    $send .= "</body></html>";
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $send, $headers)){
		echo "Succes.";
	} else {
		echo "Mesajul nu s-a putut trimite. Va rugam incercati mai tarziu.";
	}
}
?>