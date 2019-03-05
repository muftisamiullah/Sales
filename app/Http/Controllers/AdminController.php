<?php
namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Product;
use App\Review;
use App\User;
use DB;
use Response;

class AdminController extends Controller
{
//    protected $primaryKey='ProductID';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subcatman(){
        $subcatman=DB::table('manufacturers')
          ->join('sub_categories', 'manufacturers.manufacturerCategoryId', '=', 'sub_categories.id')
          ->select('manufacturers.*', 'sub_categories.subName')
          ->get();
          return $subcatman;
    }
    public function getReviews(){
        $reviews=DB::table('products')
          ->join('reviews', 'products.id',  '=', 'reviews.reviewProductId')
          ->join('users', 'reviews.reviewUserId', '=', 'users.id' )
          ->select('reviews.*', 'users.firstName', 'products.productName')
          ->get();
          return $reviews;
    }
    public function statusReviews($id){
        $id=$id;
        $stat=Review::select('status')->where('id',$id)->get();
        if($stat[0]['status'] == 0){
        $rev=DB::table('reviews')
        ->where('id', $id)
        ->update(array('status' => 1) );
        }
        if($stat[0]['status'] == 1){
            $rev=DB::table('reviews')
            ->where('id',$id)
            ->update(array('status' => '0') );
        }
        return $rev;
    }

    public function index(){
        $ProductsModel=new Product();
        $displayProducts=$ProductsModel->getAllProducts();
        //  return view('admin',compact('displayProducts'));
           return $displayProducts;
          return view('admin.product.index',compact('displayProducts'));
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
    public function store(Request $request){
        $string=str_random(15);
        $addProduct=new Product();
        $addProduct->ProductName=$request->input('itemName');
        $addProduct->ProductPrice=$request->input('price');
        $addProduct->ProductCartDesc=$request->input('brand');
        $addProduct->ProductCategoryID=$request->input('media');
        // $addProduct->ProductImage = $request->file('image')->store('avatars');
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $path = public_path('img/' .$string . "_". $filename);
        $image_resize = Image::make($image->getRealPath())->resize(340, 340)->save($path);
        $addProduct->ProductImage ='img/'.$string . "_". $filename;
        $saved=$addProduct->save();
        if($saved){
        return Response::json(['message' => "successfully added the item" ], 200);
        }
        else{
        return Response::json(['message' => "Please try again later" ]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $ProductsModel=new Product();
        $displayProducts=$ProductsModel->getSpecificProducts($id);
        //  return view('admin',compact('displayProducts'));
      return $displayProducts;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category,$id)
    {
            $showItem=new Product();
            $item=$showItem->getItem($id);
            return($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$category,$id){
        $response = Product::where('productId',$id)->update([
            'productName'=>$request->input('itemName'),
            'productPrice'=>$request->input('price'),
            'productCartDesc'=>$request->input('brand'),
            'productCategoryID'=>$request->input('media'),
       ]);
        // return($response);
    
          if($response){
            return Response::json(['message' => "successfully updated the item" ], 200);
                }
                   else{
                      return Response::json(['message' => "Please try again later" ]);
                      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$idProduct){
         $ProductsModel=new Product();
            $delete= $ProductsModel->deleteSpecificProduct($idProduct);
           if($delete){
                  return Response::json(['message' => "successfully deleted" ], 200);
                      }
                         else{
                            return Response::json(['message' => "Product doesn't exist" ]);
                            }
        

    }
}