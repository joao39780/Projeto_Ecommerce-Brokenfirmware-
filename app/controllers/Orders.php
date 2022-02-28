<?php
class Orders extends Controller{

public function __construct(){
    if(!isLoggedIn()){
        redirect('users/login');
    }
    $this->orderModel = $this->model('Order');
    
}

public function cart(){
    $orders = $this->orderModel->getOrders($_SESSION['user_id']);
    $total_price = $this->orderModel->getTotalPrice($_SESSION['user_id']);
    $data = [
        'orders' => $orders,
        'total_price' => $total_price
    ];

    $this->view('orders/cart',$data);
}

public function deleteCartItem($id){
    $order = $this->orderModel->getOrderNumber($_SESSION['user_id']);
    if($this->orderModel->delete($id,$order->id)){
        redirect('orders/cart');
    }else{
        die('something went wrong');
    }
}

public function registerOrder($product_id,$product_price){

    $order = $this->orderModel->findOrderByUserId($_SESSION['user_id']);
    if($order){
        $_SESSION['order_id'] = $order->id;
        if($this->orderModel->registerProductOrder($_SESSION['order_id'],$product_id,$product_price)){
            redirect('orders/cart');
        }else{
            die('something went wrong');
        }
    }else{
        if($this->orderModel->registerOrder($_SESSION['user_id'])){
            $order = $this->orderModel->findOrderByUserId($_SESSION['user_id']);
            $_SESSION['order_id'] = $order->id;
            $this->orderModel->registerProductOrder($_SESSION['order_id'],$product_id,$product_price);
            redirect('orders/cart');
        }else{
            die('something went wrong');
        }

    }
}


}