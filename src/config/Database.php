<?php
    class Database{

        private $host = '172.18.0.1:9906';
        private $db_name = 'myblog';
        private $username = 'emma';
        private $password = ' ';
        private $conn;

        public function connect(){
            $this->conn = null;

            try{
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo 'Connection Error: ' . $e->getMessage();

            }

            return  $this->conn;
        }
    }
