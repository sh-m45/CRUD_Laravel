<html>
    <head>
        <title>Show Categories - {{$cat->name}}</title>
    </head>
    <body>
        <h1>Show Categories</h1>

        
            <h3>{{$cat->id}} - {{$cat->name}}</h3>
            <hr>
            <p>{{$cat->desc}}</p>
            <small>created at : {{ $cat->created_at }}</small>
            <a href='{{"/cats/create"}}'>
                Back
            </a>
        
    </body>
</html>