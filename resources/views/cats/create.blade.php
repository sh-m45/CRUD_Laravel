<html>

<head>
    <title>Add Category</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <h1 class="titelPage w-100 text-center py-2">Categories List</h1>
        <form method="POST" action='{{url("/cats/store")}}'>
            @csrf
            <div class="form-group ">
                <label>Name</label>
                <input name="name" type="text" class="form-control" />
            </div>

            <div class="form-group">
                <label> Title </label>
                <input id="ageEmp" name="img" type="text" class="form-control" />
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>

            </div>

            <button id="submitBtn" type="submit" class="btn btn-success mb-3 mt-3 float-end">Add Item</button>
            <div class="clearfix"></div>
            <!-- <div class="searchDiv mb-4">
                <input id="searchInput " class="form-control" placeholder="if you need to search for a certain item of data" />
            </div> -->
        </form>
    </section>
    <div>
        <table class="container table table-striped table-hover">
            <thead>
                <th>Name</th>
                <th>Title</th>
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
                    <td><a class="btn btn-warning" href='{{url("/cats/edit/$cat->id")}}'>Update</a></td>
                    <td><a class="btn btn-danger" href='{{url("/cats/delete/$cat->id")}}'>Delete</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>