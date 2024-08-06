<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantAuthController extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('auth.merchant.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:merchants',
            'password' => 'required|string|min:8',
        ]);

        Merchant::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('merchantlogin')->with('success', 'merchant registered successfully');
    }

    public function showLoginForm()
    {
        return view('auth.merchant.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:merchants',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Merchant::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('merchant')->with('success', 'Merchant successfully login');
    }
}
