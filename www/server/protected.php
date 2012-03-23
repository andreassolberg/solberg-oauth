<?php

/*
 * This file is part of Solberg-OAuth
 * Read more here: https://github.com/andreassolberg/solberg-oauth
 */


// Specify domains from which requests are allowed
header('Access-Control-Allow-Origin: *');

// Specify which request methods are allowed
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

// Additional headers which may be sent along with the CORS request
// The X-Requested-With header allows jQuery requests to go through
header('Access-Control-Allow-Headers: X-Requested-With, Authorization');

// Set the age to 1 day to improve speed/caching.
header('Access-Control-Max-Age: 86400');

// Exit early so the page isn't fully loaded for options requests
if (strtolower($_SERVER['REQUEST_METHOD']) == 'options') {
    exit();
}

// Load the OAuth library
require_once('../../lib/soauth.php');




try {


	$server = new So_Server();
	$token = $server->checkToken();

//	print_r($token);

	if ($token->userid !== 'test') throw new Exception('Youre not authorized to access this information.');

	header('Content-Type: application/json');
	echo json_encode(array('poot' => '1', 'userid' => $token->userid));


} catch(Exception $e) {

	error_log('Error on OAuth Provider: '  . $e->getMessage());
	echo '<pre>';
	print_r($e);
	echo '</pre>';
}




