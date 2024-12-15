<?php

namespace App\Http\Controllers\Auth\Client;

use App\Models\Client;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('frontend.auth.client_register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:50', 'unique:'.Client::class],
            'password' => ['required', 'confirmed', 'min:8'],
            'phone' => ['required', 'string', 'max:50'],
        ]);

        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        // Auth::guard('client')->login($client);

        // return redirect(RouteServiceProvider::HOME);


        return redirect()->route('client.login');
    }
}
