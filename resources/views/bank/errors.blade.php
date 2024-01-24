@extends('layout.app')
@section('title')
    -_-
@endsection
@section('content')
   <div class="h1">
    welcome

   </div>

<div class="container">
    <div class="card">
        <h1>
            {{$msg}}
        </h1>
        <a href="{{route('user.bill',$user['id'])}}" type="button" class="btn btn-success input mt-1 form-control loginPass">show my bill</a>

    </div>
</div>
               
        


@endsection 
@section('link')
    
@endsection