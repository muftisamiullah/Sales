<?php

namespace App\Http\Controllers;

use App\CategoryImages;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryImage as CategoryImagesResource;

class CategoryImagesController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryImages = CategoryImages::all()->sortBy("id");;
        return CategoryImagesResource::collection($categoryImages);
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
        $photo = $request->file('file');
        $name = time().'.'.$photo->getClientOriginalExtension();
        $destinationPath = public_path('/distweb/img/images/banners');
        $photo->move($destinationPath, $name);

        $data=[];
        $document=[];
         $categoryImages =  new CategoryImages;
         $categoryImages->catImageTitle = $request->input('carouselTitle');
         $categoryImages->catImageGroup = $request->input('carouselSubTitle');
         $categoryImages->catImage = $name;
         $categoryImages->status = $request->input('category');
         if( $categoryImages->save()) {
              $data = new CategoryImagesResource(CategoryImages::findOrfail( $categoryImages->id));
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
     * @param  \App\CategoryImages  $categoryImages
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $categoryImages = CategoryImages::findOrfail($id);
        return new  CategoryImagesResource($categoryImages);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryImages  $categoryImages
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryImages $categoryImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryImages  $categoryImages
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
              
            $categoryImage = CategoryImages::findOrFail($id);
            $categoryImage->catImageTitle = $request->input('slidersTitle');
            $categoryImage->catImageGroup = $request->input('carouselSubTitle');
            $categoryImage->status = $request->input('category');
            if(isset ($name)){
                $categoryImage->catImage = $name;}
               
             if($categoryImage->save()) {
                   $data = new CategoryImagesResource(CategoryImages::findOrfail($id));
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
     * @param  \App\CategoryImages  $categoryImages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $sliderImage = CategoryImages::findOrfail($id);
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
  
    
}
