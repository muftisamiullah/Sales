<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Resources\Customer as CustomerResource;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all categories
        $customers = Customer::all();
        // Return a collection of $categories with pagination
        return CustomerResource::collection($customers);
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
        $data=[];
        $document=[];
         $customer =  new Customer;
         $customer->customerName  =$request ->input('customerName');
         $customer->customerEmail  =$request ->input('customerEmail');
         $customer->phone  =$request ->input('customerPhone');
         $customer->subscriptionStartDate  =$request ->input('startDate');
         $customer->subscriptionEndDate  =$request ->input('endDate');
         $customer->status  =$request ->input('status');
         $customer->note  =$request ->input('note');
    
         if($customer->save()) {
              $data = new CustomerResource(Customer::findOrfail($customer->id));
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
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $customer = Customer::findOrfail($customer->id);
        // Return a single Category
        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
       
        $customer = Customer::findOrFail($customer->id);
        $customer->customerName = $request->input('customerName');
        $customer->customerEmail = $request->input('customerEmail');
        $customer->status = $request->input('status');
        $customer->phone = $request->input('customerPhone');
        $customer->subscriptionStartDate = $request->input('startDate');
        $customer->subscriptionEndDate = $request->input('endDate');
        $customer->note = $request ->input('note');

         if($customer->save()) {
              $data = new CustomerResource(Customer::findOrfail($customer->id));
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
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer = Customer::findOrfail($customer->id);
        if($customer->delete()) {
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
