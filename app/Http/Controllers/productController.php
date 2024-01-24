<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Prompts\ConfirmPrompt;

class productController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");
    }
    public function add_form($user_id){
        $user=User::find($user_id);
        return view("product.add",["user"=>$user,"msg"=>"add product"]);
    }
    public function add(Request $request,$user_id){
        //data
        $user=User::find($user_id);
        $data = $request->all();
        //validate
        $validator=Validator::make($data, [
            
            "title"=> "required",
            "prand"=> "required",
            "price"=>"required",
            "num_parts"=>"required",
            

        ]);
        //create

        Product::create([
            "title"=> $data["title"],
            "prand"=> $data["prand"],
            "price"=> $data["price"],
            "num_parts"=> $data["num_parts"],
            "img"=>"safaa"
        ]);

        //return

        return view("product.add",["user"=>$user,"msg"=>"product added successfully"]);


    }
    //show all products for admin
    public function show_all($user_id){
        $products = Product::all();
        
        $user=User::find($user_id);
        
        return view("product.all",["products"=>$products,"user"=>$user]);
    }
    //show all products for client
    public function show_all_client($user_id){
        $products = Product::all();
        $user=User::find($user_id);
        return view("user.client",["user"=>$user,"products"=>$products,"msg"=>"enjoy"]);
    }
    
    public function delete($id,$user_id  ){
        $product=Product::find($id);
        
       

            $product->delete();
       
        $products = Product::all();
        $user=User::find($user_id);

        return view("product.all",["products"=>$products,"user"=>$user]); //return to all product page
    }

    public function update_form($id,$user_id){
        $product=Product::find($id);
        $user=User::find($user_id);
        return view('product.update',['product'=>$product,"user"=>$user]);
    }
    public function update(Request $request ,$id,$user_id){
        $product=Product::find($id);
        $products = Product::all();
        $user=User::find($user_id);

        //no thing will be required so i will make no validation
        if($request->price && $request->num_parts){
            $price=$request->price;
            $num_parts=$request->num_parts;
        }else  if($request->price && !$request->num_parts){
            $price=$request->price;
            $num_parts=$product['num_parts'];
        }else  if(!$request->price && $request->num_parts){
            $price=$product['price'];
            $num_parts=$request->num_parts;
        }else{
            $price=$product['price'];
            $num_parts=$product['num_parts'];
        }

        $product->update([
            'price'=> $price,
            'num_parts'=> $num_parts,
        ]);

        return view("product.all",["products"=>$products,"user"=>$user]); //return to all product page


    }


    public function search(Request $request,$id){
        $title=$request->title;
        $user=User::find($id);
        $products=Product::where("title","like","%".$title."%")->get();  //will return any title which contains the word
        // dd($products);
        if($user['auth']=="user"){

            return view("user.client",["user"=>$user,"products"=>$products,"msg"=>"enjoy"]);

        }else if($user['auth']=="admin"){

            return view("product.all",["products"=>$products,"user"=>$user]); //return to all product page


        }
    }

}
