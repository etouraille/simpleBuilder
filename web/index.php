<?php

$postedRawData = file_get_contents('php://input');

$payload = json_decode( $postedRawData , true );


$ref = $payload['ref'];

if('refs/head/DEV' == $ref ) {

	var_dump(is_dir('/src/push-time'));

	$fp = fopen(sprintf('/src/push-time/%s',date('m-d-y.H:i:s')),'w+');
	fwrite($fp, 'push on branch dev');
	fclose($fp);

}