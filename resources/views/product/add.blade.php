@extends('layout.app')
@section('title')
    add product
@endsection
@section('content')
   <div class="h4 text_center">
   {{$msg}}
   </div>

<div class="container">
    <form method="post" action="{{route('product.add',$user['id'])}}">
        @csrf

        <div>
            <select name="title" class="input mt-1 form-control loginPass " placeholder="title">
                <option  disabled selected>select title</option>
                <option value="phone">phone</option>
                <option value="labtob">labtob</option>
                <option value="TV">TV</option>
                <option value="computer">computer</option>
                <option value="external hard">external hard</option>
                <option value="head phone">head phone</option>
                <option value="kayboard">kayboard</option>
            </select>
            {{-- <input type="text" class="input mt-1 form-control loginPass " placeholder="title" name="title"> --}}
        </div>
        <div>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="prand" name="prand">
        </div>
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="price" name="price">
        </div>
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="num_parts" name="num_parts">
        </div>
       
        
        
        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add product</button>
    </form>
    <a href="{{route('product.all',$user['id'])}}"  type="button" class="btn btn-success input mt-1 form-control loginPass">all products</a>
</div>

@endsection 