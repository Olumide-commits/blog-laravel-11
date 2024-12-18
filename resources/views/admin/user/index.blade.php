@extends('layouts.main')

@section('title', 'User')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('user.create') }}" class="btn btn-primary">Create user</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
<<<<<<< HEAD
                                    <th>Username</th>
=======
                                    <th>Surname</th>
>>>>>>> origin/main
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Gender</th>
<<<<<<< HEAD
                                    <th>Image</th>
                                    <th>Role</th>
=======
>>>>>>> origin/main
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></td>
<<<<<<< HEAD
                                        <td>{{ $user->username }}</td>
=======
                                        <td>{{ $user->surname }}</td>
>>>>>>> origin/main
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->age }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->genderTitle }}</td>
<<<<<<< HEAD
                                        <td><img src="{{ $user->image ? asset('storage/' . $user->image) : asset('https://img.freepik.com/premium-psd/3d-cartoon-character-avatar-isolated-3d-rendering_235528-554.jpg?w=2000') }}" alt="" width="50" height="50"></td>

                                        <td>{{ $user->role }}</td>
=======
>>>>>>> origin/main
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- ./col -->
            </div>
<<<<<<< HEAD

    </section>

@endsection



<!-- <<img src="https://img.freepik.com/premium-psd/3d-cartoon-character-avatar-isolated-3d-rendering_235528-554.jpg?w=2000" alt="" width="50" height="50">
=======
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
>>>>>>> origin/main
