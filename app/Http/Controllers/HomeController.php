<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }

    public function SocialRedirect($service){
       return Socialite::driver($service)->redirect();
    }

    public function CallbackRedirect($service){
      return $user = Socialite::with($service)->user();
    }
}
