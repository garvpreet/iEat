<?php
session_start();

if(isset($_POST['mashroom']) && $_POST['mashroom']=='add_mashroom'){
	$_SESSION ['mashroom']= 'mashroom';
	echo $_SESSION['mashroom']." added as topping";
}elseif(isset($_POST['mashroom']) && $_POST['mashroom']=='remove_mashroom'){
	echo "Mashroom removed from toppings";
	$_SESSION['mashroom'] = '';
}

if(isset($_POST['tomato']) && $_POST['tomato']=='add_tomato'){
	$_SESSION ['tomato']= 'tomato';
	echo $_SESSION['tomato']." added as topping";
}elseif(isset($_POST['tomato']) && $_POST['tomato']=='remove_tomato'){
	echo "Tomato removed from toppings";
	$_SESSION['tomato'] = '';
}

?>