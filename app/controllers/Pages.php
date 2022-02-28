<?php
class Pages extends Controller
{
    public function __construct()
    {

        $this->productModel = $this->model('Product');
    }

    public function index()
    {
        $products = $this->productModel->getProducts();

        $data = [
            'title' => 'Welcome',
            'products' => $products
        ];



        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];
        $this->view('pages/about', $data);
    }

    public function product($id = '')
    {
        $product = $this->productModel->getProduct($id);
        $data = [
            'product' => $product
        ];
        if ($data['product']) {
            $this->view('pages/product', $data);
        } else {
            redirect('pages');
        }
    }

    public function listproduct(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
        //Sanitize $_GET GLOBAL
        $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
       
        //Validate $_GET['query']
        if(empty($_GET['query'])){
            redirect('pages');
        }
        $listProduct = $this->productModel->searchProduct($_GET['query']);
        $data = [
            'listProduct' => $listProduct
        ];
        $this->view('pages/listproduct',$data);
        
    
        }else{
            redirect('pages');
        }
    }


}
