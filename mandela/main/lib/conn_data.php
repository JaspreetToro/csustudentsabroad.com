<?php 
	


function connectDatabase()
{
	$dbhost = 'studyusdb.db.9467842.hostedresource.com';
	$dbuser = 'studyusdb';
	$dbpass = 'Fingold2348';
	$dbname = 'studyusdb';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or exit('Cannot connect to the server');
	mysql_select_db($dbname);
	return $conn;
}

function queryDatabase($query)
{
   if(!($r=@mysql_query($query))) 
   {
        if(error_reporting()>0) 
		{
	    	echo "<hr>SQL error (".substr(mysql_error(),0,2048).")<br>in (<pre>".substr($query,0,2048)."</pre>) <hr>";
		}
		$r='error';
   }

    return $r;
   
}

  function getrowsDatabase($query)
  {
   
	$rows = mysql_num_rows($query);
    return $rows;
  }

  function fetchDatabase($query)
  {
    $row = mysql_fetch_array($query, MYSQL_BOTH);
    return $row;
  }

  function disconnectDatabase($database)
  {
    mysql_close($database);
  }


?>