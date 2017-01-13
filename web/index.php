<?php

$postedRawData = file_get_contents('php://input');

$payload = json_decode( $postedRawData , true );

$ref = $payload['ref'];

$host = file_get_contents('/src/config/host_ip');
$host = trim(preg_replace('/\s\s+/', ' ', $host));

if('refs/heads/DEV' == $ref ) {

	$cd = sprintf("setsid ssh etouraille@%s '/home/etouraille/kat --env staging --from-exec true > /var/log/install.log' >/dev/null 2>&1 < /dev/null &", $host, $password );
	exec($cd);

}