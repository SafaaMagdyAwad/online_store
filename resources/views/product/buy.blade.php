@extends('layout.app')
@section('title')
    process details
@endsection
@section('content')
   <div class="h6">
    how many peice would you like to own:

   </div>

<div class="container">
    
    <form method="post" action="{{route('client_product.buy',[4,$user['id'],$product['id']])}}">
        @csrf
       
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="how many peices" value="1" name="num_parts">
        </div>
        
       
        
        
        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">vertify </button>
    </form>


</div>
               
        


@endsection 