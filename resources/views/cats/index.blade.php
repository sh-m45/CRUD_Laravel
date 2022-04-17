<html>
    <head>
        <title>All Categories</title>
    </head>
    <body>
        <h1>All Categories</h1>

        @foreach ($cats as $cat)
            <h3>
                <a href='{{url("/cats/show/$cat->id")}}'>
                    {{$cat->id}} - {{$cat->name}}
                </a>
            </h3>
            <a href='{{url("/cats/edit/$cat->id")}}'>Edit</a>
            <a href='{{url("/cats/delete/$cat->id")}}'>Delete</a>
            <p>{{$cat->desc}}</p>
            <hr>
        @endforeach
    </body>
</html>