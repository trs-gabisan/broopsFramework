<?php 
if(!class_exists('DB')) {
	class DB extends MYSQLI {
		private $DBHOST=NULL;
		private $DBUSER=NULL;
		private $DBPASS=NULL;
		
		public function __construct($DBHOST,$DBUSER,$DBPASS,$DATABASE=NULL){
			@parent::__construct($DBHOST,$DBUSER,$DBPASS,trim($DATABASE,'`'));
			if($this->connect_errno) throw new Exception("CANNOT_CONNECT_TO_DB"); 
			$this->autocommit(true);
			$this->DBHOST = $DBHOST;
			$this->DBUSER = $DBUSER;
			$this->DBPASS = $DBPASS;
		}
		
		public function __destruct() {
			$this->commit();
		}
	}
}
?>