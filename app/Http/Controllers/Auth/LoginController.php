<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/admin';
    protected $redirectToOrdinary = '/projects/fund/application';

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
    *borrowed from the laracast
    *Get the post register / login redirect path
    * @return string
    */
    public function redirectPath()
    {
      if (\Auth::user()->role == 'Admin') {
          return '/admin';
      }

      elseif (\Auth::user()->role == 'ordinary') {
          return '/projects/fund/application/';
      }

      else {
          return '/login';
      }
  }
}
