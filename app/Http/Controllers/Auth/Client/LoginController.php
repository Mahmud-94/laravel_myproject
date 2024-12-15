<?php

namespace App\Http\Controllers\Auth\Client;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('frontend.auth.client_login');
    }

    public function check_user(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        //     'password' => ['required', 'string'],
        // ]);

        // if(! Auth::guard('client')->attempt($request->only('email', 'password'), $request->boolean('remember')))
        // {
        //     throw ValidationException::withMessages([
        //         'email' => trans('auth.failed'),
        //     ]);
        // }

        // $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::HOME);




        $validator = Validator::make($request->all(),[
            'email' => ['required', 'string', 'lowercase', 'email', 'max:100'],
           'password' => ['required', 'string'],
        ]);

        if ($validator->passes()) {

            if (Auth::guard('client')->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
                return redirect()->route('home');
            } else {
                return redirect()->route('client.login')->with('error','Either Email/Password is incorrect');
            }
        }
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('client')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/client/login');
    }
}
