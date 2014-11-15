<?php
$base_dir="/root/html/hack/";
echo $_POST["name"];
$url = $base_dir + $_POST["name"];
$fso=fopen($url, "w");
fwrite($fso, $_POST["context"]);
$fnameHandler = fopen($base_dir."name.txt", "w");
fwrite($fnameHandler, $_POST["name"]);
?>