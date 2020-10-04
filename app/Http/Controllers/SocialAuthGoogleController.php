<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Services\SocialGoogleAccountService;
class SocialAuthGoogleController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(SocialGoogleAccountService $service)
    {
        $user = $service->createOrGetSocialGoogleAccount(Socialite::driver('google')->user());
        auth()->login($user);
        return redirect()->to('/home');
    }
}
