<?php 
include "crud.php";

$control = new database();

$username = $control->security($_POST['username']);
$password = $control->security($_POST['password']);

//$control->result_client($control->login($username,$password));

echo $control->login($username,$password);
?>