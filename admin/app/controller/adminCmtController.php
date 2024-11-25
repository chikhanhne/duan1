<?php
    class adminCommentController{
        private $comment;
        private $commentdetail;
        private $data;

        function __construct()
        {
            $this->comment = new CommentModel();
            $this->commentdetail = new CommentModel();
        }

        function renderView($view, $data=null){
            $view = './app/view/' . $view .'.php';
            require_once $view;
        }   
        function viewCmt(){
            $this->data['listcmt'] = $this->comment->getComment();
            $this->renderView('comment', $this->data);
        }

        function CmtDetail(){
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $cmtct = $this->commentdetail->getIdComment($id);
        }
        if (is_array($cmtct)) {
            $this->data['cmtct'] = $cmtct;
            $this->renderView('commentDetail', $this->data);
        } else {
            echo "Not found Comment";
        }
        return $this->renderView('commentDetail', $cmtct);
        }
    }
