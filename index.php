	<?php
	//Token de Facebook
	$token = 'EAAY71tTtpL8BOz709i3nZBxskEcr2re3FzULCJhWxjsrSHZBF1HOZAUpiGUhDQTIKUKc0CFZAlMwbZCyuXA0u545Y6qr94oSuzutSOQ8nzv6hqdS21FRxKSOgPcD8CJKe5GpAcCDlLvZCSFVkZBy9FKVGfZBClw5sHJ5ZAMfjiYx3mVKR269JzwKuYYRqpyyHFZAWh9rZArRlq7sZBcpkMDW2lQo';

	$telefono = '593984762551';

	$url = 'https://graph.facebook.com/v17.0/144623482070094/messages';

	//Configuracion del mensaje
	$mensaje = ''
			. '{'
			. '"messaging_product": "whatsapp",'
			. '"to": "'.$telefono.'",'
			. '"type": "template",'
			. '"template": '
			. '{'
			. '     "name": "hello_world",'
			. '     "language":{ "code": "en_US" } '
			. '}'
			. '}';


	//Cabeceras
	$header = array("Authorization: Bearer " .$token, "Content-Type: application/json",);

	//curl
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


	$response = json_decode(curl_exec($curl), true);

	print_r($response);

	$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

	curl_close($curl);

	?>