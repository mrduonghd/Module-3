<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAccountRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Services\UserService;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUser();
        return  view('users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAccountRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->role = $request->input('role');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('pwd'));
        $user->save();

        return redirect()->route('users.index');
    }

    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
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
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        // return response()->json(['message' => 'Delete  success']);
        return redirect()->route('users.index');
    }

    public function changePwd()
    {
        return view('users.changePwd');
    }

    public function pwdStore(PasswordRequest $request)
    {

        if (Hash::check($request->input('oldpwd'), Auth::user()->password)) {

            User::find(auth()->user()->id)->update(['password' => Hash::make($request->input('newpwd'))]);

            Toastr::success('success', 'Cap nhap thanh cong');
            return redirect()->route('products.index');
        }
        Toastr::error('error', 'Old password khong dung');
        return redirect()->back();

        // if (!(Hash::check($request->get('oldpwd'), Auth::user()->password))) {
        //     // The passwords matches
        //     return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        // }

        // if(strcmp($request->get('oldpwd'), $request->get('newpwd')) == 0){
        //     //Current password and new password are same
        //     return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        // }

        // //Change Password
        // $user = Auth::user();
        // $user->password = bcrypt($request->get('newpwd'));
        // $user->save();

        // return redirect()->back()->with("success","Password changed successfully !");

    }

    public function register(){
        return view('users.register');
    }

    public function rgStore(CreateAccountRequest $request){
        $user = new User();
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->role = 0;
        $user->password = Hash::make($request->input('password'));
        
        Toastr::success('dang ky thanh cong', 'Success!!!');
        $user->save();
        return redirect()->route('showFormLogin');
    }
}
