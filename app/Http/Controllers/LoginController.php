<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
class LoginController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }
    public function getRegister()
    {
        return view('auth.register');
    }

    public function postLogin(Request $request)
    {
        $userEmail = $request->email;
        $userPass = $request->password;
        $user = User::where('email',$userEmail)->first();
        if($user!=null)
        {
            if(Hash::check($userPass,$user['password']))
            {

                //return redirect()->route('admin');
                return view('admin.dashboard');
                //dd('thành công');
            }
            else{
             //return back()->with(['error' => 'Tài khoản không tồn tại']);
                dd('Tài khoản hoặc mật khẩu không đúng');
            }
        }
        else{
            dd("Người dùng không tồn tại");
           //return back()->with(['error' => 'Tài khoản không tồn tại']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
}
