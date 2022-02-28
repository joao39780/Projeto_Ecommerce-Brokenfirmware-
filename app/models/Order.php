<?php
class Order{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getOrders($user_id){
        $this->db->query("SELECT name, price, image, product_price, product_order.id FROM orders INNER JOIN product_order ON orders.id = product_order.order_id INNER JOIN products ON product_order.product_id = products.id WHERE user_id = :user_id AND STATUS = 'Aberto';");
        $this->db->bind(':user_id',$user_id);
        $results = $this->db->resultSet();
        return $results;   
    }
    
    public function getTotalPrice($user_id){
        $this->db->query("SELECT user_id, SUM(product_price) as 'total_price' FROM orders INNER JOIN product_order ON orders.id = product_order.order_id WHERE user_id = :user_id AND status = 'Aberto'");
        $this->db->bind(':user_id',$user_id);
        $row = $this->db->single();
        return $row;
    }
    
    public function delete($id,$order_id){
        $this->db->query('DELETE FROM product_order WHERE id = :id AND order_id = :order_id');
        $this->db->bind(':id',$id);
        $this->db->bind(':order_id',$order_id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function registerOrder($user_id){
        $this->db->query("INSERT INTO orders(user_id, status) VALUES(:user_id, 'Aberto')");
        $this->db->bind(':user_id',$user_id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


    public function findOrderByUserId($user_id){
        $this->db->query("SELECT*FROM orders WHERE user_id = :user_id AND STATUS = 'Aberto'");
        $this->db->bind(':user_id',$user_id);

        $row = $this->db->single();

        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function getOrderNumber($user_id){
        $this->db->query("SELECT id FROM orders WHERE user_id = :user_id AND STATUS = 'Aberto'");
        $this->db->bind(':user_id',$user_id);
        $row = $this->db->single();
        return $row;
    }
    
     public function registerProductOrder($order_id,$product_id,$product_price){
         $this->db->query('INSERT INTO product_order(order_id,product_id,product_price) VALUES(:order_id,:product_id,:product_price)');
         $this->db->bind(':order_id',$order_id);
         $this->db->bind(':product_id',$product_id);
         $this->db->bind(':product_price',$product_price);

         if($this->db->execute()){
             return true;
         }else{
             return false;
         }
     }

    }