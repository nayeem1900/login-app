@extends('backend.layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Students</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Student</li>
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
                                <h3>Doctor List
                                    @isset(auth()->user()->role->permission['permission']['doctor_reg']['add'])
                                        <a class="btn btn-success float-right btn-sm" href="{{route('doctor.registration.add')}}"><i class="fa fa-plus-circle"></i> Add Doctor</a>
                                    @endisset
                                </h3>

                            </div><!-- /.card-header -->

                            <div class="card-body">

                                <form method="get" action="{{route('doctor.branch.dept.wise')}}" id="myForm">
                                    <div class="form-row">

                                        <div class="col-md-4">
                                            <label>Branch <font style="color: red">*</font></label>
                                            <select name="branch_id" class="form-control form-control-sm">
                                                <option value="">Select Branch</option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}"{{(@$branch_id==$branch->id)?"selected":""}}>{{$branch->name}} </option>

                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Class <font style="color: red">*</font></label>
                                            <select name="dep_id" class="form-control form-control-sm">
                                                <option value="">Select Department</option>
                                                @foreach($departments as $department)
                                                    <option value="{{$department->id}}"{{(@$dep_id==$department->id)?"selected":""}}>{{$department->name}} </option>

                                                @endforeach

                                            </select>

                                        </div>
                                        <div class="col-md-4" style="padding-top:29px;">

                                            <button type="submit"class="btn btn-primary btn-sm" name="search">Search</button>
                                        </div>

                                    </div>


                                </form>

                            </div>
                            <div class="card-body">


                                    <table id="example1" class="table table-bordered table-hover">

                                        <thead>
                                        <tr>
                                            <th width="7%">SL</th>
                                            <th>Name</th>
                                            <th>Degree</th>
                                            <th>Schedule</th>
                                            <th>Branch</th>
                                            <th>Department</th>
                                            <th>Image</th>
                                            <th width="14%">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allData as $key=>$value)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$value['doctor']['doctor_name']}}</td>
                                                <td>{{$value['doctor']['degree']}}</td>
                                                <td>{{$value['doctor']['schedule']}}</td>
                                                <td>{{$value['branch']['name']}}</td>
                                                <td>{{$value['department']['name']}}</td>

                                                <td>
                                                    <img  src="{{(!empty($value['doctor']['img']))?url('upload/doctor_images/'.$value['doctor']['img']):url('upload/no_img.png')}}" style="width:70px;height:80px;border:1px solid#000;">

                                                </td>


                                                <td>
                                                    @isset(auth()->user()->role->permission['permission']['doctor_reg']['edit'])
                                                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('doctor.registration.edit',$value->doctor_id)}}"><i class="fa fa-edit"></i></a>

                                                    @endisset
                                                    <a target="_blank" title="Details" class="btn btn-sm btn-info" href="{{route('doctor.registration.details',$value->doctor_id)}}"><i class="fa fa-eye"></i></a>



                                                </td>

                                            </tr>
                                        @endforeach


                                        </tbody>



                                    </table>


                            {{--   @else
                                    <table id="example1" class="table table-bordered table-hover">

                                        <thead>
                                        <tr>
                                            <th width="7%">SL</th>
                                            <th>Name</th>
                                            <th>Degree</th>
                                            <th>Schedule</th>
                                            <th>Branch</th>
                                            <th>Department</th>
                                            <th>Image</th>

                                            <th width="14%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($allData as $key=>$value)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$value['doctor']['doctor_name']}}</td>
                                                <td>{{$value['doctor']['degree']}}</td>
                                                <td>{{$value['doctor']['schedule']}}</td>
                                                <td>{{$value['branch']['name']}}</td>
                                                <td>{{$value['department']['name']}}</td>

                                                <td>
                                                    <img  src="{{(!empty($value['doctor']['img']))?url('upload/doctor_images/'.$value['doctor']['img']):url('upload/no_img.png')}}" style="width:70px;height:80px;border:1px solid#000;">

                                                </td>
                                                <td>{{($value->dep_id)}}</td>
                                                <td>{{($value->branch_id)}}</td>

                                                <td>
                                                    <a title="Edit" class="btn btn-sm btn-primary" href="{{route('doctor.registration.edit',$value->doctor_id)}}"><i class="fa fa-edit"></i></a>

                                                    <a target="_blank" title="Details" class="btn btn-sm btn-info" href="{{route('doctor.registration.details',$value->doctor_id)}}"><i class="fa fa-eye"></i></a>



                                                </td>

                                            </tr>
                                        @endforeach


                                        </tbody>



                                    </table>
                                @endif
---}}

                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {

                    "branch_id": {
                        required: true,

                    },
                    "dep_id": {
                        required: true,

                    }
                },

                messages: {


                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

@endsection
