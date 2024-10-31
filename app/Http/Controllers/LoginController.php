<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function home()
    {
        return view('login');
    }
    public function login(Request $req)
    {
        $user = UserDetail::where('email',$req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$req->input('password'))
        {
            return redirect('/users');
        }
    }
    public function register(Request $req)
    {
        $user = new UserDetail();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->save();
        $req->session()->flash('status','The User has been registered successfully');
        return redirect('/');
    }
    public function users()
    {
        $data = UserDetail::all();
        return view('usertable',["data"=>$data]);
    }
    public function adduser()
    {
        return view('adduser');
    }
    public function submituser(Request $req)
    {
        $user = new UserDetail();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->save();
        return redirect('/users');
    }
}
