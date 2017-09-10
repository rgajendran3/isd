<?php

if(isset($_GET['product']))
{
	header('location:../myaccount.php?product=add');
}

if(isset($_GET['useradd']))
{
	header('location:../myaccount.php?useradd=add');
}

if(isset($_GET['userid']))
{
	$id = $_GET['userid'];
	header('location:../myaccount.php?useramend=a&&userid='.$id);
}

if(isset($_GET['newsletter']))
{
	header('location:../myaccount.php?newsletter');
}

?>
