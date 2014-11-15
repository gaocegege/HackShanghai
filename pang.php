<?php
$base_dir="/root/html/hack/";
$buf = fread("pingpang.txt", filesize("pingpang.txt"));
echo $buf;
?>