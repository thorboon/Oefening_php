<?php

	 $DB_host = "localhost";
	 $DB_user = "root";
	 $DB_pass = "root";
	 $DB_name = "blog";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLiconn->connect_errno)
     {
         die("ERROR : -> ".$MySQLiconn->connect_error);
     }

?>