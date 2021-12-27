<?php

namespace App\Services;

use App\Exceptions\ServiceException;
use App\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class LoginService
{
    protected $oauthClientId = 2;

    public function googleLogin($token)
    {
        try {
            $user = Socialite::driver('google')->userFromToken($token);
        } catch (Exception $ex) {
            throw new ServiceException('Google token invalid');
        }

        $loginUser = User::where('google_id', $user->id)->first();
        if (!$loginUser) {
            $loginUser = User::create([
                'google_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'email_verified_at' => Carbon::now(),
                'password' => '',
                'avatar' => $user->avatar,
            ]);
        }

        $oauthClient = DB::table('oauth_clients')->where('id', $this->oauthClientId)->first();
        if (!$oauthClient) {
            throw new ServiceException('install laravel passport and run [artisan passport:install]');
        }

        $guzzleClinet = new Client;
        $oauthResponse = $guzzleClinet->post(env('APP_URL') . '/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => $this->oauthClientId,
                'client_secret' => $oauthClient->secret,
                'username' => $user->id,
                'password' => '1',
                'scope' => '*',
            ],
        ]);

        $accessTokenInfo = json_decode($oauthResponse->getBody()->getContents());
        return [
            'access_token' => $accessTokenInfo->access_token,
            'user' => $loginUser,
        ];
    }
}
