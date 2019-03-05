<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use App\User;
use App\Discount;
use App\Voucher;
use App\Manufacturer;
use App\SliderImages;
use App\Review;
use Response;
use Illuminate\Support\Facades\Input;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Manufacturer as ManufacturerResource;
use App\Order;
use App\Logs;
use App\CategoryImages;
use DB;
use JWTAuth;
use App\Events\NewOrderPlaced;



class WebController extends Controller
{
  public function rev($id){
    $rev = DB::table('users')
    ->join('reviews', 'users.id', '=', 'reviews.reviewUserId')
    ->select('reviews.*', 'users.firstName')
    ->where('reviewProductId', '=', $id)
    ->orderBy('reviewDate', 'desc')
    ->get();
    return $rev;
  }
    public function catpro(){
      $input = Input::get('option');
      $cat = SubCategory::where('catId', '=', $input)->get();
      return Response::json($cat, 200);
    }
    public function cat(){
      $subcat = DB::table('sub_categories')
          ->join('categories', 'sub_categories.catId', '=', 'categories.id' )
          ->select('sub_categories.*', 'categories.name')
          ->get();
         // return $cat;
        foreach ($subcat as $key => $value) {
            $value = $subcat->where('catId')->groupBy('name')->all();
            return $value;
        }
    }
    public function subcatslider(){
      $subcat = DB::table('manufacturers')
          ->join('sub_categories', 'manufacturers.manufacturerCategoryId', '=', 'sub_categories.id')
          ->join('categories', 'sub_categories.catId', '=', 'categories.id' )
          ->select('sub_categories.*', 'categories.name', 'manufacturers.manufacturerName')
          ->get();
         // return $cat;
        foreach ($subcat as $key => $value) {
            $value = $subcat->where('catId')->groupBy('name')->all();
            return $value;
        }
    }
    public function search(Request $request)
    {
      $search = $request->search_word;
      $posts = Product::where('productName','LIKE',"%{$search}%")->get();
      return response()->json($posts);
    }
    public function searchclick(Request $request)
    {
      $search = $request->search;
      $posts = Product::where('productName','LIKE',"%{$search}%")->get();
      return response()->json($posts);
    }

    public function sliderimg(){
      $img=SliderImages::all();
      return $img;
    }
    public function categoryimages()
    {
      $productman = DB::table('category_images')
          ->join('categories', 'category_images.status', '=', 'categories.id')
          ->select('category_images.*', 'categories.name')
          ->get();
        // return $productcat;
        foreach ($productman as $key => $value) {
            $value = $productman->where('status')->groupBy('name')->all();
            return $value;
        }
    }

    public function updateOrders(Request $request)
    {   
        //  return $request->order;
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        $orders = Order::where('orderUserId', '=', $userId)->get();
        foreach ($orders as $order) {
            foreach($request->order as $key =>$req){
                // return array($key,$req['orderId']);
                if($order->id == $req['orderId']){
                    $order->orderQuantity = $req['quantity'];
                    $order->orderTotalAmount=$req['totalAmount'];
                    $order->currency=session()->get("symbol");

                    $order->save();
                }
            }
        }
        return $orders;
    }
    public function productbycategory()
    {
        
        session()->put('products_id', []); //initilize session for temp cart
    

        $productcat = DB::table('products')
          ->join('categories', 'products.productCategoryId', '=', 'categories.id')
          ->select('products.*', 'products.id', 'categories.name')
          ->orderBy('productUpdateDate', 'desc')
          ->get();
        // return $productcat;
        foreach ($productcat as $key => $value) {
            $value = $productcat->where('productCategoryId')->groupBy('name')->all();
            return $value;
        }
    }
    public function productbysubcategory()
    {
        
        session()->put('products_id', []); //initilize session for temp cart

        $productcat = DB::table('products')
          ->join('sub_categories', 'products.productSubCategoryId', '=', 'sub_categories.id')
          ->select('products.*', 'products.id', 'sub_categories.subName')
          ->orderBy('productUpdateDate', 'desc')
          ->get();
        // return $productcat;
        foreach ($productcat as $key => $value) {
            $value = $productcat->where('productCategoryId')->groupBy('subName')->all();
            return $value;
        }
    }

    public function productbymanufacturer()
    {
        $productman = DB::table('products')
          ->join('manufacturers', 'products.productManufacturerId', '=', 'manufacturers.id')
          ->select('products.*', 'products.id', 'manufacturers.manufacturerName')
          ->orderBy('productUpdateDate', 'desc')
          ->get();
        // return $productcat;
        foreach ($productman as $key => $value) {
            $value = $productman->where('productManufacturerId')->groupBy('manufacturerName')->all();
            return $value;
        }
    }
    public function getmanufacturers(){
      $manu = DB::table('manufacturers')
          ->join('sub_categories', 'manufacturers.manufacturerCategoryId', '=', 'sub_categories.id')
          ->join('categories', 'sub_categories.catId', '=', 'categories.id' )
          ->select('sub_categories.*', 'categories.name', 'manufacturers.manufacturerImage', 'manufacturers.manufacturerName')
          ->get();
         // return $cat;
        foreach ($manu as $key => $value) {
            $value = $manu->where('catId')->groupBy('name')->all();
            return $value;
        }
    }

    public function orderbyuser()
    {
        $orderUser = DB::table('orders')
          ->join('users', 'orders.orderUserId', '=', 'users.id')
          ->select('orders.*', 'users.firstName', 'users.email')
          ->orderBy('orderDate', 'desc')
          ->get();
        return $orderUser;
    }
    
    public function getSingleUser()
    {
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        // $user= DB::table('users')->where('id', '=', $userId)->get();
        $user= User::where('id', '=', $userId)->first();
        return new UserResource($user);
    }
 
    public function updateUserAccount(Request $request)
    {
        $password = bcrypt($request['password']);
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        $user= DB::table('users')
        ->where('id', $userId)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('firstName' => $request['firstName'],'lastName' => $request['lastName'],
        'phone' => $request['phone'],'password' => $password));
        if ($user) {
            session()->forget('user_access_token');
            session()->forget('username');
            return $user;
        }

        
    }
    
    public function placeorder(Request $request)
    {
        if ($request->input('paymentMethod')=='cod') {
            $value='Not Paid';
        } else {
            $value="Paid";
        }
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        $address=DB::table('addresses')
        ->where(['addressId' => $userId, 'selectAddress' => 1])->get();
         
        $order=DB::table('orders')
         ->where('orderUserId', $userId)
         ->update(array('orderCity' => $address[0]->city,'orderState' => $address[0]->state,
          'orderCountry' => $address[0]->country,'orderPhone' => $address[0]->phone,
          'orderZip' => $address[0]->zip,'orderStatus' => 1,
          'orderShipAddress' => $address[0]->address,
          'orderShipAddress2' => $address[0]->landMark,'orderDeliverName' => $address[0]->name,
        'orderType'=> $request->input('paymentMethod'),'orderPaymentStatus'=>$value));
        event(new neworderplaced("You have Recieved a new Order"));
        
        return $order;
    }
    public function banneronefirst()
    {
      $ban1=DB::table('products')
         ->where('tags', '=', '4')->orderBy('productUpdateDate')->limit(1)->get();
         return $ban1;
    }
    public function banneronesecond()
    {
      $ban1=DB::table('products')
         ->where('tags', '=', '5')->orderBy('productUpdateDate')->limit(1)->get();
         return $ban1;
    }
    public function bannertwofirst()
    {
      $ban2=DB::table('products')
         ->where('tags', '=', '6')->orderBy('productUpdateDate')->limit(1)->get();
         return $ban2;
    }
    public function bannertwosecond()
    {
      $ban2=DB::table('products')
         ->where('tags', '=', '7')->orderBy('productUpdateDate')->limit(1)->get();
         return $ban2;
    } 
    public function bestsell()
    {
      $best=DB::table('products')
         ->where('tags', '=', '3')->get();
         return $best;
    }
    public function hotdeals()
    {
      $hot=DB::table('products')
         ->where('tags', '=', '2')->get();
         return $hot;
    }
    public function featured()
    {
        
      $feature=DB::table('products')
        ->join('categories','products.productCategoryId', '=','categories.id')
        ->select('products.*','categories.name')
        ->get();
         // return $feature; 
         foreach ($feature as $key => $value) {
            $value = $feature->where('tags','=','1')->groupBy('name')->all();
            return $value;
        }
    }
    public function myOrders(){
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        $order=DB::table('orders')
        ->where('orderUserId', $userId)->get();
        return $order;
    }
    public function tempCart(Request $request,$id){
       
    
        // $request->session()->put('tempId',$id);
        // session()->put('products_id', []); //initilize session for temp cart
        // session()->put('quantity', []); 
        $products = session()->get('products_id');
    
        if ( ($products === null) || (array_search($id, $products) === false) ) {
            $request->session()->push('products_id', $id);
            // return ($products);
        }
              
        // $request->session()->push('quantity', $request->quantity);
        return response()->json(['message' => 'Successfully added']);

    }
    public function deleteTempCart($id){
        
        

         $products = session()->get('products_id'); // Second argument is a default value
        
         if(($key = array_search($id, $products)) !== false) {
          unset($products[$key]);
             }
            $result=session()->put('products_id', $products);
            return $products;
       
     
        
     }

    public function showtempCart(){
       //  session()->put('products_id', []); //initilize session for temp cart
        // session()->put('quantity', []); 
        $result=session()->get('products_id');
    
        if ($result != null) {
            $products=[];
            foreach ($result as $data) {
                $product=DB::table('products')
            ->where('id', $data)->get();
        
                array_push($products, $product);
            }
            return ($products);
        }
    }

    public function addToOrdersTable(Request $request)//add items to orders table when he logs in
    {
         
        
            $payload=JWTAuth::parseToken()->getPayload();
            $userId=$payload->get('id');
            // return $userId;
            $productSession=session()->get('products_id');
            
            //  return ['abc'=>$productSession];
            if ($productSession!=null) {
                $length = count($productSession);
                
                //for ($i=0;$i<$length;$i++) {
                foreach ($productSession as $product) {
                    //  if(!DB::table('orders')->where('orderUserId', $userId)->where('orderProductId', $request->id)->where('orderStatus', 0)->count() > 0)
                    
                    $productOne = DB::table('products')->where('id', $product)->get();
                
                    
                    $user=DB::table('users')->where('id', $userId)->get();
                    // return $user;
                    $order = Order::create([
                    'orderUserId' => $userId,
                    'orderAmount' => $productOne[0]->productPrice,
                    'orderShipName' => $productOne[0]->productName,
                    'orderPhone' => $user[0]->phone,
                    'orderProductId' =>0,
                    'orderStatus' =>0, //0 stands for in cart
                    // 'orderQuantity' => $request->quantity,
                ]);
                }//for close
        
                session()->pull('products_id');
                $result =session()->get('products_id');
                return $result;
            }//if close
    }
    public function currentAddress(){
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');

        $address=DB::table('addresses')->where(['addressId' => $userId, 'selectAddress' => 1])->get();
        return $address;
    }
    public function currentAddressUpdate(Request $request){
        
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');

        $address=DB::table('addresses')->where(['addressId' => $userId, 'selectAddress' => 1])
         ->update(array('city' => $request->city,'state' => $request->state,
          'phone' => $request->phone,
          'name' => $request->name,
          'zip' => $request->zip,
          'country' => $request->country,
          'address' => $request->address,
          'landMark' => $request->landmark));
        return $address;
    }
    public function adminProfile(){
        $payload=JWTAuth::parseToken()->getPayload();
        $adminId=$payload->get('id');
    

        $adminDetails=User::where('id', '=', $adminId)->first();
        return new UserResource($adminDetails);
 
    }
    public function adminEditProfile(Request $request){
        $password = bcrypt($request['password']);
        $payload=JWTAuth::parseToken()->getPayload();
        $adminId=$payload->get('id');
        $admin= DB::table('users')
        ->where('id', $adminId)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('firstName' => $request['firstName'],'lastName' => $request['lastName'],
        'phone' => $request['phone'],'password' => $password));
        if ($admin) {
             session()->forget('access_token');
             session()->forget('username_admin');
            $document = [
                "result"=>"success",
                "message"=>"Profile updated successfully",
                "title"=>"Success",
                "data"=> []
            ];
        }else{
            $document = [
                "result"=>"error",
                "message"=>"Profile updation Failed!",
                "title"=>"Error",
                "data" => []
            ];
        }
        return response()->json($document,201);
    }

    public function payment(){
        $payment=DB::table('payments')->orderBy('id', 'desc')->get();
        return $payment;
    }
    public function applyCoupon(Request $request){

        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');

        $data=$request->couponCode; //get coupon code

        $result= DB::table('discounts')->where(['UserId' => $userId, 'couponCode' => $data])->count();
        if($result != 0){
            return response()->json(['error' => 'Coupon can only be applied once']);
        }

        $couponCount = Voucher::where('code',$data)->count();

        if($couponCount==0){
            return response()->json(['error' => 'Coupon is not Valid']);
        }
        else{
             
            $couponDetails =Voucher::where('code', $data)->get();
            if($couponDetails[0]->status == 0){
                return response()->json(['error' => 'This Coupon is not active']);
            }
            $expire=$couponDetails[0]->expiryDate;
            $currentDate = date('Y-m-d');
            if($expire < $currentDate){
                return response()->json(['error' => 'Coupon is Expired']);
            }
            //  //coupon is now valid
            $discount = Discount::create([
                'UserId' => $userId,
                'discountAmount' => $couponDetails[0]->discountAmount,
                'couponCode' => $couponDetails[0]->code,
                'discountType' => $couponDetails[0]->amountType,

                //0 stands for in cart
                // 'orderQuantity' => $request->quantity,
            ]);
            
             return $couponDetails;

        }

    }

    public function deleteCoupon(Request $request){
        
        if($request->id != 'none'){
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');

        $couponCode=DB::table('vouchers')->where(['id' => $request->id])->get();
        
        $discount=DB::table('discounts')->where(['couponCode' => $couponCode[0]->code , 'UserId' => $userId])->delete();
        
         return response()->json(['message' => 'Coupon removed']);
        }
        else{
            return response()->json(['error' => 'Something went wrong']);
        }
    }
   
    //create logs
    public function createLogs(Request $request)
    {

       
        $document=[];
        
        
        $logs = Logs::create([
            'agentName' => $request->name,
            'customerEmail' => $request->customerEmail,
            'note' => $request->note,
            
        ]);

        if($logs){
        $document = [
            "result"=>"success",
            "message"=>"Record saved successfully",
            "title"=>"Success",
            "data"=> $logs
        ];
   }else{
       $document = [
           "result"=>"error",
           "message"=>"Record saving Failed!",
           "title"=>"Error",
           "data" => $logs
       ];
   }
   return response()->json($document,200);

    }

    public function logs(){
        $logs = Logs::all();
        return $logs;
    }
    public function showLogs( $id )
    {
        
        $customer = Logs::findOrfail($id);
        return $customer;
        // return new CustomerResource($customer);
    }
    public function countDown(Request $request){
        
        $document=[];
        $timer= DB::table('timers')
        ->where('id', 1)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('countDown' => $request['dateSet'],'status' => $request['status']));

        if($timer){
            $document = [
                "result"=>"success",
                "message"=>"Timer Added successfully",
                "title"=>"Success",
                "data"=> $timer,
            ];
       }else{
           $document = [
               "result"=>"error",
               "message"=>"Select the different Date!",
               "title"=>"Error",
               "data" => $timer,
           ];
       }
       return response()->json($document,200);
    }
    function getTimer(){
        $timer=DB::table('timers')->where('id', 1)->get();
        return $timer;
    }

    //get cart count
    public function getCountCart(){
        
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        $count= DB::table('orders')->where(['orderUserId' => $userId, 'orderStatus'=> 0])->count();
        return $count;
    }
    public function getCountCartTemp(){
        $products = session()->get('products_id');
        $count = count($products);
        return $count;
    }
} 