<?php
     require("config/config.php");
     class Orm {
        private $db_database_connect;
    
        public function __construct($db_name = DB_NAME, $db_host = DB_HOST, $db_user = DB_USERNAME, $db_pass = DB_PASSWORD)
        {
            try {
                $this->db_database_connect = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
                $this->db_database_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Failed: " . $e->getMessage();
            }
        }
    
        public function selectAll($table, $conditions)
        {
            try {
                $whereClause = implode(" AND ", $conditions);
                $stmt = $this->db_database_connect->prepare("SELECT * FROM {$table} WHERE {$whereClause}");
    
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                return false;
            }
        }
        public function selectOne($table, $conditions)
        {
            try {
                $whereClause = implode(" AND ", $conditions);
                $stmt = $this->db_database_connect->prepare("SELECT * FROM {$table} WHERE {$whereClause}");
    
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                return false;
            }
        }
    
        public function insert($table, $columns, $values)
        {
            $columnNames = implode(",", $columns);
            $placeholders = rtrim(str_repeat('?,', count($values)), ',');
    
            try {
                $stmt = $this->db_database_connect->prepare("INSERT INTO {$table} ({$columnNames}) VALUES ({$placeholders})");
    
                $stmt->execute($values);
                return $stmt;
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                return false;
            }
        }
    
 
    
        public function __destruct()
        {
            $this->db_database_connect = null;
        }
    }
    