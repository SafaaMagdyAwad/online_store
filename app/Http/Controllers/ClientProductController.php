<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BankSystem;
use App\Models\ClientProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    public function buy_product_form($user_id,$product_id){
        $product = Product::find($product_id);
        $user = User::find($user_id);
        return view("product.buy",["user"=>$user,"product"=>$product]);
    }
    public function buy_product(Request $request ,$safaa,$user_id,$product_id){
        $product=Product::find($product_id);
        $user=User::find($user_id);
        $products=Product::all();
        
        if($request->num_parts > $product['num_parts']){
            return view("user.client",["user"=>$user,"products"=>$products,"msg"=>"you cant buy this ammount from this product"]);
            
        }else{
            ClientProduct::create(
                [
                    "user_id"=> $user_id,
                    "product_id"=> $product_id,
                    "user_name"=>$user['name'],
                    "product_name"=>$product['title'],
                    "prand"=>$product['prand'],
                    "num_parts"=>$request->num_parts,
                    "total_price"=>$product['price']*$request->num_parts+($safaa*0),
                    ]
                );
                $product->update([
                    "num_parts"=>$product["num_parts"]-$request->num_parts,
                ]);
                
                $userproducts=ClientProduct::where("user_id",$user_id)->get();
                // dd($userproducts);
                
                return view("product.bill",["user"=>$user,"userproducts"=>$userproducts]);
                
            }
            // dd($request->num_parts);
            
            
        }
        
        
       

    public function delete($user_id,$product_id){
        $user=User::find($user_id);
        $product=Product::find($product_id);
        $userproducts=ClientProduct::where("user_id",$user_id)
        ->get();

        $user_product=ClientProduct::where("user_id",$user_id)
        ->where("product_id",$product_id)->first();

        $num_parts=$user_product['num_parts'];

        $user_product->delete();
        $product->update([
            'num_parts'=> $product['num_parts']+$num_parts,
        ]);

        return view("product.bill",["user"=>$user,"userproducts"=>$userproducts,"product"=>$product]);
        
    }

    public function show_bill($user_id){
        $userproducts=ClientProduct::where("user_id",$user_id)
        ->get();
        $user=User::find($user_id);
        return view("product.bill",["user"=>$user,"userproducts"=>$userproducts]);
    }//show bill



    public function pay_bill_form($user_id,$total_price){
        $user=User::find($user_id);
        return view('bank.password',["user"=>$user,"total_price"=>$total_price]);

    }

    public function pay_bill(Request $request, $user_id ,$total_price){
        
        //get card number
        $user=User::find($user_id);
        $card_number=$user['card_number'];
        // dd($card_number);
        //integrate with bank system


        //make sure data is correct
        $safaa=BankSystem::where("card_number", $card_number)
            ->where("password", $request->password)
            ->exists();
       

        if($safaa){

            $data=BankSystem::where("card_number", $card_number)
            ->where("password", $request->password)
            ->first();
            // dd($data);
            //vertify user have enough mony
            if($data['balance'] >= $total_price){
                // take mony from the cars
                // dd($data['balance']);
                
                $balance=$data['balance']-$total_price;
                $data->update([
                    'balance'=> $balance,
                ]);
                
                
                //bank will send message to the client that his balance was reduced



                //get products user bought

                $userproducts=ClientProduct::where("user_id",$user_id)->get();

                // remove products user bought from client_product table
                foreach ($userproducts as $key => $userproduct) {
                            # code...
                        $userproduct->delete();
                }
                //return to all products
                $products = Product::all();


                return view("user.client",["user"=>$user,"products"=>$products,"msg"=>"enjoy"]);


            }else{
               return view("bank.errors",["msg"=>"your dont have enough mony","user"=>$user]);
            }
            
        }else{
            return view("bank.errors",["msg"=>"your password is incorrect","user"=>$user]);
           
        }
       
    }
}
