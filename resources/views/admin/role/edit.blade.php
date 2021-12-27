@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Role</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Role</li>
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

                <!-- /.row -->
                <!-- Main row -->
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>Add Role

                                    <a class="btn btn-success float-right btn-sm" href="{{route('role.index')}}"><i class="fa fa-list"></i>Role List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >





                                <form method="post" action="{{route('role.update',$role->id)}}"enctype="multipart/form-data" >
                                    @csrf
                                    @method('put')
                                    @include('backend.layouts.message')

                                    <div class="form-group row">
                                        <label for="Role Name" class="col-md-4 col-form-label text-md-right">Edit Role</label>
                                        <div class="col-md-4">
                                            <input type="text" name="name" value="{{$role->name}}" class="form-control"id="name"placeholder="Enter Role Name">
                                        </div>
                                    </div>




                                    <div class="form-group row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update') }}
                                            </button>

                                        </div>
                                    </div>
                                </form>



                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>






@endsection