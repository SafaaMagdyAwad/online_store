@extends('layout.app')
@section('title')
    welcome page
@endsection
@section('content')
   <div class="h1">
    welcome

   </div>

   <td>
    <div class="container">
      <div class="row">
        <div class="col_3"></div>
        <div class="col_3">
          
          <a href="{{route('user.rigister_form')}}" type="button" class="btn btn-success input mt-1 form-control loginPass">rigister</a>
        </div>
        <div class="col_3">
          <a href="{{route('user.login_form')}}" type="button" class="btn btn-danger input mt-1 form-control loginPass">login</a>

        </div>
        <div class="col_3"></div>
      </div>
    </div>
  </td>
               
        


@endsection