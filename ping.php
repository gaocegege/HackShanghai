<?php
$base_dir="/root/html/hack/";
$url = "pingpang.txt";
$fso=fopen($url, "w");
fwrite($fso, $_POST["url"]);
fclose($fso);
$ver = fread("ver.txt", filesize("ver.txt")) + 1;
$fnameHandler = fopen("ver.txt", "w");
fwrite($fnameHandler, $ver);
fclose($fnameHandler);
?>