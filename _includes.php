<?php
require('includes/class_db.php'); #class DB
require('functions.php');
define('INCLUDE_PATH',realpath(dirname(__FILE__))._DIRSEP_.'includes');

#load class in file
function fn_class_autoload($class) {
	$class_map = array(
			'DB' => INCLUDE_PATH.'class_db.php'
	);
	if(isset($class_map[$class])) require_once($class_map[$class]);
}spl_autoload_register('fn_class_autoload');

#database connection
require('_dbconfig.php');