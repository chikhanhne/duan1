<?php
    class adminCommentController{
        private $comment;
        private $data;

        function __construct()
        {
            $this->comment = new CommentModel();
        }

        function renderView($view, $data=null){
            $view = './app/view/' . $view .'.php';
            require_once $view;
        }   
        function viewCmt(){
            $this->data['listcmt'] = $this->comment->getComment();
            $this->renderView('comment', $this->data);
        }

    }
