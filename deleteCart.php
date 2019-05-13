<?php
session_start();
$cart=$_SESSION['giohang'];
$id=$_GET['idP'];
if($id == 0)
{
    unset($_SESSION['giohang']);
}
else
{
    unset($_SESSION['giohang'][$id]);
	if($_SESSION['giohang'] == null){
	unset($_SESSION['giohang']);
	}
}
header("Location: cart.php");

?>