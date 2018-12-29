<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/29 0029
 * Time: 9:12
 */
namespace app\Http\Controllers\Order;
use App\Http\Controllers\Controller;
use App\Model\OrderModel;

class OrderController extends Controller{
    public function aaa($id){
        $ordermodel=OrderModel::where(['user_id'=>$id])->first()->toArray();
        print_r($ordermodel);
    }
}