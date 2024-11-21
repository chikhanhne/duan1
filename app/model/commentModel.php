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
}