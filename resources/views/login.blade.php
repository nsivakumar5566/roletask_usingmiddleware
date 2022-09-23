@extends('layout.app')
@section('title', 'Login')
@section('content')

<div class="min-vh-100 h-100 d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card p-5">
                    @if ($message = Session::get('success'))
                    <p class="text-center text-success">{{ $message }}</p>
                    @endif
                    @if ($message = Session::get('danger'))
                    <p class="text-center text-danger">{{ $message }}</p>
                    @endif
                    <form action="{{route('signin')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="w-100 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection