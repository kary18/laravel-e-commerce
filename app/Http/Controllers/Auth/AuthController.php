<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function postLogin(
        LoginRequest $request,
        Guard $auth)
    {
        $logValue = $request->input('log');

        $logAccess = filter_var($logValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $throttles = in_array(
            ThrottlesLogins::class, class_uses_recursive(get_class($this))
        );

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return redirect('/auth/login')
                ->with('error', trans('front/login.maxattempt'))
                ->withInput($request->only('log'));
        }

        $credentials = [
            $logAccess  => $logValue,
            'password'  => $request->input('password')
        ];

        if(!$auth->validate($credentials)) {
            if ($throttles) {
                $this->incrementLoginAttempts($request);
            }

            return redirect('/auth/login')
                ->with('error', trans('front/login.credentials'))
                ->withInput($request->only('log'));
        }

        $user = $auth->getLastAttempted();

        if($user->confirmed) {
            if ($throttles) {
                $this->clearLoginAttempts($request);
            }

            $auth->login($user, $request->has('memory'));

            if($request->session()->has('user_id'))    {
                $request->session()->forget('user_id');
            }

            return redirect('/');
        }

        $request->session()->put('user_id', $user->id);

        return redirect('/auth/login')->with('error', trans('front/verify.again'));
    }
    public function postRegister(
        RegisterRequest $request,
        UserRepository $user_gestion)
    {
        $user = $user_gestion->store(
            $request->all(),
            $confirmation_code = str_random(30)
        );

        $this->dispatch(new SendMail($user));

        return redirect('/')->with('ok', trans('front/verify.message'));
    }
}
