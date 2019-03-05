<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Http\Resources\Address as AddressResource;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use  DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');
        $address = Address::where('addressId', '=', $userId)->orderBy('id','desc')->get();
        return AddressResource::collection($address);
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
        // return "ehh";
        $validator = $this->validateUserCreds($request->all());
        if ($validator->fails()) {
          return response()->json(['errors' => $validator->errors()], 422);
        }


        $payload=JWTAuth::parseToken()->getPayload();
    
        $userId=$payload->get('id');

          

        DB::table('addresses')
        ->where('addressId', $userId)
        ->update(['selectAddress' => 0]);


         $data=[];
        $document=[];
        $address =  new Address;
        $address->name = $request->input('name');
        $address->address = $request->input('address');
        $address->selectAddress = 1;
        $address->phone = $request->input('phone');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->zip = $request->input('zip');
        $address->country = $request->input('country');
        $address->landMark = $request->input('landMark');
        $address->addressId=$userId;
        
    
         if($address->save()) {
            //   $data = new UserResource(User::findOrfail($user->id));
              $document = [
                  "result"=>"success",
                  "message"=>"Record updated successfully",
                  "title"=>"Success",
                  "data"=> $data
              ];
         }else{
             $document = [
                 "result"=>"error",
                 "message"=>"Record updation Failed!",
                 "title"=>"Error",
                 "data" => $data
             ];
         }
         return response()->json($document,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $payload=JWTAuth::parseToken()->getPayload();
    
        $userId=$payload->get('id');

          

        DB::table('addresses')
        ->where('addressId', $userId)
        ->update(['selectAddress' => 0]);


        $address = Address::findOrFail($id);
        $address->selectAddress = $request->input('selectAddress');
         if($address->save()) {
              $data = new AddressResource(Address::findOrfail($id));
              $document = [
                  "result"=>"success",
                  "message"=>"Record updated successfully",
                  "title"=>"Success",
                  "data"=> $data
              ];
         }else{
             $document = [
                 "result"=>"error",
                 "message"=>"Record updation Failed!",
                 "title"=>"Error",
                 "data" => $data
             ];
         }
         return response()->json($document,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //Get the Category

        $address = Address::findOrfail($address->id);
        if($address->delete()) {
           // $data = new CategoryResource(Category::findOrfail($category->id));
            $document = [
                "result"=>"success",
                "message"=>"Record deleted successfully",
                "title"=>"Success",
                "data"=> []
            ];
       }else{
           $document = [ 
               "result"=>"error",
               "message"=>"Record deletion Failed!",
               "title"=>"Error",
               "data" => []
           ];
       }
       return response()->json($document,201);
    }
    protected function validateUserCreds(array $data)
    {
        // return "in validateusercreds";
        return Validator::make(
            $data,
            [
                'name' => 'required|string|max:20',
               
                'phone' => 'required|numeric|digits_between:10,10',
                'city' => 'required|string',
                'state' => 'required|string',
                'zip' => 'required|numeric|digits_between:6,6',
                'country' => 'required|string',
                'address' => 'required|string',
                'landMark' => 'required|string',
               

            ]
        );
    }
}
