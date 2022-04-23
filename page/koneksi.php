<?php
$MSSQLSERVER 	= "dbserver.bpkad.lan\sipkd";
$MSSQLDB 		= "V@LID49V6_2022";
$MSSQLUSER 		= "sa";
$MSSQLPASSW 	= "Valid49123";
$connectionoptions = array("Database" => $MSSQLDB, "UID" => $MSSQLUSER, "PWD" => $MSSQLPASSW, "MultipleActiveResultSets" => '1');
$conn = sqlsrv_connect($MSSQLSERVER, $connectionoptions);