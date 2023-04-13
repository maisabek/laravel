<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Socialite extends Controller
{



    public function SocialRedirect($service){
       return Socialite::driver($service)->redirect();
    }

    public function CallbackRedirect($service){
      return $user = Socialite::with($service)->user();
    }
}
