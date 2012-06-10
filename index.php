<?php
function __autoload($class_name){
	require_once 'classes/' .$class_name. '.class.php';
}
$userstory = new Userstory();
$userstory->createUserStory();
?>