<?php

namespace App\Http\Controllers;

use App\Models\BankSystem;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function rigister_form(){
        return view("user.rigister",["msg"=>"rigister"]);
    }
    public function rigister(Request $request){
        $data = $request->all();
        $validator=Validator::make($data, [
            "name"=> "required",
            "email"=> "unique:user|required",
            "password"=> "required|confirmed",
            "card_number"=>"required",
            "location"=> "required",

        ]);
        // dd($data);
        $cardexists=BankSystem::where("card_number", $data["card_number"])->exists();
        if($cardexists){
            User::create([
                "name"=> $data["name"],
                "email"=> $data["email"],
                "password"=> bcrypt($data["password"]),
                "card_number"=> $data["card_number"],
                "location"=> $data["location"],
                "auth"=> $data["auth"],
                "access_token"=> $data["_token"],
            ]);
            
            return view("user.login",["msg"=>"login"]);
        }else{
            return view("user.rigister",["msg"=>"enter avilable card number"]);

        }
       
    }
    public function adminrigister_form($id)
    {
        $user=User::find($id);
        return view("user.adminrigister",["user"=>$user,"msg"=>"rigister"]);
    }
    public function adminrigister(Request $request,$id){
        $data = $request->all();
        $validator=Validator::make($data, [
            "name"=> "required",
            "email"=> "unique:user|required",
            "password"=> "required|confirmed",
           
            

        ]);
        // dd($data);
        
        User::create([
            "name"=> $data["name"],
            "email"=> $data["email"],
            "password"=> bcrypt($data["password"]),
            "card_number"=> "null ",
            "location"=> "null ",
            "auth"=> $data["auth"],
            "access_token"=> null,
        ]);
        
        $user=User::find($id);
        return view("user.adminrigister",["user"=>$user,"msg"=>"new admin was added"]);
    }
    public function login_form(){
        return view("user.login",["msg"=>"login"]);
    }
    public function login(Request $request){

        $data = $request->all();
        $validator=Validator::make($data, [
            
            "email"=> "required",
            "password"=> "required",
            "card_number"=>"required",
            

        ]);
        // dd($data);
        $user=User::where("email", $data["email"])
        ->where("card_number", $data["card_number"])
        ->first();
        $products=Product::all();
        if($user == null){
            
            return view("user.login",["msg"=>"enter valid email or card number"]);
            
        }else{
            $password_checked = Hash::check($request->password, $user->password);
            if($password_checked){
                if( $user->auth=="user"){

                    
                    Auth::login($user);
                    return view("user.client",["user"=>$user,"products"=>$products,"msg"=>"enjoy"]);
    
                }else if( $user->auth=="admin"){

                    
                    Auth::login($user);
                    return view("user.admin",["user"=>$user]);
    
                }else{
                
                    return view("user.rigister",["msg"=>"you don't have an account "]);
                } 
            }
           else{
                
                return view("user.login",["msg"=>"password is incorrect"]);
            } 
        }
        
    }
    public function logout($id){
        $user = User::find($id);
        Auth::logout($user);
        return view('user.login',["msg"=>"login"]);        
    }

}
