<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Razorpay\Api\Api;
use Session;
use Redirect;
use JWTAuth;
use DB;
class RazorpayController extends Controller
{    
    public function payWithRazorpay()
    {        
        return view('web.pages.pay');
    }

    public function payment(Request $request)
    {   
        $razorpay_payment_id=$request->p_id;
         //return "hell";
        //Input items of form
        // $input = Input::all();
        // return $input;
        //get API Configuration
        $api_key='rzp_test_jp7UawxsbeQTFU';
        $api_secret='kLEqsH8fz1aHddKulY3ybw0F';
        $api = new Api($api_key, $api_secret);
        //Fetch payment information by razorpay_payment_id
        $payment = $api->payment->fetch($razorpay_payment_id);
        $payload = JWTAuth::parseToken()->getPayload();
        $userId = $payload->get('id');
        // return "hell";
        // return $payment->amount;
        // return response()->json($payment);
        if(!empty('$razorpay_payment_id')) {
            try {
                $response = $api->payment->fetch($razorpay_payment_id); 
                // return $response->amount;
                        $payment=DB::table('payments')->insert(
                            ['paymentId'=>$response->id, 'userId'=>$userId, 'amount'=>$response->amount, 'currency'=>$response->currency
                            ,'created_at'=>now()]
                        );
                        return "payment successfull";
                        return redirect('sucess');
            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
       
        }
        }
    public function orders(Request $request)
    {

        return $request;
        // return "bfbsf";
        // return "dbfdskhf";
        $api_key='rzp_test_jp7UawxsbeQTFU';
        $api_secret='kLEqsH8fz1aHddKulY3ybw0F';
        $api = new Api($api_key, $api_secret);
        $order= $api->order->create(['receipt'=>"rehe",'amount'=>200,'currency'=>'INR','payment_capture'=>1]);
        return (array)$order;
    }
}