<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function postEmail(
        EmailPasswordLinkRequest $request,
        Factory $view)
    {
        $view->composer('emails.auth.password', function($view) {
            $view->with([
                'title'   => trans('front/password.email-title'),
                'intro'   => trans('front/password.email-intro'),
                'link'    => trans('front/password.email-link'),
                'expire'  => trans('front/password.email-expire'),
                'minutes' => trans('front/password.minutes'),
            ]);
        });

        $response = Password::sendResetLink($request->only('email'), function (Message $message) {
            $message->subject(trans('front/password.reset'));
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return redirect()->back()->with('status', trans($response));

            case Password::INVALID_USER:
                return redirect()->back()->with('error', trans($response));
        }
    }

    public function postReset(ResetPasswordRequest $request)
    {
        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function($user, $password) {
            $this->resetPassword($user, $password);
        });

        switch ($response) {
            case Password::PASSWORD_RESET:
                return redirect()->to('/')->with('ok', trans('passwords.reset'));

            default:
                return redirect()->back()
                    ->with('error', trans($response))
                    ->withInput($request->only('email'));
        }
    }


}
