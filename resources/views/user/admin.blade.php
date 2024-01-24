@extends('layout.app')
@section('title')
    welcome admin : {{$user['name']}}
@endsection
@section('content')
   <div class="h1">
    welcome {{$user['name']}}

   </div>

  <div class="container">
   
    <a href="{{route("user.adminrigister_form",$user['id'])}}" type="button" class="btn btn-success input mt-1 form-control loginPass"> add admin</a>
    
    <a href="{{route("product.all",$user['id'])}}" type="button" class="btn btn-light input mt-1 form-control loginPass"> all products</a>
    <a href="{{route("user.logout",$user['id'])}}" onclick="return confirm('are you sure ?')" type="button" class="btn btn-danger input mt-1 form-control loginPass"> logout</a>
  </div>
               
        


@endsection