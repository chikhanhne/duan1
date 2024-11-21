<?php
class OrderModel
{
    private $db;

    function __construct() {
        $this->db = new Database;
    }
        function getOrder(){
        $sql = "SELECT * FROM orders";
        return $this->db->getAll($sql);
    }
    // function __construct()
    // {
    //     $this->db = new Database();
    // }
    
}
