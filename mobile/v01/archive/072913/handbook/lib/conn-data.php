<?php 
function connect_db()
{
	$dbhost = 'studabroaddb.db.9467842.hostedresource.com';
	$dbuser = 'studabroaddb';
	$dbpass = 'Fingold2348';
	$dbname = 'studabroaddb';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if (!$conn) throw new Exception("cannot connect to database server.");
	if (!mysql_select_db($dbname)) throw new Exception("cannot select database.");
	return $conn;
}

function query_db($query) {
	/* Diplay Unicode Data */
	mysql_query ("set character_set_client='utf8'"); 
 	mysql_query ("set character_set_results='utf8'"); 

 	mysql_query ("set collation_connection='utf8_general_ci'");
	
	$result = mysql_query($query);
	if (!$result) throw new Exception("cannot handle query '" . $query . "' with following error " . mysql_error());
	return $result;
}

function merge_to_array($result) {
	$a = array();
	while($row = mysql_fetch_array($result))
	{
		$a[$row['property_item']] = $row['property_value'];
	}
	return $a;
}

function merge_to_array2($result) {
	$a = array();
	while($row = mysql_fetch_array($result))
	{
		$a[$row['property_item']] = $row['property_value2'];
	}
	return $a;
}

function query_all_country_table($country_name) {
	$query = "SELECT * FROM country WHERE country_id = (SELECT country_id FROM country_map WHERE country_name LIKE '" . mysql_real_escape_string($country_name) . "' LIMIT 1)";
	return merge_to_array(query_db($query));
}

function query_all_links_table($country_name) {
	$query = "SELECT * FROM links WHERE country_id = (SELECT country_id FROM country_map WHERE country_name LIKE '" . mysql_real_escape_string($country_name) . "' LIMIT 1)";
	return merge_to_array(query_db($query));
}

function query_all_resources_table($country_name) {
	$query = "SELECT * FROM resources WHERE country_id = (SELECT country_id FROM country_map WHERE country_name LIKE '" . mysql_real_escape_string($country_name) . "' LIMIT 1)";
	return merge_to_array(query_db($query));
}

function query_all_words_table($country_name) {
	$query = "SELECT * FROM words_to_know WHERE country_id = (SELECT country_id FROM country_map WHERE country_name LIKE '" . mysql_real_escape_string($country_name) . "' LIMIT 1)";
	return merge_to_array(query_db($query));
}

function query_all_phrases_table($country_name) {
	$query = "SELECT * FROM phrases_to_know WHERE country_id = (SELECT country_id FROM country_map WHERE country_name LIKE '" . mysql_real_escape_string($country_name) . "' LIMIT 1)";
	return merge_to_array(query_db($query));	
}

function query_all_images_table($country_name) {
	$query = "SELECT * FROM help_images WHERE country_id = (SELECT country_id FROM country_map WHERE country_name LIKE '" . mysql_real_escape_string($country_name) . "' LIMIT 1)";
	return merge_to_array(query_db($query));
}

function disconnect_db($conn)
{
	mysql_close($conn);
}
?>
