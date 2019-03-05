<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Resources\Order as OrderResource;
use JWTAuth;
use DB;
use Response;

class OrderController extends Controller
{
    public function addtoCart($product)
    {
        // return $product;
        $orderModel = new Order();
        $description = $orderModel->addtoOrders($product);
        return $description;
    }
    // public function addItemtoCart()
    // {
    //     $productId = $request->input('id');
    //     $quantity = (int)$request->input('quantity');
    //     $cart = ShoppingCart::add($productId, $quantity);
    // return response()->json(['total' => $cart->total, 'count' => $cart->count]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return OrderResource::collection($orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function getOrders()
    {
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        $orders = Order::where(['orderUserId'=> $userId, 'orderStatus' => 0])->get();
        return $orders;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        if(!DB::table('orders')->where('orderUserId', $userId)->where('orderProductId', $request->id)->where('orderStatus', 0)->count() > 0)
        {
            $payload=JWTAuth::parseToken()->getPayload();
            $userId=$payload->get('id');
            // return $userId;
            $product = DB::table('products')->where('id', $request->id)->get();
            // return $product
            $productId=$product[0]->id;
            $user=DB::table('users')->where('id', $userId)->get();
            // return $user;
            if ($request->quantity) {       //request from productdetais page
                $order = Order::create([
                'orderUserId' => $userId,
                'orderAmount' => $request->price,
                'orderShipName' => $product[0]->productName,
                'orderPhone' => $user[0]->phone,
                'orderProductId' => $productId,
                'orderStatus' =>0, //0 stands for in cart
                'orderQuantity' => $request->quantity,
            ]);
            } else {
                $order = Order::create([
                'orderUserId' => $userId,        //request from index.dashboard on hover page
                'orderAmount' => $product[0]->productPrice,
                'orderShipName' => $product[0]->productName,
                'orderPhone' => $user[0]->phone,
                'orderProductId' => $productId,
                'orderStatus' =>0, //0 stands for in cart
            ]);
            }
            return $productId;        
        }
        else{
            return response()->json(['message' => 'Already in Cart']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrfail($id);
        return new OrderResource($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->orderShipName = $request->input('orderShipName');
        $order->orderPhone = $request->input('orderPhone');
        $order->orderAmount = $request->input('orderAmount');
        $order->orderStatus = $request->input('orderStatus');
        $order->orderShipAddress = $request->input('orderShipAddress');
        $order->orderCountry = $request->input('orderCountry');
        $order->orderState = $request->input('orderState');
        $order->orderShipped = $request->input('orderShipped');
        $order->orderEmail =$request->input('orderEmail');
        if ($order->save()) {
            $data = new OrderResource(Order::findOrfail($id));
            $document = [
              "result"=>"success",
              "message"=>"Record updated successfully",
              "title"=>"Success",
              "data"=> $data
          ];
        } else {
            $document = [
             "result"=>"error",
             "message"=>"Record updation Failed!",
             "title"=>"Error",
             "data" => $data
         ];
        }
        return response()->json($document, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //Get the Product
        $order = Order::findOrfail($order->id);
        // $product = Product::where('id', $id)->delete();
         
        if ($order->delete()) {
            $document = [
                "result"=>"success",
                "message"=>"Record deleted successfully",
                "title"=>"Success",
                "data"=> []
            ];
        } else {
            $document = [
               "result"=>"error",
               "message"=>"Record deletion Failed!",
               "title"=>"Error",
               "data" => []
           ];
        }
        return response()->json($document, 201);
    }

    public function addToWishlist(Request $request)
    {
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        if (!DB::table('orders')->where('orderUserId', $userId)->where('orderProductId', $request->id)->where('orderStatus', 4)->count() > 0) {
            // return $request;
            $payload=JWTAuth::parseToken()->getPayload();
            $userId=$payload->get('id');
            // return $userId;
            $product = DB::table('products')->where('id', $request->id)->get();
            // return $product
            $productId=$product[0]->id;
            $user=DB::table('users')->where('id', $userId)->get();
            // return $user;
            $order = Order::create([
            'orderUserId' => $userId,
            'orderAmount' => $product[0]->productPrice,
            'orderShipName' => $product[0]->productName,
            'orderPhone' => $user[0]->phone,
            'orderProductId' => $productId,
            'orderStatus' =>4, //4 stands for in wishlist
        ]);
            return $productId;
        }
        else{
            return response()->json(['message' => 'Already in wishlist']);
        }
    }
    public function getWishlist()
    {
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        $orders = Order::where(['orderUserId'=> $userId, 'orderStatus' => 4])->get();
        return $orders;
    }
    public function moveToWishlist($id)
    {
        // return $id;
        $orders = DB::table('orders')
        ->where('id', $id)->update(array('orderStatus' => 4));
        return $orders;
    }
    public function moveToCart($id)
    {
        // return $id;
        $orders = DB::table('orders')
        ->where('id', $id)->update(array('orderStatus' => 0));
        return $orders;
    }
}
