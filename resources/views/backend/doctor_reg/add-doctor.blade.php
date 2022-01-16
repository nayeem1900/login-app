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

                                        <a class="btn btn-success float-right btn-sm" href="{{route('doctor.registration.view')}}"><i class="fa fa-list"></i>Doctor List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >



                                <form method="POST" action="{{(@$editData)?route('doctor.registration.update',$editData->doctor_id):route('doctor.registration.store')}}" id="myForm" enctype="multipart/form-data" >
                                    @csrf
                                    <input type="hidden"name="id"value="{{@$editData->id}}">

                                    <div class="form-row ">

                                        <div class="col-md-4">
                                            <label>Doctor Name  <font style="color: red">*</font></label>
                                            <input type="text" name="doctor_name" value="{{@$editData['doctor']['doctor_name']}}" class="form-control form-control-sm"id="name">

                                        </div>

                                        <div class="col-md-4">
                                            <label>Doctor Degree  <font style="color: red">*</font></label>
                                            <input type="text" name="degree" value="{{@$editData['doctor']['degree']}}" class="form-control form-control-sm"id="name">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Doctor Schedule  <font style="color: red">*</font></label>
                                            <input type="text" name="schedule" value="{{@$editData['doctor']['schedule']}}" class="form-control form-control-sm"id="name">

                                        </div>



                                        <div class="col-md-4">
                                            <label>Branch <font style="color: red">*</font></label>
                                            <select name="branch_id" class="form-control form-control-sm">
                                                <option value="">Select Branch</option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}"{{(@$editData->branch_id==$branch->id)?"selected":""}}>{{$branch->name}} </option>

                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Department <font style="color: red">*</font></label>
                                            <select name="dep_id" class="form-control form-control-sm">
                                                <option value="">Select Department</option>
                                                @foreach($departments as $department)
                                                    <option value="{{$department->id}}"{{(@$editData->dep_id==$department->id)?"selected":""}}>{{$department->name}} </option>

                                                @endforeach

                                            </select>

                                        </div>


                                        <div class="col-md-4">
                                            <label>Image</label>
                                            <input type="file" name="img" class="form-control form-control-sm" id="image">

                                        </div>

                                        <div class="col-md-4"><br>
                                            <img id="showImage" src="{{(!empty($editData['doctor']['img']))?url('upload/doctor_images/'.$editData['doctor']['img']):url('upload/no_img.png')}}" style="width:100px;height:110px;border:1px solid#000;">

                                        </div>



                                    </div>



                                    <div class="form-group col-md-6"style="padding-top:30px;">
                                        <button type="submit" class="btn btn-primary btn-sm">

                                            {{(@$editData)?'Update':'Submit'}}

                                        </button>

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



    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "doctor_name": {
                        required: true,
                    },
                    "degree": {
                        required: true,
                    },
                    "schedule": {
                        required: true,

                    },

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