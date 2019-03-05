<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\Agent as AgentResource;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = User::where('isAdmin', '=', 2)->get();
        // Return a collection of $categories with pagination
        return AgentResource::collection($agents);
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
        $password=bcrypt($request ->input('agentPassword'));
        
        $data=[];
        $document=[];
         $user =  new User;
         $user->firstName  =$request ->input('agentName');
         $user->email  =$request ->input('agentEmail');
         $user->phone  =$request ->input('agentContact');
         $user->ip  =$request ->input('agentMac');
         $user->passwordHint  =$request ->input('agentConfirmPassword');
         $user->password  = $password;
         $user->isAdmin =2 ;
         
    
         if($user->save()) {
              $data = new AgentResource(User::findOrfail($user->id));
              $document = [
                  "result"=>"success",
                  "message"=>"Record saved successfully",
                  "title"=>"Success",
                  "data"=> $data
              ]; 
         }else{
             $document = [
                 "result"=>"error",
                 "message"=>"Record saving Failed!",
                 "title"=>"Error",
                 "data" => $data
             ];
         }
         return response()->json($document,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrfail($id);
        // Return a single Category
        return new AgentResource($user);
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
        $user = User::findOrFail($id);
        $password=bcrypt($request ->input('agentPassword'));
        $user->firstName  =$request ->input('agentName');
         $user->email  =$request ->input('agentEmail');
         $user->phone  =$request ->input('agentContact');
         $user->ip  =$request ->input('agentMac');
         $user->passwordHint  =$request ->input('agentConfirmPassword');
         $user->password  = $password;
         
         if($user->save()) {
              $data = new AgentResource(User::findOrfail($id));
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
    public function destroy($user)
    {
        
    
        $agent = User::findOrfail($user);
        if($agent->delete()) {
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
}
