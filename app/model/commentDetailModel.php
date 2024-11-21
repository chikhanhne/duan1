<?php
class CommentDetailModel
{
    private $db;

    function __construct() {
        $this->db = new Database;
    }
        function getcommentdetail(){
        $sql = "SELECT * FROM productcomment";
        return $this->db->getAll($sql);
    }
}