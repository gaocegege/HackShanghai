<?php
$base_dir="/root/html/hack/";
$fnameHandler = fopen($base_dir + "name.txt", "r");
$name = fgets($fnameHandler);
fclose($fnameHandler);
$url = $base_dir + $name;
if(!file_exists($url)){//判断文件是否存在
    echo "文件不存在";
    exit();
}
$file = fopen($url,"r"); // 打开文件
// 输入文件标签
Header("Content-type: application/octet-stream");
Header("Accept-Ranges: bytes");
Header("Accept-Length: ".filesize($url));
Header("Content-Disposition: attachment; filename=".$name);
echo fread($file, filesize($url));
fclose($file);
?>