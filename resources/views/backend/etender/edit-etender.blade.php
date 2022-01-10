@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Etender</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Etender</li>
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
                                <h3>Add Etender

                                    <a class="btn btn-success float-right btn-sm" href="{{route('etenders.view')}}"><i class="fa fa-list"></i>Etender List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >





                                <form method="POST" action="{{route('etenders.update',$editData->id)}}"enctype="multipart/form-data" >
                                    @csrf
                                    @include('backend.layouts.message')
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Date</label>
                                        <div class="col-md-4">
                                            <input type="date" name="t_date" value="{{$editData->t_date}}" class="form-control"id="t_date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Deadline</label>
                                        <div class="col-md-4">
                                            <input type="date" name="deadline" value="{{$editData->deadline}}" class="form-control"id="deadline">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Tender Name</label>
                                        <div class="col-md-4">
                                            <input type="text" name="title"value="{{$editData->title}}" class="form-control"id="title">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-4">
                                            <input type="file" name="t_download" class="form-control"id="t_downoad">
                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                        <img id="showImage" src="{{(!empty($editData->t_download))?url('upload/etender_images/'.$editData->t_download):url('upload/no_img.png')}}" style="width:150px;height:160px;border:1px solid#000;">
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