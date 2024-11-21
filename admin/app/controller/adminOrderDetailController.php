<?php
    class adminOrderDetailController{
        private $orderdetail;
        private $data;

        function __construct()
        {
            $this->orderdetail = new OrderDetailModel();
        }

        function renderView($view, $data=null){
            $view = './app/view/' . $view .'.php';
            require_once $view;
        }

        function viewOrdDetail(){
            $this->data['listordDetail'] = $this->orderdetail->getOrderDetail();
            $this->renderView('orderDetail', $this->data);
        }

    }