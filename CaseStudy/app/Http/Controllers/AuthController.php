<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        // $email = $request->email;
        // $password = $request->email;

        // $data = [
        //     'email' => $email,
        //     'password' => $password
        // ];

        $data = $request->only('email', 'password');
        // dd(Auth::attempt($data));

        if (Auth::attempt($data)) {
            if (Auth::user()->role == '1') {
                Toastr::success('Dang nhap thanh cong', 'Success!');
                return redirect()->route('dashboard');
            }
            return redirect()->route('home');
        } else {
            Toastr::error('Tai khoan khong chinh xac', 'Error!!!');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('showFormLogin');
    }
}
