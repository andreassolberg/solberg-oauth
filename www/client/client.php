<?php

/*
 * This file is part of Solberg-OAuth
 * Read more here: https://github.com/andreassolberg/solberg-oauth
 */


// Load the OAuth library
require_once('../../lib/soauth.php');

try {
	$client = new So_Client();
	
	$token = $client->getToken('test1', 'andreas');
	
	// echo '<pre>Token from (test1, andreas):';
	// print_r($token);
	// echo '</pre>';
	// exit;
	
	
	
	$data = $client->getHTTP('test1', 'andreas', null, 'http://bridge.uninett.no/solberg-oauth/www/server/protected.php');
	
	echo '<p>Got data: <pre>';
	print_r(json_decode($data, true));
	echo '</pre>';
	
	
} catch(Exception $e) {
	
	// For now, just dump the error on the user.
	echo '<pre>';
	print_r($e);
	echo '</pre>';
}

