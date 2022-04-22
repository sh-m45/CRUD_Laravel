<html>

@extends('layouts.app')
@section('title')
Edit item
@endsection

@section('content')
<section class="container">
    <h1 class="titelPage w-100 text-center py-2">Edit Categories - {{$cat->name}}</h1>
    <form method="POST" action='{{url("/cats/update/$cat->id")}}' enctype="multipart/form-data">
        @csrf
        <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">Name : </label>
            <input name="name" type="text" class="form-control" value="{{$cat->name}}" />
        </div>

        <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">Title : </label>
            <input name="Title" type="text" class="form-control" value="{{$cat->Title}}" />
        </div>

        <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">Image : </label>
            <input id="ageEmp" name="img" type="file" class="form-control" />
        </div>

        <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">created_by : </label>
            <input name="user_id"  class="form-control" value="{{$cat->user_id}}" />
        </div>

        <div class="form-group my-3">
            <label style="font-weight: 500" class="mb-2">Description : </label>
            <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3">{{$cat->desc}}</textarea>

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
            <button id="submitBtn" type="submit" class="btn btn-success mb-3 mt-3 ">Update Item</button>
        </div>


    </form>
</section>
@endsection


</html>