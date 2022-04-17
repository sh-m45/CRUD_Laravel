<html>

<head>
    <title>Edit Category</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <h1 class="titelPage w-100 text-center py-2">Edit Categories - {{$cat->name}}</h1>
        <form method="POST" action='{{url("/cats/update/$cat->id")}}'>
            @csrf
            <div class="form-group ">
                <label>Name</label>
                <input name="name" type="text" class="form-control" value="{{$cat->name}}" />
            </div>

            <div class="form-group">
                <label> Title </label>
                <input id="ageEmp" name="img" type="text" class="form-control" value="{{$cat->img}}" />
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3">{{$cat->desc}}</textarea>
  
            </div>

            <button id="submitBtn" type="submit" class="btn btn-success mb-3 mt-3 float-right">update Item</button>
            <div class="clearfix"></div>
            
        </form>
    </section>
    
</body>

</html>