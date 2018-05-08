<?php
	class Database
	{
		//tidak harus memakai private yang di deklarakasikan, 
		//langsung menggunakan construct bisa
		private $host = DB_HOSTNAME;
		private $user = DB_USERNAME;
		private $pass = DB_PASSWORD;
		private $name = DB_NAME;
	
		public $db;
	
		public function __construct()
		{
			//membuat koneksi database
			$this->db = new mysqli ($this->host, $this->user, $this->pass, $this->name);
		}
		
		
		
	}
?>