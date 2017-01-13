<?php

$postedRawData = file_get_contents('php://input');

$payload = json_decode( $postedRawData , true );

$ref = $payload['ref'];

$password = 'toto';
$host_ip = file_get_contents('/src/config/host_ip');

if('refs/heads/DEV' == $ref ) {

	$cd = sprintf("ssh etouraille@%s echo '%s'|sudo -S /home/etouraille/kat --env staging", $host_ip, $password);
	exec($cd);

}
