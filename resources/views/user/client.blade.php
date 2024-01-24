@extends('layout.app')
@section('title')
    client page
@endsection
@section('content')
   <div class="h1">
       <h5>
        welcome {{$user['name']}} {{$msg}}    
       </h5>
       <div class="row">
        <div class="col-6">
            <a href="{{route('user.bill',$user['id'])}}" type="button" class="btn btn-success input mt-1 form-control loginPass">show my card</a>

        </div>
        <div class="col-6">
            <a href="{{route('user.logout',$user['id'])}}" onclick="return confirm('are you sure ?')" type="button" class="btn btn-danger input mt-1 form-control loginPass">logout</a>

        </div>
       </div>
       <div class="card">
            <form style="display: inline" method="post" action="{{route('product.search',$user['id'])}}">
                @csrf
                <div>
                    <input type="search" class="form-controll input mt-1 form-control loginPass"  placeholder="search title" name="title">
                </div>
                
                {{-- <button type="submit" style="display: inline" class="btn btn-warning  mb-2  ">search</button> --}}

             </form>
       </div>
       
    


   </div>

            <div class="container">
                    <div class='row '> 
                        @foreach ($products as $product)
                            <div class='col-4 mb-3'>
                                <div class="card">
                                    <div class="container ">
                                        <div class="h6 text-danger"> product title :{{$product['title']}} </div>
                                        <p>prand : {{$product['prand']}} </p>
                                        <p>price : {{$product['price']}} </p>
                                        <p>avilable num of parts : {{$product['num_parts']}}</p>
                                        <a href="{{route('client_product_form.buy',[$user['id'],$product['id']])}}" type="button" class="btn btn-warning input mt-1 form-control loginPass">add to card</a>
                                    </div>
                                    

                                </div>
                            </div>
                         @endforeach
                    </div>
                
            </div>
        


@endsection 