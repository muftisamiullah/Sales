<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Http\Resources\Review as ReviewResource;
use Illuminate\Support\Facades\Validator;
use DB;
use JWTAuth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::all();
        // Return a collection of $subcategories with pagination
        return ReviewResource::collection($review);
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

        $payload=JWTAuth::parseToken()->getPayload();
        $userId=$payload->get('id');

        $review=DB::table('reviews')->insert(
            ['reviewContent'=>$request->reviewContent, 'reviewProductId'=>$request->reviewProductId,
             'reviewUserId'=> $userId, 'rating'=>$request->rating ]
        );   
        if($review) {
            $document = [
                "result"=>"success",
                "message"=>"Review submitted successfully",
                "title"=>"Success",
                "data"=> []
            ];
       }else{
           $document = [
               "result"=>"error",
               "message"=>"Review Submission Failed!",
               "title"=>"Error",
               "data" => []
           ];
       }
       return response()->json($document,201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $rev = DB::table('reviews')->where(['id' => $request->id])->get();
        // if($id != 'none'){
        $document=[];
        $rev = DB::table('reviews')->where(['id' => $id]);
        
        if($rev->delete()) {
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
        //  return response()->json(['message' => 'Review removed']);
        // }
        // else{
        //     return response()->json(['error' => 'Something went wrong']);
        // }
    }
}
