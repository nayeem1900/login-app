@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Doctor</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Doctor</li>
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

                                @if(isset($editData))
                               <h3> Edit Doctor
                                    @else
                                    Add Doctor
                                    @endif

                                    <a class="btn btn-success float-right btn-sm" href="{{route('ibchk.doctor.view')}}"><i class="fa fa-list"></i>Doctor List</a>
                               </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >



                                <form method="POST" action="{{(@$editData)?route('ibchk.doctor.update',$editData->id):route('ibchk.doctor.store')}}" id="myForm" enctype="multipart/form-data" >
                                    @csrf

                                  {{--  <div class="form-group row">
                                        <label>Department Name</label>
                                        <div class="col-md-4">
                                            <input type="text" name="name" value="{{@$editData->name}}" class="form-control"id="name">
                                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                        </div>
                                    </div>--}}
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group row">
                                                <label for="role">Select Department</label>
                                                <select class="form-control" name="ibchkdep_id" id="ibchkdep_id">
                                                    <option value="">Select department</option>
                                                    @foreach($ibchkdeps as $ibchkdep)
                                                        <option value="{{$ibchkdep->id}}"{{(@$editData->ibchkdep_id==$ibchkdep->id)?"selected":""}}>{{$ibchkdep->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>



                                        </div>
                                        <div class="col-md-9">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>

                                                    <th>Doctor Name</th>
                                                    <th>Doctor Degree</th>
                                                    <th>Doctor Sechedule</th>
                                                    <th>Doctor Image</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>

                                                   <td>
                                                       <input type="text" name="name" value="{{@$editData->name}}" class="form-control"id="name">

                                                   </td>
                                                    <td>
                                                        <input type="text" name="ibchkdegree" value="{{@$editData->ibchkdegree}}" class="form-control"id="">

                                                    </td>

                                                    <td>
                                                        <input type="text" name="ibchktime" value="{{@$editData->ibchktime}}" class="form-control"id="">


                                                    </td>

                                                    <td>
                                                        <input type="file" name="image" class="form-control"id="image">
                                                        <img id="showImage" src="{{(!empty($editData->image))?url('upload/doctor_images/'.$editData->image):url('upload/no_img.png')}}" style="width:150px;height:160px;border:1px solid#000;">
                                                      {{--  <input type="file" name="image" class="form-control"id="image">--}}
                                                    </td>
                                                </tr>


                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="btn btn-primary">

                                               {{(@$editData)?'Update':'Submit'}}

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