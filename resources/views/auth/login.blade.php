<html>

@extends('layouts.app')
@section('title')
Login Form
@endsection

@section('content')
<section class="container">
    <h1 class="titelPage w-100 text-center py-2"> Login </h1>
    <form method="POST" action='{{url("/login")}}' enctype="multipart/form-data">
        @csrf

        <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">Email : </label>
            <input name="email" type="email" class="form-control" />
        </div>

        <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">Password : </label>
            <input name="password" type="password" class="form-control" />
        </div>

        @if($errors->any())
        <div class="alter alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="w-100 d-flex justify-content-end">
            <button id="submitBtn" type="submit" class="btn btn-success mb-3 mt-3 ">Login</button>
        </div>


    </form>
</section>
@endsection


</html>