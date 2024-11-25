<?php
class CommentModel
{
    private $db;

    function __construct() {
        $this->db = new Database;
    }
    function getComment(){
        $sql = "SELECT * FROM productcomment";
        return $this->db->getAll($sql);
    }
    function getcommentdetail(){
        $sql = "SELECT * FROM productcomment";
        return $this->db->getAll($sql);
    }
    function getIdComment($id){
        $sql = "SELECT * FROM productcomment WHERE id = $id";
        return $this->db->getOne($sql);
    }
}