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
    public function register(): View
    {
        return view('frontend.auth.client_register');
    }

    public function check_user(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Client::class],
            'password' => ['required', 'confirmed', 'min:8'],
            'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],);


        if ($image = $request->file('photo')) {
            $destinationPath = 'img/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        } else {
            $photo = 'img/nophoto.jpg';
        }





        $client = client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $request->photo,

        ]);

        Auth::guard('client')->login($client);

        return redirect()->route('client.login');
    }
}