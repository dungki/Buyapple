<?php
require_once ('config.php');

function execute($sql) {

	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	
	mysqli_query($con, $sql);

	mysqli_close($con);

}

function execute_result($sql) {

	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

	$resultset  = mysqli_query($con, $sql);
	$resultList = [];
	while ($row = mysqli_fetch_array($resultset, 1)) {
		$resultList[] = $row;
	}

	
	mysqli_close($con);

	return $resultList;
}