<?php 
    class db{
        private $host = "localhost";
        private $user = 'root';
        private $pass = '';
        private $db_name = 'php_pdo_oop_crud';

        public function connect(){
            $con = 'myql:host=' . $this->host . ';dbname=' . $this->db_name;
            
        }
    }
?>