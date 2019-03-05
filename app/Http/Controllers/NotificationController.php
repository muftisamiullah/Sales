<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use App\Order;
use App\Http\Resources\Notification as NotificationResource;
use JWTAuth;
use DB;
use Response;
use App\Events\NewContact;
use App\Events\NewCallback;
use App\Events\NewSubscription;


class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::all();
        return NotificationResource::collection($notifications);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }
    public function subscribe(Request $request){
        // return $request;
        // Notification::where('email','=',$request->email)->get();
        // return $emailPresent;
        $count= Notification::where('email','=',$request->email)->count();
        // return $count;
        if(!($count > 0)){
            $notification = new Notification;
            $notification->email= $request->input('email');
            if($notification->save()){
                event(new newsubscription("Somebody subscribed for Newsletter"));
                return response()->json(['success' => 'Thanks For Subscribing'], 200);
            }
        }   
        else{
            return response()->json(['error' => 'Already Subscribed']);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        // return $notification;
        $notification = Notification::findOrfail($notification->id);
        // $product = Product::where('id', $id)->delete();
         
        if ($notification->delete()) {
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
    public function contact(Request $request){
        $contact=DB::table('contactus')->insert(
            ['name' => $request->name, 'email' => $request->email, 'website'=>$request->website, 'message'=>$request->message, ]
        );
        // return $contact;
        if($contact){
            event(new newcontact("Somebody tried to contact you"));
            return response()->json(['success' => 'Thanks For Contacting'], 200);
        }
        else{
            return response()->json(['error' => 'Something went wrong']);
        }
    }
    public function getContact(){
        $contacts = DB::table('contactus')->get();
        return $contacts;
    }
    
    public function callback(Request $request){
        // return $request;
        $notification = new Notification;
        $notification->phone= $request->input('phone');
        if($notification->save()){
            event(new newcallback("Request for a Callback"));
            return response()->json(['success' => 'Thanks For Subscribing'], 200);
        }
        else{
            return response()->json(['error' => 'Something went wrong']);
        }
    }

    public function removeContact(Request $request){
        $contact=DB::table('contactus')->where('id', '=', $request->id);
        if ($contact->delete()) {
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
}   
