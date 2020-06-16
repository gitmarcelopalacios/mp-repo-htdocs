<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
/**
 * Description of Product Model: CodeIgniter 
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Product_model extends CI_Model {
 
    private $_productID;
    private $_productName;
    private $_model;
    private $_price;
    private $_qty;
    private $_subTotal;
    private $_slug;
    private $_status;
    private $_limit;
    private $_pageNumber;
    private $_offset;
    private $_orderID;
    private $_invoiceNo;
    private $_invoicePrefix;
    private $_customerID;
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_phone;
    private $_paymentFirstName;
    private $_paymentLastName;
    private $_paymentCompany;
    private $_paymentAddress;
    private $_paymentCity;
    private $_paymentPostCode;
    private $_paymentCountry;
    private $_paymentState;
    private $_paymentMethod;
    private $_paymentCode;
    private $_comment;
    private $_total;
    private $_orderStatusID;
    private $_currencyID;
    private $_currencyCode;
    private $_currencyValue;
    private $_timeStamp;
    private $_batchData;
 
    public function setProductID($productID) {
        $this->_productID = $productID;
    }
 
    public function setProductName($productName) {
        $this->_productName = $productName;
    }
 
    public function setModel($model) {
        $this->_model = $model;
    }
 
    public function setPrice($price) {
        $this->_price = $price;
    }
 
    public function setQty($qty) {
        $this->_qty = $qty;
    }
    public function setSubTotal($subTotal) {
        $this->_subTotal = $subTotal;
    }
    public function setSlug($slug) {
        $this->_slug = $slug;
    }
 
    public function setStatus($status) {
        $this->_status = $status;
    }
 
    public function setLimit($limit) {
        $this->_limit = $limit;
    }
 
    public function setPageNumber($pageNumber) {
        $this->_pageNumber = $pageNumber;
    }
 
    public function setOffset($offset) {
        $this->_offset = $offset;
    }
    public function setOrderID($orderID) {
        $this->_orderID = $orderID;
    }
    public function setInvoiceNo($invoiceNo) {
        $this->_invoiceNo = $invoiceNo;
    }
    public function setInvoicePrefix($invoicePrefix) {
        $this->_invoicePrefix = $invoicePrefix;
    }
    public function setCustomerID($customerID) {
        $this->_customerID = $customerID;
    }
    public function setFirstName($firstName) {
        $this->_firstName = $firstName;
    }
    public function setLastName($lastName) {
        $this->_lastName = $lastName;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setPhone($phone) {
        $this->_phone = $phone;
    }
    public function setPaymentFirstName($paymentFirstName) {
        $this->_paymentFirstName = $paymentFirstName;
    }
    public function setPaymentLastName($paymentLastName) {
        $this->_paymentLastName = $paymentLastName;
    }
    public function setPaymentCompany($paymentCompany) {
        $this->_paymentCompany = $paymentCompany;
    }
    public function setPaymentAddress($paymentAddress) {
        $this->_paymentAddress = $paymentAddress;
    }
    public function setPaymentCity($paymentCity) {
        $this->_paymentCity = $paymentCity;
    }
    public function setPaymentPostCode($paymentPostCode) {
        $this->_paymentPostCode = $paymentPostCode;
    }
    public function setPaymentCountry($paymentCountry) {
        $this->_paymentCountry = $paymentCountry;
    }
    public function setPaymentState($paymentState) {
        $this->_paymentState = $paymentState;
    }
    public function setPaymentMethod($paymentMethod) {
        $this->_paymentMethod = $paymentMethod;
    }
    public function setPaymentCode($paymentCode) {
        $this->_paymentCode = $paymentCode;
    }
    public function setComment($comment) {
        $this->_comment = $comment;
    }
    public function setTotal($total) {
        $this->_total = $total;
    }
    public function setOrderStatusID($orderStatusID) {
        $this->_orderStatusID = $orderStatusID;
    }
    public function setCurrencyID($currencyID) {
        $this->_currencyID = $currencyID;
    }
    public function setCurrencyCode($currencyCode) {
        $this->_currencyCode = $currencyCode;
    }
    public function setCurrencyValue($currencyValue) {
        $this->_currencyValue = $currencyValue;
    }
    public function setTimeStamp($timeStamp) {
        $this->_timeStamp = $timeStamp;
    }
    public function setBatchData($batchData) {
        $this->_batchData = $batchData;
    }
    // count all product
    public function getAllProductCount() {
        $this->db->where('status', $this->_status);
        $this->db->from('product');
        return $this->db->count_all_results();
    }
 
    // Get all details ehich store in "products" table in database.
    public function getProductList() {
        $this->db->select(array('p.product_id', 'pd.name', 'pd.slug', 'p.sku', 'p.price', 'p.model', 'pd.description', 'p.image'));
        $this->db->from('product as p');
        $this->db->join('product_description as pd', 'pd.product_id = p.product_id', 'left');
        $this->db->where('p.status', $this->_status);
        $this->db->limit($this->_pageNumber, $this->_offset);
        $query = $this->db->get();
        return $query->result_array();
    }
 
    // get currency code
    public function getCurrencyFormat() {
        $this->db->select(array('c.currency_id', 'c.symbol_left', 'c.symbol_right', 'c.code', 'c.value', 'c.decimal_place'));
        $this->db->from('currency as c');
        $this->db->where('c.currency_id', $this->_currencyID);
        $query = $this->db->get();
        return $query->row_array();
    }
 
     // get resource centre items
    public function getProduct() {
        $this->db->select(array('p.product_id', 'pd.name', 'p.sku', 'p.price', 'p.model', 'pd.slug', 'pd.description', 'p.image'));
        $this->db->from('product as p');
        $this->db->join('product_description as pd', 'pd.product_id = p.product_id', 'left');
        if(!empty($this->_productID)) {
            $this->db->where('p.product_id', $this->_productID);
        }
        if(!empty($this->_slug)) {
            $this->db->where('pd.slug', $this->_slug);
        }
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getProductImage() {
        $this->db->select(array('m.id', 'm.product_id', 'm.image'));
        $this->db->from('product_image as m');
        $this->db->join('product as p', 'm.product_id = p.product_id', 'left');
        $this->db->where('p.product_id', $this->_productID);
        $query = $this->db->get();
        return $query->result_array();
    }
 
    // order now
    public function createOrder() {
        $data = array(
            'invoice_no' => $this->_invoiceNo,
            'invoice_prefix' => $this->_invoicePrefix,
            'customer_id' => $this->_customerID,
            'firstname' => $this->_firstName,
            'lastname' => $this->_lastName,
            'email' => $this->_email,
            'phone' => $this->_phone,
            'payment_firstname' => $this->_paymentFirstName,
            'payment_lastname' => $this->_paymentLastName,
            'payment_company' => $this->_paymentCompany,
            'payment_address' => $this->_paymentAddress,
            'payment_city' => $this->_paymentCity,
            'payment_postcode' => $this->_paymentPostCode,
            'payment_country' => $this->_paymentCountry,
            'payment_state' => $this->_paymentState,
            'payment_method' => $this->_paymentMethod,
            'payment_code' => $this->_paymentCode,
            'comment' => $this->_comment,
            'total' => $this->_total,
            'order_status_id' => $this->_orderStatusID,
            'currency_id' => $this->_currencyID,
            'currency_code' => $this->_currencyCode,
            'currency_value' => $this->_currencyValue,
            'date_added' => $this->_timeStamp,
            'date_modified' => $this->_timeStamp,
        );
        $this->db->insert('orders', $data);
        return $this->db->insert_id();
    }
    // count Invoice
    public function countInvoice() {
        $this->db->from('orders');
        return $this->db->count_all_results();
    }
    // add order product item
    public function addOrderItem() {
        $data = $this->_batchData;
        $this->db->insert_batch('orders_product', $data);
    }
    // create customer
    public function createCustomer() {
        $data = array(
            'firstname' => $this->_firstName,
            'lastname' => $this->_lastName,
            'email' => $this->_email,
            'phone' => $this->_phone,
            'status' => 1,
            'date_added' => $this->_timeStamp,
        );
        $this->db->insert('customer', $data);
        return $this->db->insert_id();
    }
 
        // email validation
    public function validateEmail($email) {
        return preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $email)?TRUE:FALSE;
    }
 
    // mobile validation
    public function validateMobile($mobile) {
        return preg_match('/^[0-9]{10}+$/', $mobile)?TRUE:FALSE;
    }
}   
?>
