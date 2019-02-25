<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$class = new Hcode\DB\Sql();

	$result = $class->select("SELECT *FROM tb_users");
	echo json_encode($result);
});

$app->run();

 ?>