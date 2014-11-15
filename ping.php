<?php
$base_dir="/root/html/hack/";
$url = $base_dir + "pingpang.txt";
$fso=fopen($url, "w");
fwrite($fso, $_POST["context"]);
?>