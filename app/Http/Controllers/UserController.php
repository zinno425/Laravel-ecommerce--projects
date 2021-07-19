<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Mail\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function login(Request $request){
        $params = $request->only('email', 'password');

        if(!\Auth::attempt($params)) {
            return redirect()->route('login');;
        }

        return redirect()->route('home');
    }
    function register(Request $request){

        $user = new User;
        $user ->fullName =  $request-> fullName;
        $user ->email =  $request-> email;
        $user ->password =  bcrypt($request->password);
        $user->save();



        if($user != null){
            UserController::sendSignupEmail($user->name, $user->email);



            return redirect()->back()->with(session()->flash('alert-success', 'Your account has been created. Please login.'));
        }

        return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong!'));





    }

    public static function sendSignupEmail($name, $email){
        $data = [
            'name' => $name,

        ];
        Mail::to($email)->queue(new UserRegister($data));
    }




}


