@extends('layouts.main')

@section('title', 'User create')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Edit</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">User Edit</li>
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
<<<<<<< HEAD
                <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
=======
                <form action="{{ route('user.update', $user->id) }}" method="post">
>>>>>>> origin/main
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="name" value="{{ $user->name ?? old('name') }}" class="form-control"
                               placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" value="{{ $user->username ?? old('username') }}"
                               class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="text" name="age" value="{{ $user->age ?? old('age') }}" class="form-control"
                               placeholder="Age">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" value="{{ $user->address ?? old('address') }}"
                               class="form-control" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Gender</option>
                            <option {{ $user->gender == 0 || old('gender') == 0 ? ' selected' : '' }} value="0">Men
                            </option>
                            <option {{ $user->gender == 1 || old('gender') == 1 ? ' selected' : '' }} value="1">Women
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
<<<<<<< HEAD
                        <select name="role" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Role</option>
                            <option {{ $user->role == 'Guest' || old('role') == 'Guest' ? ' selected' : '' }} value="Guest">Guest</option>
                            <option {{ $user->role == 'Admin' ||old('role') == 'Admin' ? ' selected' : '' }} value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" name="image" for="exampleInputFile">Choose photo</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Update">
=======
                        <input type="submit" class="btn btn-primary" value="Edit">
>>>>>>> origin/main
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
