<?php

$postedRawData = file_get_contents('php://input');

$payload = json_decode( $postedRawData , true );

$ref = $payload['ref'];

$password = file_exist('/src/config/password')?file_get_contents('/src/config/password'):'anonymous';
// to deaseaper : the deploy script shouldn't be launch in sudo
$host_ip = file_get_contents('/src/config/host_ip');


if('refs/heads/DEV' == $ref ) {

	$cd = sprintf("ssh etouraille@%s echo '%s'|sudo -S /home/etouraille/kat --env staging > /var/log/install.log", $host_ip, $password );
	exec($cd);

}
