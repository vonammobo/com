<?php
if($_SERVER['HTTP_REFERER'])
{
$random = rand(0, 3);
$aff_array = array("http://www.RANDOMSITE1.COM",
                  "http://RANDOMSITE2.COM",
                  "http://RANDOMSITE3.COM");
header('Location: $aff_array[$random]');
exit();
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
