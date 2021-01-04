<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        
    }
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect('panel/product');
        } else {
            return view('admin.login');
        }
    }
    public function postLogin(request $request)
    {   
        $login = [
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,
            'status'    =>1
        ];
        if (Auth::attempt($login)) {
        return redirect('panel/product')->with('name',Auth::User()->name);
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return view('admin.login');
    }
}
?>