@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage subadmin</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">subadmin</li>
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
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>subadmin List
                                    @isset(auth()->user()->role->permission['permission']['subadmin']['add'])
                                    <a class="btn btn-success float-right btn-sm" href="{{route('subadmin.create')}}"><i class="fa fa-plus-circle"></i> Add subadmin</a>
                                    @endisset
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th> Name</th>
                                        <th>Email</th>
                                        <th> Role</th>
                                        <th>subadmin Name</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $item)

                                        <tr>
                                            <td>{{($loop->iteration)}}</td>
                                            <td>{{($item->name)}}</td>
                                            <td>{{($item->email)}}</td>
                                            <td>
                                                <span class="badge badge-pill badge-success">{{$item->role->name}}</span>
                                            </td>




                                            <td>
                                                @isset(auth()->user()->role->permission['permission']['subadmin']['edit'])
                                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('subadmin.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
                                                @endisset
                                                {{-- <a title="Delete" class="btn btn-sm btn-danger" href="{{route('users.delete',$user->id)}}"><i class="fa fa-trash"></i></a>--}}
                                                @isset(auth()->user()->role->permission['permission']['subadmin']['delete'])
                                                <a href="#deleteModal{{$item->id}}" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are You Sure Delete</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('subadmin.destroy',$item->id)}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn btn-danger" >Permanent Delete</button>

                                                                </form>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endisset


                                            </td>

                                        </tr>

                                    @endforeach

                                    </tbody>



                                </table>

                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection