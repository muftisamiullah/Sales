<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // return(session()->all()); 
        
        $products = Product::all();
        return ProductResource::collection($products);
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
        $destinationPath = public_path('/distweb/img/images/products');
        $photo->move($destinationPath, $name);

        $photo1 = $request->file('file1');
        $name1 = time().$photo1->getClientOriginalName();
        $destinationPath1 = public_path('/distweb/img/images/products');
        $photo1->move($destinationPath1, $name1);
        
        $photo2 = $request->file('file2');
        $name2 = time().$photo2->getClientOriginalName();
        $destinationPath2 = public_path('/distweb/img/images/products');
        $photo2->move($destinationPath2, $name2);
        
        $photo3 = $request->file('file3');
        $name3 =time().$photo3->getClientOriginalName();
        $destinationPath3 = public_path('/distweb/img/images/products');
        $photo3->move($destinationPath3, $name3);
        
        $validator = $this->validateProduct($request->all());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $data=[];
        $document=[];
        $product =  new Product;
        $product->productName = $request->input('productName');
        $product->productCategoryId = $request->input('category');
        $product->productSubCategoryId = $request->input('subcategory');
        $product->productPrice = $request->input('price');
        $product->productWeight = $request->input('weight');
        $product->productStock = $request->input('stock');
        $product->tags = $request->input('tags');
        $product->productImage = $name;
        $product->productImageOne = $name1;
        $product->productImageTwo = $name2;
        $product->productImageThree = $name3;
        $product->productSku = $request->input('prePrice');
        $product->productLongDesc = $request->input('description');
        $product->productManufacturerId = $request->input('productManufacturerId');
        $product->productLocation = $request->input('location');
        $product->productCartDesc =$request->input('cartDescription');
        $product->productTechSpecs = $request->input('techSpecs');
        $product->productAddInfo = $request->input('addInfo');
        $product->productCurrency =$request->input('productCurrency');
        $product->productUpdateDate = now();
        
        if($product->save()) {
        $data = new ProductResource(Product::findOrfail($product->id));
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $product = Product::findOrfail($id);
         return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        // return $product;
    }

    public function update(Request $request,$id)
    {   
        if($request->file('file')!=null){
        $photo = $request->file('file');
        $name = time().'.'.$photo->getClientOriginalExtension();
        $destinationPath = public_path('/distweb/img/images/products');
        $photo->move($destinationPath, $name);
        }
        if($request->file('file1')!=null){
        $photo1 = $request->file('file1');
        $name1 = time().$photo1->getClientOriginalName();
        $destinationPath1 = public_path('/distweb/img/images/products');
        $photo1->move($destinationPath1, $name1);
        }
        if($request->file('file2')!=null){
        $photo2 = $request->file('file2');
        $name2 = time().$photo2->getClientOriginalName();
        $destinationPath2 = public_path('/distweb/img/images/products');
        $photo2->move($destinationPath2, $name2);
        }
        if($request->file('file3')!=null){
        $photo3 = $request->file('file3');
        $name3 =time().$photo3->getClientOriginalName();
        $destinationPath3 = public_path('/distweb/img/images/products');
        $photo3->move($destinationPath3, $name3);
        }
        $validator = $this->validateProduct($request->all());
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $product = Product::findOrFail($id);
        $product->productName = $request->input('productName');
        $product->productCategoryId = $request->input('category');
        $product->productSubCategoryId = $request->input('subcategory');
        $product->productPrice = $request->input('price');
        $product->productWeight = $request->input('weight');
        $product->productStock = $request->input('stock');
        $product->productManufacturerId = $request->input('productManufacturerId');
        $product->productCurrency = $request->input('productCurrency');
         
        if(isset ($name)){
            $product->productImage = $name;
        }
        if(isset ($name1)){
            $product->productImageOne = $name1;
        }
        if(isset ($name2)){
            $product->productImageTwo = $name2;
        }
        if(isset ($name3)){
            $product->productImageThree = $name3;
        }
            $product->tags = $request->input('tags');
            $product->productSku = $request->input('prePrice');
            $product->productLongDesc = $request->input('description');
            $product->productLocation = $request->input('location');
            $product->productCartDesc =$request->input('cartDescription');
            $product->productTechSpecs = $request->input('techSpecs');
            $product->productAddInfo = $request->input('addInfo');

            $product->productUpdateDate = now();
           
         if($product->save()) {
               $data = new ProductResource(Product::findOrfail($id));
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // 
         
        //Get the Product
         $product = Product::findOrfail($product->id);
        // $product = Product::where('id', $id)->delete();
         
        if($product->delete()) {
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
    
    protected function validateProduct(array $data)
    {
        return Validator::make(
            $data,
            [
                'productName' => 'required|string|max:200',
                'category' => 'required|numeric|max:20',
                'location' => 'required|string',
                'price' => 'required|numeric',
                'weight' => 'required|numeric',
                'description' => 'required|string|max:400',
                'cartDescription' => 'required|string|max:200',

            ]
        );
    }
}