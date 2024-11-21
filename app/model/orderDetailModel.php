<?php
class OrderDetailModel{
    private $db;

    function __construct(){
        $this->db = new Database;
    }
    function getOrderDetail(){
        $sql = "SELECT * FROM orderitems";
        return $this->db->getAll($sql);
    }
}