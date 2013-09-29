<?php
#定義要下載的檔案
$target = "http://www.WebbotsSpidersScreenScrapers.com/hello_world.html";
$file_handle = fopen($target,"r");

#取得檔案
while(!feof($file_handle))
	echo fgets($file_handle,4096);
fclose($file_handle);
?>