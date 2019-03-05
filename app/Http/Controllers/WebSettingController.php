<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderImages;
use App\Http\Resources\WebSetting as WebSettingResource;
use DB;


class WebSettingController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = SliderImages::all();
        return WebSettingResource::collection($slider);
    }
    //display subimages
    // public function display(){

    //     $slider = SliderImages::where('status','=',2)->get();
    //     return WebSettingResource::collection($slider);
    // }

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
        $photo = $request->file('file');
        $name = time().'.'.$photo->getClientOriginalExtension();
        $destinationPath = public_path('/distweb/img/images/banners');
        $photo->move($destinationPath, $name);

        $data=[];
        $document=[];
         $slider =  new SliderImages;
         $slider->slidersTitle = $request->input('carouselTitle');
         $slider->slidersGroup = $request->input('carouselSubTitle');
         $slider->status = 0;
         $slider->slidersImage = $name;
         if($slider->save()) {
              $data = new WebSettingResource(SliderImages::findOrfail($slider->id));
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
        $slider = SliderImages::findOrfail($id);
        return new  WebSettingResource($slider);
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
        if($request->file('file')!=null){
            $photo = $request->file('file');
            $name = time().'.'.$photo->getClientOriginalExtension();
            $destinationPath = public_path('/distweb/img/images/banners');
            $photo->move($destinationPath, $name);
            } 
              
            $sliderImage = SliderImages::findOrFail($id);
            $sliderImage->slidersTitle = $request->input('slidersTitle');
            $sliderImage->slidersGroup = $request->input('carouselSubTitle');
            
            if(isset ($name)){
                $sliderImage->slidersImage = $name;}
               
             if($sliderImage->save()) {
                   $data = new WebSettingResource(SliderImages::findOrfail($id));
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
    public function destroy($id)
    {
         //Get the Category
         
         $sliderImage = SliderImages::findOrfail($id);
         if($sliderImage->delete()) {
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
    public function countDown(Request $request){
        SliderImages::where('id','=', 1)
         ->update(array('expiresDate' => $request->dateSet));

    }
}
