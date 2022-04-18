<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #cccaca; font-style:italic">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <a class="navbar-brand" href="#">CRUD Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0 d-flex justify-content-end w-100">
            <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mx-3">
            <a class="nav-link" href="#">Add</a>
            </li>
            <li class="nav-item mx-3">
            <a class="nav-link" href="#">Update</a>
            </li>
            <li class="nav-item mx-3">
            <a class="nav-link" href="#">Delete</a>
            </li>
            <li class="nav-item mx-3">
            <a class="nav-link" href="#">Show</a>
            </li>
            <li class="nav-item mx-3">
            <a class="nav-link " href="#">Service</a>
            </li>
            
        </ul>
       
        </div>
    </div>
    </nav>
    <section>
        @yield('content')
    </section>
</body>
