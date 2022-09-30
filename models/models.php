<?php
function connection(){
	return new PDO("mysql: host=localhost;dbname=mvctest", "root", "");
}
function posts(){
	$pdo=connection();
	$posts=$pdo->query("SELECT * FROM article");
	
}

?>