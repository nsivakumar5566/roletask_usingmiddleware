@extends('layout.app')
@section('title', 'Login')
@section('content')

<div class="min-vh-100 h-100 d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
            @if ($message = Session::get('danger'))
                        <p class="text-center text-danger">{{ $message }}</p>
                        @endif


                        @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        <h5>Email: {{ Auth::user()->email }}</h5>
                        <h5>Name: {{ Auth::user()->name }}</h5>
                        @endif
                        @if(Auth::user()->role_id == 3)
                        <h5>Role: {{ Auth::user()->role_id }}</h5>
                        @endif


   
      
       <a href="{{route('logout')}}">logout</a>
       <a href="{{route('seller')}}">seller</a>
       <a href="{{route('admin')}}">Admin</a>
            </div>
        </div>
    </div>
</div>

@endsection