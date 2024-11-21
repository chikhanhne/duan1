<?php
require_once '../app/model/database.php';
require_once '../app/model/OrderModel.php';
require_once '../app/model/OrderDetailModel.php';
require_once '../app/model/commentModel.php';
require_once '../app/model/commentDetailModel.php';
require_once 'app/controller/adminOrderController.php';
require_once 'app//controller/adminOrderDetailController.php';
require_once 'app/controller/adminCmtController.php';
require_once 'app/controller/adminCmtDetailController.php';
require_once 'app/view/menu.php';
$db = new Database();

if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page){
        case 'order':
            $order = new adminOrderController();
            $order->viewOrd();
            break;

        case 'orderDetail':
            $orderDetail = new adminOrderDetailController();
            $orderDetail->viewOrdDetail();
            break;

        case 'comment':
            $comment = new adminCommentController();
            $comment->viewCmt();
            break;

        case 'commentDetail':
            $commentdetail = new adminCommentDetailController();
            $commentdetail->viewCmtDetail();
            break;
    }
}