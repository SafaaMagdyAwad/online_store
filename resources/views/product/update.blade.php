@extends('layout.app')
@section('title')
    update product
@endsection
@section('content')
   <div class="h6">
    you can change any of them or all :)

   </div>

<div class="container">
    <form method="post" action="{{route('product.update',[$product['id'],$user['id']])}}">
        @csrf
       @method('put')
        <div>
            <label htmlFor='password' className='text-white'>price</label>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="{{$product['price']}}" name="price">
        </div>
        <div>
            <label htmlFor='password' className='text-white'>number of peices</label>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="{{$product['num_parts']}}" name="num_parts">
        </div>
       
        
        
        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update product</button>
    </form>
    <a href="{{route('product.all',$user['id'])}}"  type="button" class="btn btn-success input mt-1 form-control loginPass">all products</a>
</div>
               
        


@endsection 