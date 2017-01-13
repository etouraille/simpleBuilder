<?php

$postedRawData = file_get_contents('php://input');

$payload = json_decode( $postedRawData , true );

$ref = $payload['ref'];

$host_ip = file_get_contents('/src/config/host_ip');

if('refs/heads/DEV' == $ref ) {

	$cd = sprintf("ssh etouraille@%s /home/etouraille/kat --env staging --sudoer true > /var/log/install.log", $host_ip, $password );
	exec($cd);

}
