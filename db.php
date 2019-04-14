<?php
error_reporting(0);
$db = new mysqli('localhost', 'root', '', 'my-website');
if($db->connect_errno){
	die('Sorry Database not connected !!!');
}
?>