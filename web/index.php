<?php

$postedRawData = file_get_contents('php://input');

$payload = json_decode( $postedRawData , false);

$ref = $paylod['ref'];

if('refs/head/DEV' == $ref ) {

	$fp = fopen(sprintf('/src/push-time/%s',date('m-d-y H:i:s')),'w+');
	fwrite($fp, 'push on branch dev');
	fclose($fp);

}