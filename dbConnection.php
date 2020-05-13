<?php
require_once('./dbFunction.php');
 
class dbConnection{
    
    public $connection;

        public function __construct()
        {
            $this->db_connect();
        }
       
        public function db_connect()
        {
            $this->connection = mysqli_connect('localhost','root','','filemanagement');
            if(mysqli_connect_error())
            {
                die(" Connect Failed ");
            }
        }
        
}