<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-4">Edit Data</h1>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->username }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->password }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Role</label>
                                <select class="form-select" name="role" aria-label="Default select example">
                                    <option selected>{{ $data->role }}</option>
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                  </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>



