<?php
$base_dir="/root/html/hack/";
$buf = fread($base_dir + "pingpang.txt", filesize($base_dir + "pingpang.txt"));
echo $buf;
?>