<?php

namespace App\Http\Controllers\Admin;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class AuthController extends Controller
{

    use AuthenticatesUsers;
 
    // protected $redirectTo = '/admin/home';
   
    
  

    public function __construct()
    {
    	$this->middleware(function ($request, $next) {
	        $this->user = Auth::user();
	
	        return $next($request);
	    });
    }
    
    public function index()
    {

        if (Auth::check()) {
            return redirect()->route('admin.home');
        }

        return view('admin.login');
    }

    public function login(Request $request){
      $email = $request->email;
     $pwd = $request->password;

     $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
    ]);
    if(auth()->attempt(array('email' => $email, 'password' => $pwd)))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }
        }else{
            return redirect()->route('admin.login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
    public function adminHome(){
        return view('admin.home');
    }
    public function logout(){
       Auth::logout();
           return redirect()->route('admin.login');
       
    }
}
