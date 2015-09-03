<?php
header('Content-type: plain/text');
$countFile="notify.db";
$handle=fopen($countFile,'r+');
$data=fread($handle,512) ;
$count=$data+1;
fseek($handle,0);
fwrite($handle,$count);
fclose($handle);
$file = file_get_contents("notify.db");
die("Currently " . $file . " has installed the Foo Control Panel.\nThank you!");
?>
