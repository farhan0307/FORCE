<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">To-Do List</a>
        </ul>
      
      </nav>
      <div class="text-right">
        <a href = "pictures/create" class="btn btn-dark mt-2 mr-5">Save Task Picture</a>
      </div>
    <div class = "container">
        <h1>TO-DO List</h1>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3"> 
                    <form method="POST" action="/pictures/store" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>
                        <div>
                            <label>Task</label>
                            <textarea class="form-control" rows="5" name="Assign Task"></textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label>picture</label>
                            <input type="file" name="picture" class="form-control"/>
                        </div> --}}
                        <button type="submit" class="btn btn-dark mt-2">Save</button>
                    </form>

                </div>
                
            </div>
        </div>
    </div>
</body>
</html>