<?php 


require_once "../app/core.php";
$Controller = new Controller();
$Controller->checkUserLoggedIn();

$userData = $Controller->find("id",$_SESSION['loggedIn_ID']);
if (!$userData) {
	$Controller->redirect("./");
}
$user_token =  $_SESSION['token'];
if (!$Controller->checkDuplicateLoggedIn($userData->email,$user_token)) {
	session_destroy();
    $Controller->redirect("./");
}