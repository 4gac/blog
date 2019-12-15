<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 'referent':
                $this->redirectTo = '/referent';
                return $this->redirectTo;
                break;
            case 'admin':
            $this->redirectTo = '/admin';
            return $this->redirectTo;
                break;            
            case 'ucastnik':
                $this->redirectTo = '/ucastnik';
                return $this->redirectTo;
                break;
        }
         
        // return $next($request);
    } 
    public function logout() {
        Auth::logout();
        return redirect('/');
      }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}