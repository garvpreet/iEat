<?php
session_start();
$pizza_id = $_SESSION['pizza_id'];

$_SESSION['topping_string'][$pizza_id] = "";

if(isset($_POST['topping'])){

	// store toppings to session along with pizza product id 
	$_SESSION['topping_string'][$pizza_id] = $_POST['topping'];	

	//$ajaxResponse = $_POST['topping'];
	$ajaxResponse = $pizza_id.": ".$_SESSION['topping_string'][$pizza_id];

	echo $ajaxResponse." has been added as toppings";
}
else{
	// do nothing 
}
?>