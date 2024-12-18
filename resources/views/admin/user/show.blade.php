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
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit user</a>
                            </div>
                            <form action="{{ route('user.delete', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
<<<<<<< HEAD
                                    <td>Username</td>
                                    <td>{{ $user->username }}</td>
=======
                                    <td>Surname</td>
                                    <td>{{ $user->surname }}</td>
>>>>>>> origin/main
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td>{{ $user->age }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $user->address }}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{ $user->genderTitle }}</td>
                                </tr>
                                <tr>
                                    <td>Image</td>
<<<<<<< HEAD
                                    <td><img src="{{ $user->image ? asset('storage/' . $user->image) : asset('https://img.freepik.com/premium-psd/3d-cartoon-character-avatar-isolated-3d-rendering_235528-554.jpg?w=2000') }}" alt="" width="50" height="50"></td>
=======
                                    <td><img src="{{ $user->image }}" width="50" height="50" alt=""></td>
                                </tr>
>>>>>>> origin/main
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
<<<<<<< HEAD


=======
>>>>>>> origin/main
