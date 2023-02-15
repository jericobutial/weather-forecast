<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Auth;

class GithubController extends Controller
{
    //

    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $githubUser = Socialite::driver('github')->user();
        $user = User::where('github_id', $githubUser->id)->first();
        if($user){
            Auth::login($user);
            return redirect()->route('home');
        }else{
            $newUser = User::create([
                'name' => $githubUser->name,
                'email' => $githubUser->email,
                'github_id' => $githubUser->id,
                'github_token' => $githubUser->token,
                'github_nickname' => $githubUser->nickname,
                'github_refresh_token' => $githubUser->refreshToken,
            ]);
            Auth::login($newUser);
            return redirect()->route('home');
        }

    }
}
