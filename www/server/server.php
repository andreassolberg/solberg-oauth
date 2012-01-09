<?php

require_once('../../lib/soauth.php');

require_once('../../../../simplesamlphp-idp/lib/_autoload.php');

error_log('accessed...');

try {
	
	$as = new SimpleSAML_Auth_Simple('example-userpass');

	
	$server = new So_Server();
	$server->runInfo();
	$server->runToken();
	
	error_log('starting authentication...');
		
	$as->requireAuth();
	$attributes = $as->getAttributes();
	$uid = $attributes['uid'][0];
	
	$server->runAuthenticated($uid);
	
	throw new Exception('404 Router could not determine any known endpoint from the url.');
	
} catch(Exception $e) {
	
	error_log('Error on OAuth Provider: '  . $e->getMessage());
	echo '<pre>';
	print_r($e);
}
