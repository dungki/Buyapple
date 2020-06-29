<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('dbhelper.php');
	$sql = 'delete from product where id = '.$id;
	execute($sql);

	echo 'Deleted Product';
}