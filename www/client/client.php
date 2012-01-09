<?php


require_once('./soauthlib.php');

try {
	$client = new So_Client();
	
	
	$client->run();
	
	

	
	// ->asQS());
	
} catch(Exception $e) {
	echo '<pre>';
	print_r($e);
}


/*

db.providers.insert({"provider_id": "test1","client_credentials": {"client_id": "test","client_secret" : "secret123"},"authorization" : "http://bridge.uninett.no/mongo/server.php/authorization","token" : "http://bridge.uninett.no/mongo/server.php/token"});


*/