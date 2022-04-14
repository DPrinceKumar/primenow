<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Validation\Validator;


// db
use App\Models\signup;


class userAuth extends Controller
{
   
// $tasks_controller = new TasksController;

    public function Login(Request $req){
        
        $data =$req->input();
        $email=$req->input('email');
        $password=$req->input('password');

        $validated = $req->validate([
            'email'=>'required |email ',
            'password'=>'required || min:6',
        ]);
        // $req->session()->put('user`',$data['email']);

        return redirect('/topheadline');
    }



    public function signup(Request $req)
    {

        $validated = $req->validate([
            'full_name' => ['required'],
            'email'=>['required'],
            'password'=>['required ',' min:6'],
        ]);

        $login=new signup;
        $login->full_name=$req->full_name;
        $login->email=$req->email;
        $login->password=$req->password;
        $login->save();
        return redirect('/topheadline');
    }
}