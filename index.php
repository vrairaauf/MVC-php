<?php
require 'controller/controller.php';
$parametre="main";
if(isset($_GET['parametre'])){
	$parametre=$_GET['parametre'];
}
if($parametre=="main"){
	main();
}elseif ($parametre=="specifie") {
	specifie();
}
?>