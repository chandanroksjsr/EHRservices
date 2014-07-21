<?php
 $host = "localhost";
 $DB_usr_name = "root";
 $DB_usr_pswd = "root";
 $DB_name = "ehr";
$con = mysql_connect($host,$DB_usr_name,$DB_usr_pswd) or die ("Error connecting to database");;
mysql_select_db($DB_name);
?>