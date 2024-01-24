@extends('layout.app')
@section('title')
    Bill
@endsection
@section('content')
   <div class="h6">
    your items

   </div>

    <div class="container">
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">product id</th>
                    <th scope="col">user name</th>
                    <th scope="col">product title</th>
                    <th scope="col">product prand</th>
                    
                    <th scope="col">no.parts</th>
                    <th scope="col">total price</th>
                    <th scope="col">...</th>
                
                </tr>
            </thead>
            <tbody>
                    <input type="text" name="{{$all=0}}" id="" hidden>
                    
                    @foreach ($userproducts as $userproduct)
                    <tr>
                        <th scope="row">{{$userproduct['product_id']}}</th>
                    
                        <input type="text" name="{{$all=$all+$userproduct['total_price']}}" id="" hidden>
                        <td scope="col">{{$userproduct['user_name']}}</td>
                        <td scope="col">{{$userproduct['product_name']}}</td>
                        <td scope="col">{{$userproduct['prand']}}</td>
                        <td>{{$userproduct['num_parts']}}</td>
                        <td>{{$userproduct['total_price']}}</td>
                        <form method="POST" style="display: inline" action="{{route('userproduct.delete',[$userproduct['user_id'],$userproduct['product_id']])}}">
                            @csrf
                            @method('delete')
                            <td><button  type="submit" onclick="return confirm('are you sure ?')" class="btn btn-danger input mt-1 form-control loginPass">no will not buy it</button></td>
                        </form>

                    
                </th>
                
                
            </tr>
            
            @endforeach
        
            <a href="{{route('user.payform',[$user['id'],$all])}}" type="button" class="btn btn-warning input mt-1 form-control loginPass">agree & pay </a>{{-- //integration with bank system --}}
            <a href="{{route('userproduct.all',$user['id'])}}" type="button" class="btn btn-primary input mt-1 form-control loginPass">return to products page</a>
        

        <h6>
            {{$user['name']}}
            you have to pay {{$all }} LE
        </h6>
            
    
            
            
        </tbody>

        </table>
        
    </div>
               
        


@endsection 