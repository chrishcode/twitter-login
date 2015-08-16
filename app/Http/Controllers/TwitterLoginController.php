<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TwitterLoginController extends Controller
{
    
    
    public function redirectToProvider()
    {
        return Socialize::with('twitter')->redirect();
    }

    
    
    public function handleProviderCallback()
    {
        $user = Socialize::with('twitter')->user();

        // $user->token;
    }


}
