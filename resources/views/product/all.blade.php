@extends('layout.app')
@section('title')
    all products
@endsection
@section('content')
   <div class="h1">
    products

   </div>

<div class="container">
    <div class="card">
        <div class="mb_5">
            <div class="row">
                <div class="col-6">

                    <a href="{{route("product.add_form",$user['id'])}}" type="button" class="btn btn-warning input mt-1 form-control loginPass"> add product</a>
                </div>
                <div class="col-6">

                    <a href="{{route("user.logout",$user['id'])}}" onclick="return confirm('are you sure ?')" type="button" class="btn btn-warning input mt-1 form-control loginPass"> logout</a>
                </div>
            </div>
            <div class="card">
                <form style="display: inline" method="post" action="{{route('product.search',$user['id'])}}">
                    @csrf
                    <select name="title" class="input mt-2 form-control loginPass " placeholder="title">
                        <option  disabled selected>search for</option>
                        <option value="phone">phones</option>
                        <option value="labtob">labtobs</option>
                        <option value="TV">TVs</option>
                        <option value="computer">computers</option>
                        <option value="external hard">external hards</option>
                        <option value="head phone">head phones</option>
                        <option value="kayboard">kayboards</option>
                    </select>
                    <button type="submit" style="display: inline" class="btn btn-warning  mb-2  ">search</button>
    
                 </form>
           </div>

            <table class="table">
                <thead>
                   <tr>
                   <th scope="col">product id</th>
                   <th scope="col">title</th>
                   <th scope="col">prand</th>
                   <th scope="col">price</th>
                   <th scope="col">no.parts</th>
                   <th scope="col">....</th>
                   </tr>
               </thead>
               <tbody>
                @foreach ($products as $product)
                <tr>
                        <th scope="row">{{$product['id']}}</th>
                        <td>{{$product['title']}}</td>
                        <td>{{$product['prand']}}</td>
                        <td>{{$product['price']}}</td>
                        <td>{{$product['num_parts']}}</td>
                        
                        <td>
                                
                            <a href="{{route('product.update_form',[$product['id'],$user['id']])}}" type="button" class="btn btn-success input mt-1 form-control loginPass">update product</a>
                            <form method="POST" style="display: inline" action="{{route('product.delete',[$product['id'],$user['id']])}}">
                                @csrf
                                @method('delete')
                                
                                <td><button  type="submit" onclick="return confirm('are you sure ?')" class="btn btn-danger input mt-1 form-control loginPass">delete product</button></td>
                            </form>
                            
                        </td>
                   </tr>
                
            @endforeach
                   
                   
               </tbody>
           </table>
           
            
        </div>
    </div>
</div>
               
        


@endsection 