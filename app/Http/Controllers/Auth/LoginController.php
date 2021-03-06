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
    protected $redirectTo = '/dashboard';
   // protected $redirectToOrdinary = '/projects/fund/application';

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
    /*public function redirectPath()
    {
      if (Entrust::hasRole('admin')) {
        return '/dashboard';
      }

      elseif (Entrust::hasRole('role')) {
        return 'ProjectLeaders.project_dashboard';
      }

    }*/
  }
