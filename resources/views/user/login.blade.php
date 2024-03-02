@extends('layout.app')
@section('title')
    login
@endsection
@section('content')
   <div class="h1">
    {{$msg}}

   </div>

   <form method="post" action="{{route('user.login')}}">
    @csrf
    
    <div>
        <input type="email" class="input mt-1 form-control loginPass" placeholder="email" name="email">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="card_number" name="card_number" value="null">
    </div>
    
    
    <div>
        <input type="password" class="input mt-1 form-control loginPass" placeholder="password" name="password">
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">login</button>
</form>
<div class="container">
    <h6>
       don't have an account ?   
    </h6>    
    <div class="card">
         <a href="{{route("user.rigister_form")}}" type="button" class="btn btn-success input mt-1 form-control loginPass">rigister</a>
    </div>
</div> 

        


@endsection
