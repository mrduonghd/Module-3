<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showFormLogin()
    {
        return view('user.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Lấy thông tin đang nhập từ request gửi lên từ trình duyệt
    $username = $request->inputUsername;
    $password = $request->inputPassword;

    // Kiểm tra thông tin đăng nhập
    if ($username == 'admin' && $password == '123456') {

        //Nếu thông tin đăng nhập chính xác, Tạo một Session xác nhận đăng nhập thành công
        $request->session()->push('login', true);

        // Đi đến route show.blog, để chuyển hướng người dùng đến trang blog
        return redirect()->route('blog');
    }

    // Nếu thông tin đăng nhập không chính xác, gán thông báo vào Session
    $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
    $request->session()->flash('login-fail', $message);

    //Quay trở lại trang đăng nhập
    return view('user.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
