@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                        @auth
<<<<<<< HEAD
                            <span class="breadcrumb-item active">Welcome, {{ auth()->user()->username }}!</span>
=======
                            <span class="breadcrumb-item active">Welcome, {{ auth()->user()->name }}!</span>
>>>>>>> origin/main
                            <form action="/logout" method="post" class="breadcrumb-item active">
                                @csrf
                                <button type="submit">
                                    Log out
                                </button>
                            </form>
                        @else
                            <li class="breadcrumb-item active"><a href="{{ route('register.user') }}">Register</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('login.user') }}">Log in</a></li>
                        @endauth
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
                @auth
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
<<<<<<< HEAD
                                <h3>54<sup style="font-size: 20px">%</sup></h3>
=======
                                <h3>53<sup style="font-size: 20px">%</sup></h3>
>>>>>>> origin/main

                                <p>Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Orders <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>Products</h3>
                                <p>{{ $products->count() }}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('product.index') }}" class="small-box-footer">More <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>Users</h3>

                                <p>{{ $users->count() }}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ route('user.index') }}" class="small-box-footer">More <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>Categories</h3>

                                <p>{{ $categories->count() }}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('category.index') }}" class="small-box-footer">More <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                @else
<<<<<<< HEAD
                    <p>Please, <a href="{{ route('login.user') }}" class="text-blue">get authorized</a> to see any content</p>
=======
                    <p>Please, <a href="{{ route('login.user') }}" class="text-blue">authorized</a> for watch any content</p>
>>>>>>> origin/main
                @endauth
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
