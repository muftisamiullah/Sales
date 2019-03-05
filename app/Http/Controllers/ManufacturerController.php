<?php

namespace App\Http\Controllers;
 
use App\Manufacturer;
use App\Http\Resources\Manufacturer as ManufacturerResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all categories
        $manufacturers = Manufacturer::all();
        // Return a collection of $categories with pagination
        
        return ManufacturerResource::collection($manufacturers);
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
      $destinationPath = public_path('/manufacturer/images');
      $photo->move($destinationPath, $name);
  
      $validator = $this->validateManufacturer($request->all());
      if ($validator->fails()) {
          return response()->json(['errors' => $validator->errors()], 422);
      }
  
      
      $data=[];
      $document=[];
       $manufacturer =  new Manufacturer;
       $manufacturer->manufacturerName = $request->input('manufacturerName');
       $manufacturer->manufacturerUrl = $request->input('manufacturerUrl');
       $manufacturer->manufacturerCategoryId = $request->input('manufacturerCategoryId');
       
       $manufacturer->manufacturerImage = $name;
       

       if($manufacturer->save()) {
         $data = new ManufacturerResource(Manufacturer::findOrfail($manufacturer->id));
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturer $manufacturer)
    {
        //Get the Category
        $manufacturer = Manufacturer::findOrfail($manufacturer->id);
        // Return a single Category
        return new ManufacturerResource($manufacturer);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacturer $manufacturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->file('file')!=null){
            $photo = $request->file('file');
            $name = time().'.'.$photo->getClientOriginalExtension();
          $destinationPath = public_path('/manufacturer/images');
          $photo->move($destinationPath, $name);
            }
        //    return $request->input('productId');
             $validator = $this->validateManufacturer($request->all());
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            //return $product;
            // $product = Product::findOrFail($product->productId);
            $manufacturer = Manufacturer::findOrFail($id);
    
            $manufacturer->manufacturerName = $request->input('manufacturerName');
            $manufacturer->manufacturerUrl = $request->input('manufacturerUrl');
            $manufacturer->manufacturerCategoryId = $request->input('manufacturerCategoryId');
            
           //  $product->productImage = $request->input('file');
           if(isset ($name)){
            $manufacturer->manufacturerImage = $name;}
            
    
           
            
    
             if($manufacturer->save()) {
                   $data = new ManufacturerResource(Manufacturer::findOrfail($id));
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacturer $manufacturer)
    {
        //
         
        //Get the Category
        $manufacturer = Manufacturer::findOrfail($manufacturer->id);
        if($manufacturer->delete()) {
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
    protected function validateManufacturer(array $data)
    {
        return Validator::make(
            $data,
            [
                'manufacturerName' => 'required|string|max:20',
                // 'manufacturerUrl' => 'required|string|max:20',
            ]
        );
    }
}
