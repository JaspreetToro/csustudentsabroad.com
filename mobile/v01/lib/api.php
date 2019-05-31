<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
	$dbhost = 'h50mysql179.secureserver.net'; //'h50mysql191.secureserver.net';
	$dbuser = 'studyusorgdb'; //'studyus';
	$dbpass = 'Fingold2348';
	$dbname = 'studyusorgdb';
	
	mysql_select_db($dbname);

  $databaseName = "ajax01";
  $tableName = "variables";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  include 'DB.php';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass) or exit('Cannot connect to the server');
  $dbs = mysql_select_db($dbname, $conn);

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $result = mysql_query("SELECT * FROM $tableName");          //query
  $array = mysql_fetch_row($result);                          //fetch result    

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  echo json_encode($array);

?>