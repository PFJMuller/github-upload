<?php
session_start();
if (isset($_SESSION['menu'])){
	$menu = $_GET['menu'];
}
else{
	$menu = A;
}
include('modules/connect.php');

// test 

include ('modules/header.php');
include('modules/style.php');
include ('modules/menu.php');
if($menu == 'A'){
	include('modules/home.php');
	}
if($menu == 'B'){
	include('modules/recepten.php');
}
if($menu == 'C'){
	include('modules/ingredienten.php');
}
if($menu == 'D'){
	include('modules/over.php');
}
if($menu > 0){
	include('modules/content.php');
}
include('modules/footer.php');
?>