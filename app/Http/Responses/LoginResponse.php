<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $role = auth()->user()->role_id;
        $url = route('voyager.dashboard');
        switch ($role) {
            case '1':
                return redirect()->intended($url);
                break;
            case '2':
                return redirect()->intended(config('fortify.home'));
                break;
            default:
                return redirect('/');
                break;
        }
    }
}
