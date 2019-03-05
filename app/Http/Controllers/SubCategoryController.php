<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Resources\SubCategory as SubCategoryResource;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        // Return a collection of $subcategories with pagination
        return SubCategoryResource::collection($subcategories);
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
         $subCategory =  new SubCategory;
         $subCategory->subName = $request->input('subName');
         $subCategory->catId =$request->input('catId');
         if($subCategory->save()) {
              // $data = new CategoryResource(Category::findOrfail($category->id));
              $document = [
                  "result"=>"success",
                  "message"=>"Record saved successfully",
                  "title"=>"Success",
                  // "data"=> $data
              ];
         }else{
             $document = [
                 "result"=>"error",
                 "message"=>"Record saving Failed!",
                 "title"=>"Error",
                 // "data" => $data
             ];
         }
         return response()->json($document,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $subCategory = SubCategory::findOrfail($id);
        // Return a single Category
        return new SubCategoryResource($subCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validator = $this->validateCategoryCreds($request->all());
        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()], 422);
        // }
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->subName = $request->input('subName');
         if($subCategory->save()) {
              // $data = new CategoryResource(Category::findOrfail($category->id));
              $document = [
                  "result"=>"success",
                  "message"=>"Record updated successfully",
                  "title"=>"Success",
                  // "data"=> $data
              ];
         }else{
             $document = [
                 "result"=>"error",
                 "message"=>"Record updation Failed!",
                 "title"=>"Error",
                 // "data" => $data
             ];
         }
         return response()->json($document,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get the Category
        $subCategory = SubCategory::findOrfail($id);
        if($subCategory->delete()) {
           // $data = new CategoryResource(Category::findOrfail($category->id));
            $document = [
                "result"=>"success",
                "message"=>"Record deleted successfully",
                "title"=>"Success",
                // "data"=> []
            ];
       }else{
           $document = [
               "result"=>"error",
               "message"=>"Record deletion Failed!",
               "title"=>"Error",
               // "data" => []
           ];
       }
       return response()->json($document,201);
    }
}
