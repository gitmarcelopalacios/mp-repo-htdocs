<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
/**
 * @package Product :  CodeIgniter 
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 *   
 * Description of Product Controller
 */
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Product extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        //load model
        $this->load->model('Product_model', 'basket');
        $this->load->library('pagination');
        $this->load->library('cart');
        $this->load->helper('text');
    }
    // list product
    public function index() {
        $data = array();
        $data['page'] = 'product-list';
        $data['title'] = 'Product | TechArise'; 
        $data['breadcrumbs'] = array('Home' => '#');
        $this->basket->setCurrencyID(5);
        $currencyInfo = $this->basket->getCurrencyFormat();
        $data['currency'] = $currencyInfo;
 
        $config['total_rows'] = $this->basket->getAllProductCount();
        $page_number = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'cart/index/';
        if (empty($page_number))
            $page_number = 1;
        $offset = ($page_number - 1) * $this->pagination->per_page;
        $this->basket->setPageNumber($this->pagination->per_page);
        $this->basket->setOffset($offset);
        $this->pagination->cur_page = $offset;
        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
 
        $this->basket->setStatus(1);
        $data['products'] = $this->basket->getProductList();
        $this->load->view('product/index', $data);
    }
    // product description 
    public function single($slug='') {
        $data = array();
        $data['page'] = 'product-view';
        $data['title'] = 'View Product | TechArise'; 
        $data['breadcrumbs'] = array('Home' => site_url(), 'View' => '#');
        $this->basket->setSlug($slug);
        $data['productInfo'] = $this->basket->getProduct();
        $this->basket->setProductID($data['productInfo']['product_id']);
        $data['productImage'] = $this->basket->getProductImage();
        $this->load->view('product/single', $data);
    }
 
    // quickView
    public function quickView() {
        $json = array();
        $productID = $this->input->post('product_id');
        $this->basket->setProductID($productID);
        $json['productInfo'] = $this->basket->getProduct();
        $this->output->set_header('Content-Type: application/json');
        $this->load->view('product/render/view', $json);
    }
 
}
?>