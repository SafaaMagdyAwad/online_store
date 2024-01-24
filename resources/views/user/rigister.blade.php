@extends('layout.app')
@section('title')
    rigister
@endsection
@section('content')
   <div class="h1">
    {{$msg}}

   </div>

   <form method="post" action="{{route('user.rigister')}}">
    @csrf
    <div>
        <input type="text" class="form-controll input mt-1 form-control loginPass" placeholder="name" name="name">
    </div>
    <div>
        <input type="email" class="form-controll input mt-1 form-control loginPass" placeholder="email" name="email">
    </div>
    <div>
        <input type="text" class="form-controll input mt-1 form-control loginPass" placeholder="card_number" name="card_number">
    </div>
    <div>
        <input type="text" class="form-controll input mt-1 form-control loginPass" placeholder="location" name="location">
    </div>
    <div>
        <input type="text" class="form-controll input mt-1 form-control loginPass" placeholder="auth" name="auth" value="user" hidden>
    </div>
    <div>
        <input type="password" class="form-controll input mt-1 form-control loginPass" placeholder="password" name="password">
    </div>
    <div>
        <input type="password" class="form-controll input mt-1 form-control loginPass" placeholder="repassword" name="confirm-password">
    </div>
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">rigister</button>
</form>
               
    <div class="container">
        <h6>
            have an account    
        </h6>    
        <div class="card">
             <a href="{{route("user.login_form")}}" type="button" class="btn btn-success input mt-1 form-control loginPass"> login</a>
        </div>
    </div> 


@endsection