<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/twitterlogin', function() {

    return Socialize::with('twitter')->redirect();
});



Route::get('/callback', function() {

    $twitterUser = Socialize::with('twitter')->user();
    $user = User::whereName($twitterUser->nickname)->first();
    
    if(!$user) {
        $user = new User;
        $user->name = $twitterUser->nickname();
        $user->avatarimg = $twitterUser->avatar_original;
        $user->save();
    }
    
    Auth::loginUsingId($user->id);
    return redirect('/');
});


Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});