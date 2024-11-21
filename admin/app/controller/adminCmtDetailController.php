<?php 
    class adminCommentDetailController{
        private $commentdetail;
        private $data;

        function __construct()
        {
            $this->commentdetail = new CommentDetailModel();
        }

        function renderView($view, $data=null){
            $view = './app/view/' . $view .'.php';
            require_once $view;
        }   
        function viewCmtDetail(){
            $this->data['listcmtdetail'] = $this->commentdetail->getcommentdetail();
            $this->renderView('commentDetail', $this->data);
        }
    }