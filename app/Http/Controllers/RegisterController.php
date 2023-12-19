<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class RegisterController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    function login()
    {

        return view("login");
    }
    function register()
    {
        return view("register");
    }
    function postregister(Request $req)
    {

        $this->validate($req, [
            "user" => "required|", 
            "password" => "required|min:8|confirmed", 
            "password_confirmation" => "required:matches:password", 
            "email" => "required|email:rfc|max:40",
            "name" => "required|",
            "pic" => "image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048",
        ]);

        $user = $req->get("user");
        $pass = $req->get("password");
        $email = $req->get("email");
        $name = $req->get("name");
        $pic = $req->pic;
        $imageurl = "default.png";
        if ($req->hasFile('pic')) {
            $image= $req->file('pic');
            $fileName = $image->getClientOriginalName();
            $imageurl = $user.'/'.$fileName;
            $pic->move('images/'.$user, $fileName);
        }
        
        $rules = array('email' => 'unique:users,email','user' => 'unique:users,username');
        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors(["email_already"=>"Email already registered","user_already"=>"Username already registered"])->withInput();
        }

        User::create([
            "username"=>$user,
            "password"=>$pass,
            "email"=>$email,
            "name"=>$name,
            "image_url"=>$imageurl
        ]);

        return redirect()->route("login");
    }
    function postlogin(Request $req)
    {
        $credentials= $this->validate($req, [
            "username" => "required|", 
            "password" => "required",
        ]);
        
        if(Auth::attempt($credentials)){
            return redirect()->route("main");
        }
        return back()->withErrors(["credentials"=>"Incorrect credentials"])->withInput();
    }
    function logout(){
        if(auth()->user()){
            Auth::logout();
            return redirect()->route("home");
        }
    }

}
