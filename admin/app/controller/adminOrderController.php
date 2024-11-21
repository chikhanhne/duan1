<?php
    class adminOrderController{
        private $order;
        private $data;

        function __construct()
        {
            $this->order = new OrderModel();
        }

        function renderView($view, $data=null){
            $view = './app/view/' . $view .'.php';
            require_once $view;
        }   
        function viewOrd(){
            $this->data['listord'] = $this->order->getOrder();
            $this->renderView('order', $this->data);
        }

    }

    