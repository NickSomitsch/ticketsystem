<?php
	
session_start();
require('dbConnect.php');
if(isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];
   }

if(isset($_POST['was'])) {
    if($_POST['was'] == 'plätze_buchen') {
        $vorname = $mysqli->real_escape_string($_POST['vorname']);
        $nachname = $mysqli->real_escape_string($_POST['nachname']);
		$straße = $mysqli->real_escape_string($_POST['straße']);
		$nr = $mysqli->real_escape_string($_POST['nr']);
		$plz = $mysqli->real_escape_string($_POST['plz']);
		$ort = $mysqli->real_escape_string($_POST['ort']);
		$email = $mysqli->real_escape_string($_POST['email']);
        $ticket_anzahl = $mysqli->real_escape_string($_POST['ticket_anzahl']);
        $mysqli->query("INSERT INTO zuschauer (vorname, nachname, ticket_anzahl, straße, nr, plz, ort, email) VALUES ('$vorname', '$nachname', '$ticket_anzahl', '$straße', '$nr', '$plz', '$ort', '$email')");
    } 
}
	 define('FILENAME',basename(__FILE__));
	//include('index.php');


	//<div id="content">
	// <div class="infotext"> 
	
	if(isset($_POST['email'])) {


	   // EDIT THE 2 LINES BELOW AS REQUIRED

	   $email_to = "email_vom_benutzer_hier_einfpgen@googlemail_web_gmx.de";
	   $email_subject = "Titel Der Email";

	   // validation expected data exists

       $absender = "nicksomitsch@gmail.com";
	   $email_from = $absender;  // eigentlich war hier $_POST['absender']; // required
	   $vorname = $_POST['vorname']; // not required
	   $nachname = $_POST['nachname']; // not required
	   $emailip = $_SERVER['REMOTE_ADDR'];
	   $emailtext = "Danke für Ihre Sitzplatzreservierung";


	   $error_message = "";

	   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	   if(!preg_match($email_exp, $email_from) || // eigentlich statt absender email_from o. absender
	      !isset($email_from)) { // eigentlich !isset($_POST['absender'])) {
	     echo "<h1> Es ist ein Fehler beim Versenden der E-Mail aufgetreten </h1>";
	     echo "Sie haben wahrscheinlich eine ungültige Emailadresse angegeben.<br />";
	     echo "Bitte überprüfen Sie Ihre E-Mailadresse und senden Sie die Mail nocheinmal.<br />";
		 echo '<a href="index.php">Hier gehts zurück zur Homepage</a>';
	     die();
	   }

	   $email_message = "Die folgende E-Mail wurde von haus-maertens.de versendet:\n\n";

	   function clean_string($string) {
	     $bad = array("content-type","bcc:","to:","cc:","href");
	     return str_replace($bad,"",$string);
	   }

	   $email_message .= "Name: ".clean_string($vorname)." ".clean_string($nachname)."\n";
	   $email_message .= "Email: ".clean_string($email)."\n";
	   $email_message .= "IP: ".clean_string($emailip)."\n";
	   $email_message .= "Text: ".clean_string($emailtext)."\n";

	   // create email headers
	   $headers = 'From: '.$email_from."\r\n". 
	   'Reply-To: '.$email_from."\r\n" . 
	   'Content-type: text/plain; charset=UTF-8'."\r\n" .
	   'X-Mailer: PHP/' . phpversion();
	   $mailstatus = mail($email_to, $email_subject, $email_message, $headers);
	   if ($mailstatus) {
	       echo "<h1> E-Mail wurde erfolgreich versendet </h1>";
	       echo "<p> Inhalt der Email: </p>";
	       echo nl2br(htmlspecialchars($email_message));
	   } else {
	       echo "<h1> Es ist ein unbekannter Fehler beim Versenden der E-Mail aufgetreten </h1>";
	   }
	}
	
	
	//</div>
	//</div> 

	// <div class="feedback">Danke für Ihre Sitzplatz reservierung. Sie sollten in kürze eine reservierungs bestätigung per E-mail erhalten.</div>  

   /* include('PHPMailer-master/composer.json');
	include('PHPMailer-master/src/PHPMailer.php');
	include('PHPMailer-master/src/Exception.php');
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	//Create a new PHPMailer instance
	$mail = new PHPMailer(true);
	
	// Set PHPMailer to use the sendmail transport
	$mail->isSendmail();
	//Set who the message is to be sent from
	$mail->setFrom('nicksomitsch@gmail.com', 'First Last');
	//Set an alternative reply-to address
	$mail->addReplyTo('nicksomitsch@gmail.com', 'First Last');
	//Set who the message is to be sent to
	$mail->addAddress('nick@somitsch.de', 'John Doe');
	//Set the subject line
	$mail->Subject = 'PHPMailer sendmail test';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	// $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
	//Replace the plain text body with one created manually
	$mail->AltBody = 'ThHEY';

	//send the message, check for errors
	if (!$mail->send()) {
	    echo 'Mailer Error: '. $mail->ErrorInfo;
	} else {
	    echo 'Message sent!';
	} */
	  
	  
	  
	// } 

echo '<a href="index.php">Hier gehts zurück zur Homepage</a>';	

?>