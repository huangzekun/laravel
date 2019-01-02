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

    public function add(){
        $data=[
            'user_name'=>str_random(6),
            'user_email'=>str_random(5)."@qq.com",
            'register_time'=>time(),
        ];

        $uid=OrderModel::insert($data);
        var_dump($uid);
    }

    public function update($id){
        $where=[
            'user_id'=>$id
        ];
        $data=[
            'user_email'=>str_random(5)."@163.com",
        ];
        $uid=OrderModel::where($where)->update($data);
        var_dump($uid);
    }

    public function delete($id){
        $uid=OrderModel::where(['user_id'=>$id])->delete();
        var_dump($uid);
    }

    public function select()
    {
        //$where=[
        //'user_id'=>$id
        //];
        //$uid=OrderModel::where($where)->get()->toArray();
        //print_r($uid);

        $uid = OrderModel::all();
        $data = [
            'data' => $uid,
            'page' => 99
        ];
        return view('user.select', $data);
        //print_r($uid);
    }

    public function Bug1(){
         echo 1;
     }


}