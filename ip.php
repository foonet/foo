<?php
header('Content-type: plain/text');

if ( array_key_exists('addr', $_GET) )
    $ip = $_GET['addr'];
else
    $ip = $_SERVER['REMOTE_ADDR'];

$v6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $ip);
$v4 = preg_match("/^([0-9]{1,3}\.){3}[0-9]{1,3}$/", $ip);

if ( $v6 != 0 )
    $type = "IPv6";
elseif ( $v4 != 0 )
    $type = "IPv4";
else
    $type = "unknown";

//echo json_encode(array("ip" => $ip, "type" => $type));
echo "$ip";
?>
