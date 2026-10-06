<?php
//Fetching Values from URL
$uname = $_POST['uname'];
$ucontact = $_POST['ucontact'];
$uemail = $_POST['uemail'];
$message = $_POST['message'];
$email = filter_var($uemail, FILTER_SANITIZE_EMAIL);
//After sanitization Validation is performed
if (filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
$subject = "Solicitud de Cita";
// To send HTML mail, the Content-type header must be set
$fromemail='adiaz@digital-medias.mx';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $fromemail. "\r\n"; // Sender's Email
$headers .= 'Cc:' . $fromemail. "\r\n"; // Carbon copy to Sender
$template = '<div style="padding:50px; color:white;">Solicitud de Cita' . $name . ',<br/>'
. '<br/> Un Paciente solicita contactarla.<br/><br/>'
. 'Nombre:' . $uname . '<br/>'
. 'Email:' . $uemail . '<br/>'
. 'Telefono:' . $ucontact . '<br/>'
. 'Comentarios :' . $message . '<br/>'
. '<br/>'
. 'Gracias, En breve te contactaremos.</div>';
$sendmessage = "<div style=\"background-color:#7E7E7E; color:white;\">" . $template . "</div>";
// message lines should not exceed 70 characters (PHP rule), so wrap it
$sendmessage = wordwrap($sendmessage, 70);

// Send mail by PHP Mail Function
mail("dra.susanaha@gmail.com", $subject, $sendmessage, $headers);

header('location:index.php');
echo "Gracias, En breve te contactaremos.";


} else {
echo "<span>* invalid email *</span>";
}

?>