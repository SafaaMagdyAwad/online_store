
@extends('layout.app')
@section('title')
    pay vertification
@endsection
@section('content')
   <div class="h1">
    welcome

   </div>


   <div class="container">
    <form method="post" action="{{route('user.pay',[$user['id'],$total_price])}}">
        @csrf
        <div>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="{{$user['name']}}" disabled >
        </div>
        <div>
            <input type="password" class="input mt-1 form-control loginPass" placeholder="card_ password" name="password">
        </div>
        
        
        
        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">pay</button>
    </form>
</div>     
        


@endsection 