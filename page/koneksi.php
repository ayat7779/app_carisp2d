<?php
$MSSQLSERVER 	= "xxxxxxxxxxxxxxxxxxxx";
$MSSQLDB 		= "xxxxxxxxxxxxxxxxx";
$MSSQLUSER 		= "xxxxxxxxxx";
$MSSQLPASSW 	= "xxxxxxxxxxxxxxx";
$connectionoptions = array("Database" => $MSSQLDB, "UID" => $MSSQLUSER, "PWD" => $MSSQLPASSW, "MultipleActiveResultSets" => '1');
$conn = sqlsrv_connect($MSSQLSERVER, $connectionoptions);
