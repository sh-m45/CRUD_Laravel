<html>
@extends('layouts.app')
@section('title')
Show Category
@endsection

@section('content')


<body style="background-color: #cccaca;">

    <h1 class="text-center mt-2 ">Show Category</h1>


    <section class="w-100 d-flex justify-content-center align-content-center ">
        <div class="card container  w-50 mt-3 mb-4 pt-2">
            <div class="card-body ">
                <h3 class="text-center">{{$cat->id}} - {{$cat->name}}</h3>
                <hr>

                <!-- new update  -->
                <!-- <p><span style="font-weight: 700">Title:</span> {{$cat->img}}</p> -->
            
                <img src='{{asset("uploads/$cat->img")}}' alt="imgTable" class="w-100 p-3"/>


                <p><span style="font-weight: 700">Description:</span> {{$cat->desc}}</p>

                <p><span style="font-weight: 700">created at:</span>  {{ $cat->created_at->format('y-m-d') }}</p>
                {{--<p><span style="font-weight: 700">created at:</span> {{$mutable}}</p>--}}
                <div class="d-flex justify-content-end w-100">
                    <a class="btn btn-secondary" href='{{"/cats/create"}}'>
                        Back Home
                    </a>
                </div>
            </div>
        </div>
    </section>


    @endsection

</html>