<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
// use App\Product;
use JWTAuth;
class Order extends Model
{   
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $casts = [
        'id' => 'integer',
    ];
    protected $fillable=[
        'orderUserId','orderAmount','orderShipName','orderPhone','orderProductId','orderStatus','orderQuantity',
    ];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    // protected $table = 'products';

    // public function addtoOrders($specificProd){
    //     try {
    //         // return $specificProd;
    //     $product = DB::table('products')->where('id',$specificProd)->get();
    //     return $product;
    //     $payload=JWTAuth::parseToken()->getPayload();
    //     $id=$payload->get('id');
    //     // return $id;
    //     $user=DB::table('users')->where('id',$id)->get();
    //     // return $user;
    //     $order = Order::create([
    //         'orderUserId' => $id,
    //         'orderAmount' => $product[0]->productPrice,
    //         'orderShipName' => $product[0]->ProductName,
    //         'orderPhone' => $user[0]->phone,
    //     ]);
    //     // return $order;
    //     $saved=$order->save();
    //     $orders=DB::table('orders')->where('orderUserId',$id)->get();
    //         $sum=0;
    //         foreach($orders as $obj){
    //         $sum=$sum+$obj->orderAmount;
    //     }
    //     return $orders;
    //     return response()->json(["data" =>$orders,
    //                              "total" =>$sum,
                                    
    //     ], 200);
    //     if($saved){
    //         return response('item added to cart successfully', 200);
    //     }
    //     else{
    //         return response('error', 400);
    //     }
    //     } catch (\Exception $e) {
    //         throw new \PDOException($e->getMessage(), 1);
    //     }
    // }
}
