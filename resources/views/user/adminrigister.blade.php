@extends('layout.app')
@section('title')
    add admin
@endsection
@section('content')
   <div class="h1">
    {{$msg}}

   </div>

<div class="container">
    <form method="post" action="{{route('user.adminrigister',$user['id'])}}">
        @csrf
        <div>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="name" name="name">
        </div>
        <div>
            <input type="email" class="input mt-1 form-control loginPass" placeholder="email" name="email">
        </div>
        
        
        <div>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="auth" name="auth" value="admin" hidden>
        </div>
        <div>
            <input type="password" class="input mt-1 form-control loginPass" placeholder="password" name="password">
        </div>
        <div>
            <input type="password" class="input mt-1 form-control loginPass" placeholder="repassword" name="password-confirmation">
        </div>
        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add admin</button>
    </form>
    <a href="{{route('product.all',$user['id'])}}"  type="button" class="btn btn-success input mt-1 form-control loginPass">all products</a>

</div>
               
        


@endsection 