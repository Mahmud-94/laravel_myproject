<?php

namespace App\Http\Controllers\Auth\Agent;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;

use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('login.agent_login');
    }

    public function check_user(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        if(! Auth::guard('agent')->attempt($request->only('email', 'password'), $request->boolean('remember')))
        {
            throw ValidationException::withMessages([

                'email' => trans('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::AGENT_DASHBOARD);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('agent')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/agent/login');
    }
}
