<?php

namespace App\Http\Controllers;

use App\Voucher;
use Illuminate\Http\Request;
use App\Http\Resources\Voucher as VoucherResource;

class VoucherController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Voucher::all();
        return VoucherResource::collection($vouchers);
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
        // $validator = $this->validateCategoryCreds($request->all());
        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()], 422);
        // }
        
        $data=[];
        $document=[];
         $voucher =  new Voucher;
         $voucher->code  =$request ->input('couponCode');
         $voucher->discountAmount  =$request ->input('discountAmount');
         $voucher->amountType  =$request ->input('amountType');
         $voucher->expiryDate  =$request ->input('expiryDate');
         $voucher->status  =$request ->input('status');
    
         if($voucher->save()) {
              $data = new VoucherResource(Voucher::findOrfail($voucher->id));
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
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(Voucher $voucher)
    {
        $voucher = Voucher::findOrfail($voucher->id);
        // Return a single Category
        return new VoucherResource($voucher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit(Voucher $voucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher)
    {
        $voucher = Voucher::findOrFail($voucher->id);
        $voucher->code  =$request ->input('couponCode');
        $voucher->discountAmount  =$request ->input('discountAmount');
        $voucher->amountType  =$request ->input('amountType');
        $voucher->expiryDate  =$request ->input('expiryDate');
        $voucher->status  =$request ->input('status');
         if($voucher->save()) {
              $data = new VoucherResource(Voucher::findOrfail($voucher->id));
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
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voucher $voucher)
    {
    
        $voucher = Voucher::findOrfail($voucher->id);
    
         
        if($voucher->delete()) {
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
