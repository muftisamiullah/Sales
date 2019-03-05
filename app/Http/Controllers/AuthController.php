<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use Flash;
use Socialite;


class AuthController extends Controller
{
    protected $user;
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['login', 'register', 'authenticate', 'checkUser', 'refresh','agentAuthenticate']]);
    }
    /**
     * Register a new user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        // return $request;
        $user = User::create([
            'firstName' => $request->fname,
            'lastName' => $request->lname,
            'email' => $request->email,
            'isAdmin' => $request->check,
            'password' => bcrypt($request->password),
        ]);
        $user->save();
        $token = auth('api')->login($user);
        return $this->respondWithToken($token);
    }
    /**
     * Get a JWT via given credentials.
     *
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        try {
            $credentials = $request->only(['email', 'password']);
            // return $credentials;
            // return auth('api')->attempt($credentials);
            // var_dump($token = auth('api')->attempt($credentials));
            $user = User::where('email', '=', $credentials['email'])->first();
            if(!$user){
                return response()->json(['error' => 'No User Found']);
            }
            else{
            $customClaims = ['id' => $user->id, 'isAdmin'=>$user->isAdmin,];
            }
            // return $customClaims;

            // auth()->claims(['foo' => '$user->isAdmin'])->attempt($creds);
            if (!$token = auth('api')->claims($customClaims)->attempt($credentials)) {
                // if (!$token = auth('api')->attempt($credentials)) {
                // session()->flash('msg','Invalid User id or password');
                // return redirect('admin')->with( [ 'token' => $token ] );
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            // if ($token) {
            //     $user = DB::table('users')->where('email', $request->only(['email']))->get();
            //     // return $user[0]->ID;
            // }
            // $request->session()->put('token', $token);
            // $request->session()->put('id', $user[0]->id);
            // $value = $request->session()->get('id');
            // return $value;php artisan jwt:secret
            // return $request;
            return $this->respondWithToken($token);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return $e;
        }
    }
    /**
     * Get the authenticated User
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function me()
    {
        return response()->json(auth('api')->user());
    }
    /**
     * Log the user out (Invalidate the token)
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }
    public function payload()
    {
        return auth('api')->payload();
    }
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 24 * 60,
        ]);
    }
    protected function agentAuthenticate(Request $request)
    {
        $token = $this->login($request);
        $data = json_decode($token->getContent(), true);
        if (!isset($data['error'])) {
            $user = User::where('email', '=', $request['email'])->first();
            $ip=$request->ip();
                    if($user->ip == $ip){     
                            if ($user->isAdmin == 2){
                                $data = json_decode($token->getContent(), true);
                                session()->forget('agent_access_token');
                                $request->session()->put('agent_access_token', $data['access_token']);
                                $request->session()->put('username_agent', $user['firstName']);
                                $request->session()->put('abc', 'Successfully logged in');
                                return redirect('agentadmin/dashboard')->with(['token' => $token]);
                            } else {
                                $request->session()->put('error', 'Invalid Email or Password');
                                return redirect('/agentadmin')->with(['token' => $token]);
                            } //$user->isAdmin == 2  close
                    }else{
                    $request->session()->put('forbidden', 'Forbidden');
                    return Redirect::back();
                    }//$user->ip == $ip close
        }else{
        $request->session()->put('error', 'Invalid Email or Password');
        return Redirect::back();
        }   
    }
    protected function authenticate(Request $request)
    {
        $token = $this->login($request);
        // return $token;
        $data = json_decode($token->getContent(), true);
        // return $data['error'];
        if (!isset($data['error'])) {
            $user = User::where('email', '=', $request['email'])->first();
            if ($user->isAdmin == 1 && $request->check == 1) {
                $data = json_decode($token->getContent(), true);
                if (isset($data['access_token'])) {
                    // Session::flush();
                    session()->forget('access_token');
                    $request->session()->put('access_token', $data['access_token']);
                    $request->session()->put('username_admin', $user['firstName']);
                    $request->session()->put('abc','Successfully logged in');
                    return redirect('admin/dashboard')->with(['token' => $token]);
                } else {
                    return redirect('admin')->with(['token' => $token]);
                }
            } elseif ($user->isAdmin == 0 && $request->check == 0) {
                $data = json_decode($token->getContent(), true);
                if (isset($data['access_token'])) {
                    session()->forget('user_access_token');
                    session()->forget('username');
                    $request->session()->put('user_access_token', $data['access_token']);
                    $request->session()->put('username', $user['firstName']);
                    $request->session()->put('flag',0);
                    return redirect('/')->with(['token' => $token]);
                } else {
                    return redirect('login')->with(['token' => $token]);
                }
            } elseif ($user->isAdmin == 1 && $request->check == 0) {
                return redirect('login')->with(['token' => $token]);
            } else {
                return redirect('admin')->with(['token' => $token]);
            }
        } else {
//            session()->flash('msg', 'Invalid email or password');
//            // return redirect('admin');
//            return Redirect::back();
            $request->session()->put('error', 'Invalid Email or Password');
            return Redirect::back();
        }
    }
    protected function unauthenticate()
    {
        $msg = $this->logout();
        // return $msg;
        // $payload=JWTAuth::parseToken()->getPayload();
        // $userType=$payload->get('isAdmin');
        if (isset($msg)) {
//            if (Session::has('access_token')) {
//                //  Session::flush();
//                session()->forget('access_token');
//                return redirect('admin')->with(['token' => $msg]);
//            }
            if (Session::has('user_access_token')) {
                //  Session::flush();
                session()->forget('products_id'); //initilize session for temp cart
                session()->forget('user_access_token');
                session()->forget('username');
                session()->flash('msg', 'Invalid email or password');
                return redirect('/log')->with(['token' => $msg]);
            }
        }
    }
    protected function unauthenticateAgentAdmin(){
        $msg = $this->logout();
        // return $msg;
        // $payload=JWTAuth::parseToken()->getPayload();
        // $userType=$payload->get('isAdmin');
        if (isset($msg)) {
            if (Session::has('agent_access_token')) {
                //  Session::flush();
                session()->forget('agent_access_token');
                return redirect('agentadmin')->with(['token' => $msg]);
            }
//            if (Session::has('user_access_token')) {
//                //  Session::flush();
//                session()->forget('user_access_token');
//                session()->forget('username');
//                session()->flash('msg', 'Invalid email or password');
//                return redirect('/log')->with(['token' => $msg]);
//            }
        }
    }
    
    protected function unauthenticateAdmin()
    {
        $msg = $this->logout();
        // return $msg;
        // $payload=JWTAuth::parseToken()->getPayload();
        // $userType=$payload->get('isAdmin');
        if (isset($msg)) {
            if (Session::has('access_token')) {
                //  Session::flush();
                session()->forget('access_token');
                return redirect('admin')->with(['token' => $msg]);
            }
//            if (Session::has('user_access_token')) {
//                //  Session::flush();
//                session()->forget('user_access_token');
//                session()->forget('username');
//                session()->flash('msg', 'Invalid email or password');
//                return redirect('/log')->with(['token' => $msg]);
//            }
        }
    }
    protected function checkUser(Request $request)
    {
        // $token =$this->register();
        // $from=Route::getCurrentRoute()->getPath();
        // return $from;
        // return $request->check;
        if ($request->check == 1) {
            $token = $this->register($request);
            session()->flash('msg', 'Thank you for Signing Up');
            return redirect('admin')->with(['token' => $token]);
        } else {
            $token = $this->register($request);
            // return $token;
            return redirect('login')->with(['token' => $token]);
        }
    }

}
