<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Auth\Guard;
use User;

class RedirectIfAuthenticated
{

    /**
    *borrowed from Stackoverflow solution by Fabio Antunes
    */
    /**
    *implement the guard
    */
    protected $auth;
    public function __construct(Guard $auth){
        $this->$auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if($this->$auth->check()){
            //check if the user is admin
            if($this->$auth->user()->role == 'admin'){
                dd($this->$auth->user()->role);
                return redirect('/admin');
            }
            elseif($this->$auth->user()->role == 'ordinary'){
                dd($this->$auth->user()->role);
                return redirect('/projects/fund/application/');
            }
        }
        

        return $next($request);
    }
}
