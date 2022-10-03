<?php


// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'courier_db';
$dsn = "mysql:host=$dbHost;dbname=$dbName";
$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) ;
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'root', '', 'courier_db');
$mysqli->select_db($dbName);
if ($result = $mysqli->query("SELECT DATABASE()")) {
  // success
} else {
  // error
}
function dbQuery($sql)
{
	global $dbConn;
	$result = mysqli_query($dbConn, "SELECT DATABASE()");
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	
	return mysqli_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType ) {
	return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysqli_free_result($result);
}

function dbNumRows($result)
{
	return mysqli_num_rows($result);
}

// function dbSelect($dbName)
// {
// 	return mysqli_select_db($dbName);
// }

function dbInsertId($result)
{
	return mysqli_insert_id($result);
}
?>