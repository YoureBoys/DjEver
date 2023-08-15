@extends('admin.admin_master')

@section('admin')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">
                                <a href="/dashboard">Home</a>
                            </li>
                            <li class="breadcrumb-item">Administator</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <h1 class="text-center">Administator DjEver </h1>
        <div class="container">
            <a href="/tambahdata" type="button" class="btn btn-success">Tambah +</a>


            <div class="row g-3 align-items-center mt-2">
                <div class="col-auto">
                    <form action="/db" method="GET">
                        <input type="search" id="inputPassword6" name="search" class="form-control"
                            aria-describedby="passwordHelpInline">
                    </form>
                </div>
            </div>
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Last Created</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + $data->firstItem() }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->role }}</td>
                                <td>{{ $row->created_at->format('D M Y') }}</td>
                                <td>
                                    <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"
                                        data-username="{{ $row->name }}"><i class="fas fa-trash-alt"></i>
                                    Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
        {{-- JQuery --}}
        <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
            integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
        {{-- End JQuery --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        </body>

        <script>
            $('.delete').click(function() {
                var dbid = $(this).attr('data-id');
                var username = $(this).attr('data-username');


                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this db with username " + username +
                            " ",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "/delete/" + dbid + ""
                            swal("Sorry! your data has been successfully deleted!", {
                                icon: "success",
                            });
                        } else {
                            swal("data was not deleted!");
                        }
                    });
            });
        </script>
    </div>
@endsection
