<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    
    /**
    * login user 
    */
    public function login(Request $request)
    {
        $valid = Validator::make($request->all(),[
            'email'=>'required|string',
            'password'=>'required|string'
        ]);
        if($valid->fails()){
            return json_encode(false);
        }
        $result = User::where('email',$request->email)->first();
        
        if($result!=null){
            
           if(password_verify($request->password,$result->password)){
               //success to login case
                session()->put('name', $result->fname.' '.$result->lname);
                session()->put('uID',$result->id);
               return json_encode(true);
           } 
        }
        
        return json_encode(false);
        
            
    }
}
