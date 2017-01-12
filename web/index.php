<?php

$postedRawData = file_get_contents('php://input');

$payload = json_decode( $postedRawData , true );


$ref = $payload['ref'];

if('refs/heads/DEV' == $ref ) {

	$fp = fopen(sprintf('/src/push-time/%s',date('m-d-y.H:i:s')),'w+');
	fwrite($fp, 'push on branch dev');
	fclose($fp);

}