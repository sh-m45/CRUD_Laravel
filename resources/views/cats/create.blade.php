<html>

@extends('layouts.app')
@section('title')
Create item
@endsection

@section('content')
<section class="container">
    <h1 class="titelPage w-100 text-center py-2">Categories List</h1>
    <form method="POST" action='{{url("/cats/store")}}' enctype="multipart/form-data">
        @csrf
        <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">Name : </label>
            <input name="name" type="text" class="form-control" />
        </div>

        <!-- <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">Titel : </label>
            <input id="ageEmp" name="img" type="text" class="form-control" />
        </div> -->

        <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">Image : </label>
            <input id="ageEmp" name="img" type="file" class="form-control" />
        </div>


        <div class="form-group my-3">
            <label style="font-weight: 500 " class="mb-2">Description : </label>
            <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
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

        <button id="submitBtn" type="submit" class="btn btn-primary mb-3 mt-3 float-end">Add Item</button>
        <div class="clearfix"></div>

    </form>
</section>

<div>
    <table class="container table table-dark table-striped table-hover">
        <thead>
            <th>Name</th>
            <!-- new update  -->
            <th>Image</th>
            <th>Description</th>
            <th> </th>
            <th> </th>
            <th> </th>
        </thead>

        <tbody id="tableBody">
            @foreach($cats as $cat)
            <tr>
                <td>{{$cat->name}}</td>
                <td>{{$cat->img}}</td>
                <td>{{$cat->desc}}</td>
                <td><a class="btn btn-Primary" href='{{url("/cats/show/$cat->id")}}'>Show</a></td>
                <td><a class="btn btn-secondary" href='{{url("/cats/edit/$cat->id")}}'>Update</a></td>
                <td><a class="btn btn-danger" href='{{url("/cats/delete/$cat->id")}}' onclick="return confirm('Are You Sure ?')">Delete</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <!-- hna ana b3ml pagination  -->
    <div class="container d-flex justify-content-end">
        {{$cats->links()}}
    </div>

</div>
@endsection

</html>