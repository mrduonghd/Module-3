<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $data = [
            'email' => $username,
            'password' => $password
        ];

        if (Auth::attempt($data)) {
            Toastr::success('Dang nhap thanh cong','Success!');
            return redirect()->route('products.index');
        } else {
            Session::flash('errorLogin','Tai khoan khong chinh xac');
            return redirect()->route('showFormLogin');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('showFormLogin');
    }
}
