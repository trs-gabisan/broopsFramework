<?php
	//echo '<link rel="stylesheet" type="text/css" href="resources/styles.css" />';
	ini_set('mysqli.reconnect', 1);
	
	#database access
	define('DBCONN_HOSTNAME','127.0.0.1');
	define('DBCONN_USERNAME','root');
	define('DBCONN_PASSWORD','');
	define('DATABASE','broops_framework'); #set database here
	
	
	#define database tables and set table name e.g TBL_TEST
	#define('TBL_','');
	#define('TBL_','');
	
	global $DB;
	try{
		$DB = new DB(DBCONN_HOSTNAME,DBCONN_USERNAME,DBCONN_PASSWORD,DATABASE);
	}catch(Exception $e){
		switch($e->getMessage()){
			case 'CANNOT_CONNECT_TO_DB': exit('<code>DB error : CANNOT_CONNECT_TO_DB</code>');
			break;
			//default : if(DATABASE == NULL) exit('DB error : CANNOT_FIND_DB');
		}
		exit;
	}