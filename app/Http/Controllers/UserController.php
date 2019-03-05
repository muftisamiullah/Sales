<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all users
        // $users = User
        $users = User::where('isAdmin', '=', 0)->get();
    
        // Return a collection of $users with pagination
        return UserResource::collection($users);
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
        // return $request;
        $validator = $this->validateUserCreds($request->all());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $data=[];
        $document=[];
        $user =  new User;
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->zip = $request->input('zip');
        $user->country = $request->input('country');
        $user->address = $request->input('address');
        $user->address2 = $request->input('address2');
        $user->isAdmin=false;
         if($user->save()) {
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
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //Get the User
        $user = User::findOrfail($id);
        // Return a single User
        return new UserResource($user);
        // $userModel = new User();
        // $user = $userModel->getUser($id);
        // return $user;
        //return view('products',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $showUser=new User();
            $user=$showUser->getUser($id);
            return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        // return $request;
        $validator = $this->validateUserCreds($request->all());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $user = User::findOrFail($id);
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->zip = $request->input('zip');
        $user->country = $request->input('country');
        $user->address = $request->input('address');
        $user->address2 = $request->input('address2');
         if($user->save()) {
              $data = new UserResource(User::findOrfail($id));
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
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        
        //Get the User
        $user = User::findOrfail($user->id);
        if($user->delete()) {
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
                'firstName' => 'required|string|max:20',
                'lastName' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'phone' => 'required|numeric|digits_between:10,10',
                'city' => 'required|string',
                'state' => 'required|string',
                'zip' => 'required|numeric|digits_between:6,6',
                'country' => 'required|string',
                'address' => 'required|string',
                'address2' => 'required|string',

            ]
        );
    }
    public function showadmin()
    {
        //Get all users
        // $users = User
        $users = User::where('isAdmin', '=', 1)->get();
    
        // Return a collection of $users with pagination
        return UserResource::collection($users);
    }
    public function makeuserasadmin(Request $request,$id)
    {
        
        $user = User::findOrFail($id);
        $user->isAdmin = $request->input('isAdmin');
        if($user->save()) {
              // $data = new UserResource(User::findOrfail($id));
              $document = [
                  "result"=>"success",
                  "message"=>"Record updated successfully",
                  "title"=>"Success",
                  "data"=> []
              ];
        }else{
             $document = [
                 "result"=>"error",
                 "message"=>"Record updation Failed!",
                 "title"=>"Error",
                 "data"=> []
            ];
        }
        return response()->json($document,201);
    }
}

