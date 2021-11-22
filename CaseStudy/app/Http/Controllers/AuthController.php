<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
                // Session::flash('success', 'Dang nhap thanh cong');


                Toastr::success('Dang nhap thanh cong', 'Success!');
                return redirect()->route('dashboard')->with('success','Dang nhap thanh cong');
            }
            return redirect()->route('home');
        } else {
            // Toastr::error('Tai khoan khong chinh xac', 'Error!!!');
            Session::flash('errorLogin', 'Tai khoan khong chinh xac');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('showFormLogin');
    }
}
