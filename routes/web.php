<?php

// use App\Events\NewOrderPlaced;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//check if user is logged in as admin if yes he will be redirected to the page he was at
// Route::group(['middleware' => ['web']], function ($router) {
//     Route::get('$$a4m914$$', function () {
//         if (session()->has('access_token')) {
//         } else {
//             if(session()->has('error')){
//                 session()->flash('errors','Invalid Email or Password');
//             }
//             return View::make('admin.auth.login')->with('title', 'Login');
//         }
//     });


//....................................................Routes for agent....................................................

Route::get('agentadmin', function () {
    if (session()->has('agent_access_token')) {
        return View::make('agentadmin.dashboard.index')->with('title', 'Dashboard');
    } else {
        if (session()->has('error')) {
            session()->flash('errors', 'Invalid Email or Password');
        }
        if (session()->has('forbidden')) {
            session()->flash('errors', 'Forbidden! You are not Authorized to login');
        }
        return View::make('agentadmin.auth.agentlogin')->with('title', 'Login');
    }
});
    
Route::group([
    'middleware' => ['isagentloggedin'],
], function ($router) {

    Route::get('agentadmin/dashboard', function () {
        if(session()->has('abc')){
            session()->flash('success','Successfully logged in');
        }
        return View::make('agentadmin.dashboard.index')->with('title', 'Dashboard');
    });
    
    Route::get('agentadmin/customers', function () {
        return View::make('agentadmin.customers.index')->with('title', 'Customers');
    });
    Route::get('agentadmin/customers/create', function () {
        return View::make('agentadmin.customers.show')->with('title', 'Customers');
    });

    //logs

    Route::get('agentadmin/logs', function () {
        return View::make('agentadmin.logs.index')->with('title', 'Logs');
    });
    Route::get('agentadmin/logs/create', function(){
        return View::make('agentadmin.logs.show')->with('title', 'Logs');
    });
    Route::get('agentadmin/logs/edit/{id}', function ($id) {
        return View::make('agentadmin.logs.edit', ['id'=>$id])->with('title','Logs');
    });

    Route::get('agentlogs','WebController@logs');
    Route::post('agentcreatelogs','WebController@createLogs');
    Route::get('agentlogs/{id}' , 'WebController@showLogs');

});

Route::post('agentadmin/login', 'AuthController@agentAuthenticate');    
Route::post('agentadmin/logout', 'AuthController@unauthenticateAgentAdmin');  //logout admin









//.........................................................end Routes for agent.................................................................



Route::get('admin', function () {
    if (session()->has('access_token')) {
        return View::make('admin.dashboard.index')->with('title', 'Dashboard');
    } else {
        if (session()->has('error')) {
            session()->flash('errors', 'Invalid Email or Password');
        }
        return View::make('admin.auth.login')->with('title', 'Login');
    }
});
Route::post('setCurrency', function () {

    // if (session()->has('access_token')) {
    //     return View::make('admin.dashboard.index')->with('title', 'Dashboard');
    // } else {
    //     if (session()->has('error')) {
    //         session()->flash('errors', 'Invalid Email or Password');
    //     }
        session()->put('currencyValue',Request::input('currencyValue'));
        session()->put('unit',Request::input('currency'));
        session()->put('symbol',Request::input('currencySymbol'));
        return Redirect::back();
});

    Route::post('login', 'AuthController@authenticate');    
    Route::post('register', 'AuthController@checkUser');
    Route::post('logout', 'AuthController@unauthenticate');             //logout user
    Route::post('admin/logout', 'AuthController@unauthenticateAdmin');  //logout admin
    Route::get('admin/register', function () {
        return View::make('admin.auth.register')->with('title', 'Register');
    });
//*************************************Middleware Guarding Admin routes*******************************************
Route::group([
    'middleware' => ['isloggedin'],
], function ($router) {

    //timer Route
    Route::put('countdown','WebController@countDown');
    
    Route::get('admin/dashboard', function () {
        if(session()->has('abc')){
            session()->flash('success','Successfully logged in');
        }
        return View::make('admin.dashboard.index')->with('title', 'Dashboard');
    });
    //  Manufacturer Routes
    Route::get('admin/manufacturer', function () {
        return View::make('admin.manufacturer.index')->with('title', 'Manufacturer');
    });
    Route::get('admin/manufacturer/create', function () {
        return View::make('admin.manufacturer.show')->with('title', 'Manufacturer');
    });
    Route::get('admin/manufacturer/edit/{id}', function ($id) {
        return View::make('admin.manufacturer.edit', ['id' => $id])->with('title', 'Manufacturer');
    });
    //  Notification Routes
    Route::get('admin/notification', function () {
        return View::make('admin.notification.index')->with('title', 'Notification');
    });
    Route::get('admin/notification/create', function () {
        return View::make('admin.notification.show')->with('title', 'Notification');
    });
    Route::get('admin/notification/edit/{id}', function ($id) {
        return View::make('admin.notification.edit', ['id' => $id])->with('title', 'Notification');
    });

    //Admin routes category
    Route::get('admin/category', function () {
        return View::make('admin.category.index')->with('title', 'Category');
    });
    Route::get('admin/category/create', function () {
        return View::make('admin.category.show')->with('title', 'Category');
    });
    Route::get('admin/category/createsub', function () {
        return View::make('admin.category.showsub')->with('title', 'Category');
    });
    Route::get('admin/category/edit/{id}', function ($id) {
        return View::make('admin.category.edit', ['id'=>$id])->with('title', 'Category');
    });

    //customer Routes
    Route::get('admin/customers', function () {
        return View::make('admin.customers.index')->with('title', 'Customers');
    });
    Route::get('admin/customers/create', function () {
        return View::make('admin.customers.show')->with('title', 'Customers');
    });
    Route::get('admin/customers/edit/{id}', function ($id) {
        return View::make('admin.customers.edit', ['id'=>$id])->with('title', 'Customers');
    });


    //  Product Routes
    Route::get('admin/product', function () {
        return View::make('admin.product.index')->with('title', 'Product');
    });
    Route::get('admin/product/create', function () {
        return View::make('admin.product.show')->with('title', 'Product');
    });
    Route::get('admin/product/edit/{id}', function ($id) {
        return View::make('admin.product.edit', ['id'=>$id])->with('title', 'Product');
    });
    //Route::get('admin/product','AdminController@index');//display all products to admin

    // User routes
    Route::get('admin/user', function () {
        return View::make('admin.user.index')->with('title', 'User');
    });
    Route::get('admin/user/create', function () {
        return View::make('admin.user.show')->with('title', 'User');
    });
    Route::get('admin/user/edit/{id}', function ($id) {
        return View::make('admin.user.edit', ['id'=>$id])->with('title', 'User');
    });
    Route::get('admin/manage', function () {
        return View::make('admin.manageAdmin.index')->with('title', 'Manage');
    });

    //Order routes
    

    Route::get('admin/order', function () {
        return View::make('admin.order.index')->with('title', 'Order');
    });
    Route::get('admin/order/create', function () {
        return View::make('admin.order.show')->with('title', 'Order');
    });
    Route::get('admin/order/edit/{id}', function ($id) {
        return View::make('admin.order.edit', ['id'=>$id])->with('title', 'Category');
    });

     //coupons
     Route::get('/admin/coupons', function(){
        return View::make('admin.coupons.index')->with('title', 'Coupons');
    });
    Route::get('admin/coupons/create', function () {
        return View::make('admin.coupons.show')->with('title', 'Coupons');
    });
    Route::get('admin/coupons/edit/{id}', function ($id) {
        return View::make('admin.coupons.edit' , ['id'=>$id])->with('title', 'Coupons');
    });
   
    //logs

    Route::get('admin/logs', function () {
        return View::make('admin.logs.index')->with('title', 'Logs');
    });
    Route::get('/admin/logs/create', function(){
        return View::make('admin.logs.show')->with('title', 'Logs');
    });
    Route::get('/admin/logs/edit/{id}', function ($id) {
        return View::make('admin.logs.edit', ['id'=>$id])->with('title','Logs');
    });
     Route::get('logs','WebController@logs');
     Route::post('createlogs','WebController@createLogs');
     Route::get('logs/{id}' , 'WebController@showLogs');

    //reviews

     Route::get('/admin/reviews', function(){
        return View::make('admin.reviews.index')->with('title', 'Reviews');
    });
    
    //agents
    Route::get('/admin/agents', function(){
        return View::make('admin.agent.index')->with('title', 'Agent');
    });
    Route::get('admin/agents/create', function () {
        return View::make('admin.agent.show')->with('title', 'Agent');
    });
    Route::get('admin/agents/edit/{id}', function ($id) {
        return View::make('admin.agent.edit' , ['id'=>$id])->with('title', 'Agent');
    });


    //settings
    Route::get('/admin/websettings', function(){
        return View::make('admin.settingWebsite.index')->with('title', 'Website Settings');
    });
    Route::get('/admin/profile', function(){
        return View::make('admin.profile.index')->with('title', 'Edit Profile');
    });
    Route::get('/admin/websettings/create/carousel', function(){
        return View::make('admin.settingWebsite.show')->with('title', 'Website Settings');
    });
    Route::get('/admin/websettings/create/subimage', function(){
        return View::make('admin.settingWebsite.show')->with('title', 'Sub Image');
    });
    Route::get('admin/websettings/edit/carousel/{id}', function ($id) {
        return View::make('admin.settingWebsite.edit', ['id'=>$id])->with('title', 'Website Settings');
    });
    Route::get('admin/websettings/edit/subimage/{id}', function ($id) {
        return View::make('admin.settingWebsite.edit', ['id'=>$id])->with('title', 'Sub Image');
    });
    //payment
    Route::get('/admin/payment', function(){
        return View::make('admin.payment.index')->with('title', 'Payment');
    });

    Route::get('adminprofile','WebController@adminProfile');
    Route::put('updateaccount','WebController@adminEditProfile');
                   



});



//***************************************Not Guarded Routes****************************************************
Route::put('updateOrders','WebController@updateOrders');
Route::get('orderbyuser', 'WebController@orderbyuser');
Route::get('productbycategory', 'WebController@productbycategory');
Route::get('bestsell', 'WebController@bestsell');
Route::get('hotdeals', 'WebController@hotdeals');
Route::get('featured', 'WebController@featured');


Route::get('banneronefirst','WebController@banneronefirst');
Route::get('banneronesecond','WebController@banneronesecond');
Route::get('bannertwofirst','WebController@bannertwofirst');
Route::get('bannertwosecond','WebController@bannertwosecond');
Route::get('order', 'OrderController@getOrders');
Route::get('getreviews','AdminController@getReviews');
Route::put('statusreviews/{id}','AdminController@statusReviews');
Route::get('subcatman','AdminController@subcatman');


Route::get('/', function () {
    if(session()->has('flag')){
        session()->flash('done','done');
    }
    return View::make('web.dashboard.index')->with('title','Home');
});

Route::get('login', function () {
    if(session()->has('error')){
        session()->flash('error1','Invalid Email or Password');
    }
    return View::make('web.pages.login')->with('title','Authenticate');
});

Route::get('allproductslist', function () {
    return View::make('web.pages.allproductslistview')->with('title','Products');
});
Route::get('allproductsgrid', function () {
    return View::make('web.pages.allproductsgridview')->with('title','Products');
});
Route::get('products/{catname}', function ($catname) {
    return View::make('web.pages.productscategorytab', ['cat'=>$catname])->with('title', ucfirst($catname));
});
Route::get('productsub/{subname}', function ($subname) {
    return View::make('web.pages.productsubcategorytab', ['sub'=>$subname])->with('title', ucfirst($subname));
});
Route::get('productsman/{manname}', function ($manname) {
    return View::make('web.pages.productsmanufacturertab', ['man'=>$manname])->with('title',ucfirst($manname));
});
Route::get('wishlist', function () {
    return View::make('web.pages.wishlist')->with('title','My Wishlist');
});
Route::get('sucess', function () {

    return View::make('web.pages.orderSucess')->with('title','Success');
});
Route::get('packages', function () {
    return View::make('web.pages.packages')->with('title','Packages');
});

Route::get('productdetail/{id}', function ($id) {
    return View::make('web.pages.productdetail', ['id'=>$id])->with('title','Product Specification');
});
Route::get('productbycategory', 'WebController@productbycategory');
Route::get('productbysubcategory','WebController@productbysubcategory');
Route::get('productbymanufacturer','WebController@productbymanufacturer');
Route::get('getmanufacturers','WebController@getmanufacturers');
Route::get('sliderimg','WebController@sliderimg');
Route::get('categoryimages','WebController@categoryimages');
Route::get('search','WebController@search');
Route::get('searchclick','WebController@searchclick');
Route::get('subcat','WebController@cat');
Route::get('subcatslider','WebController@subcatslider');
Route::get('catpro','WebController@catpro');
Route::get('rev/{id}','WebController@rev');
Route::get('addreview','ReviewController@addReview');
Route::get('aboutus', function () {
    return View::make('web.pages.aboutus')->with('title','About Us');
});
Route::get('contactus', function () {
    return View::make('web.pages.contactus')->with('title','Contact Us');
});
Route::get('log', function () {
    return View::make('web.pages.log')->with('title', 'LogOut');
});
Route::post('placeOrder', 'WebController@placeorder');

// Route::post('placeOrder', function (){
//     event(new neworderplaced());
//     return "hello";
// });



//**********************************Middleware Guarding User routes********************************************
Route::group([
    'middleware' => ['isuserloggedin'],
], function ($router) {

    Route::get('checkout', function () {
        return View::make('web.pages.checkout')->with('title','Checkout');
    });
    Route::get('account', function () {
        return View::make('web.pages.account')->with('title', 'My Account');
    });
    //my Orders
    Route::get('myorders', function () {
        return View::make('web.pages.myOrders')->with('title','My Orders');
    });

    Route::put('updateUserAccount', 'WebController@updateUserAccount');
    Route::get('getSingleUser', 'WebController@getSingleUser');
   
    // *******************************************Routes for payment*************************************************
    // Get Route For Show Payment Form
    Route::get('pay', 'RazorpayController@payWithRazorpay')->name('pay');
    // Post Route For Makw Payment Request
    Route::post('payment', 'RazorpayController@payment')->name('payment');
    Route::post('orders', 'RazorpayController@orders')->name('orders');
    // *******************************************

    Route::post('addToWishlist', 'OrderController@addToWishlist');
    Route::get('getWishlist', 'OrderController@getWishlist');
    Route::put('moveToWishlist/{id}', 'OrderController@moveToWishlist');
    Route::put('moveToCart/{id}', 'OrderController@moveToCart');
    Route::get('myorder','WebController@myOrders');
   

});

    Route::get('cart', function () {
        return View::make('web.pages.cart')->with('title','Cart');
    });

// Route::get('subimages','WebSettingController@display');
Route::get('paymentDetails','WebController@payment');
Route::post('tempcart/{id}','WebController@tempCart');          // non logged in user
Route::get('showtempcart','WebController@showtempCart');           // non logged in user
Route::delete('deletetempcart/{id}','WebController@deleteTempCart');   // non logged in user
Route::post('addToOrdersTable','WebController@addToOrdersTable');       // non logged in user
// Route::put('countdown','WebSettingController@countDown');      


//login with google/facebook
Route::get('auth/{provider}','Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\LoginController@handleProviderCallback');
Route::post('applycoupon','WebController@applyCoupon');
Route::delete('deletecoupon/{id}','WebController@deleteCoupon');
Route::get('currentaddress','WebController@currentAddress');
Route::put('currentaddress','WebController@currentAddressUpdate');

//get Timer
Route::get('gettimer','WebController@getTimer');
Route::get('getCountCartTemp','WebController@getCountCartTemp');   //used
Route::get('getCountCart', 'WebController@getCountCart'); 

