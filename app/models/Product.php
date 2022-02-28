<?php
    class Product{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }
    
    
        public function getProducts(){
            $this->db->query('SELECT*FROM products ORDER BY RAND()');
            $results = $this->db->resultSet();
            return $results;
        }
    
        public function getProduct($id){
            $this->db->query('SELECT*FROM products WHERE id = :id');
            $this->db->bind(':id',$id);
            
            $row = $this->db->single();

            return $row;

        }

        public function searchProduct($name){
            $this->db->query("SELECT*FROM products WHERE name LIKE CONCAT('%', :name, '%')");
            $this->db->bind(':name',$name);
            $results = $this->db->resultSet();
            return $results;
        }
    }