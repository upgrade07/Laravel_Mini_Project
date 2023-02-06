<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
class users extends Controller
{
    public function list(){
        $user = User::all();
        
        return view('userlist', ['user' => $user]);
    }

    public function create(){

        return view('create');
    }

    public function home(){
        return view('home');
    }

    public function login_submit(Request $req){
        // print_r($req->input());
        return User::select('*')->where(
            [[
                'email','=',$req->email
            ],
            [
                'password','=',$req->password
            ]]
        )->get();
        $req->session()->put('logData', [$req->input()]);
        return redirect('/list');
        
    }

    public function create_submit(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result = $user->save();
        if($result){
            return redirect('/');
        }
    }
}


