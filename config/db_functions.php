<?php
#Function to connect to the hungama database (make a connection) ends: local
function db_connect()
{			
          global $DBHOST;
		  global $DBUSER;
          global $DBPASS;
		  global $DBNAME;

		  $link = mysqli_connect($DBHOST, $DBUSER, $DBPASS);
			
			if (!$link)
			  {
				die('Could not connect: ' . mysqli_error());
			  }

			$db_link=mysqli_select_db($link, $DBNAME);
				if(!$db_link)
				{
					die('Could not select database: ' . mysqli_error());
				}
          return $link;
 }

 #Function to parse through a query starts:
function query($query,$connection)
	{
		$result = mysqli_query($connection, $query);
		if (!$result)
		{
			//echo "Parse error in query $query<br> Connection is $connection<br>";
			exit;
		}		
		return $result;
	}
#Function to parse through a query ends:

#Function to fetch each row after executing query starts:
function fetch_row($result)
	{
		$num=mysqli_fetch_row($result);
		return $num;
	}
#Function to fetch each row after executing query ends:

#Function to fetch records in an array after executing query starts:
function fetch_array($result)
	{
		$somearray=mysqli_fetch_array($result, MYSQL_BOTH);
		return $somearray;
	}
#Function to fetch records in an array after executing query ends:


#Function to fetch number of records executing query starts:
function num_rows($result)
	{
	 /*
		Note .. One has to do a "$result = query($query,$connection)"
		immediately after executing this function
		becoz this function does not just fetchthe no of rows
	*/
		$numrows = mysqli_num_rows($result);
		return $numrows;
	}
#Function to fetch number of records executing query ends:



#Function to fetch ID from the above insert query starts:
function fetch_id(){
	return mysqli_insert_id();
}
#Function to fetch ID from the above insert query ends:


#Function to disconnect a database connection starts:
function db_disconnect($myconnection)
	{
		mysqli_close($myconnection);
		return 1;
	}
#Function to disconnect a database connection ends:

?>
