<?php
error_reporting(0);
session_start();
$_SESSION['rdo'] = 'KO';
	define("RECAPTCHA_V3_SECRET_KEY", '6Ld9GhkaAAAAAB5DZsNAzwc1mYeaxubxJiRDdHtb');
	$name = clearData($_REQUEST["name2"]);
	$mail = clearData($_REQUEST["email2"]);
	$phone = clearData($_REQUEST["phone2"]);
	$msg = clearData($_REQUEST["message2"]);

	if (isset($_REQUEST["email2"]) && $_REQUEST["email2"]) {
	    $name = clearData($_REQUEST["name2"]);
		$mail = clearData($_REQUEST["email2"]);
		$phone = clearData($_REQUEST["phone2"]);
		$msg = clearData($_REQUEST["message2"]);
	} else {
	    // set error message and redirect back to form...
	    header('location: /contactar-agencia-marketing-vigo');
	    exit;
	}

	$token = $_REQUEST['token'];
	$action = $_REQUEST['action'];

	// call curl to POST request
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	$arrResponse = json_decode($response, true);
//echo $action;
	// verify the response
	if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
	    // valid submission
	    // go ahead and do necessary stuff
//echo "<br />Bien";

	    //$to = "programacion@absolutebrandingcompany.com";
		$to = "info@absolutebrandingcompany.com";
		$mail_subject = "Nuevo correo de AbsoluteBrandingCompany";

		$msg_mail = "Nombre: " . $name . "\n" . "\n";
		$msg_mail .= "Correo electronico: " . $mail . "\n" . "\n";
		if ($phone) {
			$msg_mail .= "Telefono: " . $phone . "\n" . "\n";
		}else{
			$msg_mail .= "Telefono: Sin teléfono.\n" . "\n";
		}
		$msg_mail .= "Mensaje:\n" . $msg . "\n" . "\n";

		$headers = 'From: '.$mail."\r\n".
					'Reply-To: '.$mail."\r\n" .
					'X-Mailer: PHP/' . phpversion();
//echo $msg_mail;
					//DESCOMENTAR PARA ENVIAR LOS MAILS
		@mail($to, $mail_subject, $msg_mail, $headers);

		$_SESSION['rdo'] = 'OK';
		header("Location: contactar-agencia-marketing-vigo#resultado");
	} else {
	    // spam submission
	    // show error message
//echo "<br />Mal";
		header("Location:contactar-agencia-marketing-vigo#resultado");
	};

	function clearData($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$name = "";
	$mail = "";
	$phone = "";
	$msg = "";
?>