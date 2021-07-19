<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function adminLogin(Request $request){


       $data =  array(
           'email' => $request->email,
           'password'=> $request->password,
       );
// Auth facade
// $user = Auth::user();
       if(Auth::attempt($data)){
        $request->session()->put('admin',$data);
        return redirect('/adminDashboard');

       }
       else{
        return " user data not matched";

       }





    }

    function dashboard()
    {

        return view('/admin/adminDashboard',);
    }



    function addproducts(Request $request){

        $image = $request->file('images')->store('file');




        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category= $request->category;
        $product->price = $request->price;
        $product->images =  $image;
        $product->save();
        return redirect('/admin/adminDashboard');







    }
}
