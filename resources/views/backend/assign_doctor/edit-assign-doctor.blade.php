


@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Assign Doctor department</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Assign department</li>
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
                                    <h3> Edit Assign Doctor Department
                                        @else
                                            Add Assign Doctor Department
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href="{{route('assign.doctor.view')}}"><i class="fa fa-list"></i>Assign Doctor Department List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >
                                <form method="POST" action="{{route('assign.doctor.update',$editData->branch_id)}}" enctype="multipart/form-data" id="myForm" >
                                    @csrf

                                    <div class="form-row">

                                        <div class="form-group row col-md-3">
                                            <label>Branch Name</label>

                                            <select name="branch_id"  class="form-control">
                                                <option value="">Select Branch</option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}" {{($editData->branch_id==$branch->id)?"selected":""}}>{{$branch->name}}</option>


                                                @endforeach
                                            </select>


                                        </div>


                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Department</label>

                                            <select name="dep_id"class="form-control">
                                                <option value="">Select Department</option>
                                                @foreach($departments as $department)
                                                    <option value="{{$department->id}}"{{($editData->dep_id==$department->id)?"selected":""}}>{{$department->name}}</option>
                                                @endforeach
                                            </select>


                                        </div>
                                        <div class="form-group col-md-2 ">
                                            <label>Doctor Name</label>

                                            <input type="text" name="doctor_name" value="{{$editData->doctor_name}}"class="form-control">
                                        </div>
                                        <div class="form-group col-md-2 ">
                                            <label>Degree</label>

                                            <input type="text" name="degree" value="{{$editData->degree}}" class="form-control">
                                        </div>
                                        <div class="form-group col-md-2 ">
                                            <label>Doctor Appointment Schedule</label>

                                            <input type="text" name="schedule" value="{{$editData->schedule}}" class="form-control">
                                        </div>
                                        <div class="form-group col-md-2 ">
                                            <label>Doctor Image</label>

                                            <input type="file" name="img" class="form-control" id="image">
                                        </div>
                                        <div class="col-md-2">

                                            <img id="showImage" src="{{(!empty($editData->img))?url('upload/doctor_images/'.$editData->img):url('upload/no_img.png')}}" style="width:150px;height:160px;border:1px solid#000;">
                                        </div>

                                    </div>










                                    <button type="submit" class="btn btn-primary">

                                        {{(@$editData)?'Update':'Submit'}}

                                    </button>



                                </form>







                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>



    {{-- extra add item --}}


    {{--validation--}}
    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "branch_id": {
                        required: true,
                    },
                    "dep_id[]": {
                        required: true,

                    },
                    "doctor_name[]": {
                        required: true,

                    },
                    "degree[]": {
                        required: true,

                    },
                    "schedule[]": {
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

















{{--
@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Assign Subject</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Assign Subject</li>
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
                                    <h3> Edit Assign Department
                                        @else
                                            Add Assign Department
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href="{{route('assign.doctor.view')}}"><i class="fa fa-list"></i>Assign Department List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >
                                <form method="POST" action="{{route('assign.doctor.update',$editData['0']->branch_id)}}" enctype="multipart/form-data" id="myForm" >
                                    @csrf
                                    <div class="add_item">
                                        <div class="form-row">

                                            <div class="form-group row col-md-3">
                                                <label>Branch Name</label>

                                                <select name="branch_id"class="form-control">
                                                    <option value="">Select Branch</option>
                                                    @foreach($branches as $branch)
                                                        <option value="{{$branch->id}}" {{($editData['0']->branch_id==$branch->id)?"selected":""}}>{{$branch->name}}</option>
                                                    @endforeach
                                                </select>


                                            </div>


                                        </div>
                                        @foreach($editData as $edit)
                                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label>Department</label>

                                                        <select name="dep_id[]"class="form-control">
                                                            <option value="">Select Department</option>
                                                            @foreach($departments as $department)
                                                                <option value="{{$department->id}}"{{($edit->dep_id==$department->id)?"selected":""}}>{{$department->name}}</option>
                                                            @endforeach
                                                        </select>


                                                    </div>
                                                    <div class="form-group col-md-2 ">
                                                        <label>Doctor Name</label>

                                                        <input type="text" name="doctor_name[]" value="{{$edit->doctor_name}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-2 ">
                                                        <label>Degree</label>

                                                        <input type="text" name="degree[]" value="{{$edit->degree}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-2 ">
                                                        <label>Doctor Appointment Schedule</label>

                                                        <input type="text" name="schedule[]" value="{{$edit->schedule}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-2 ">
                                                        <label>Doctor Image</label>

                                                        <input type="file" name="img[]" value="{{$edit->img}}" class="form-control">
                                                    </div>



                                                    <div class="form-group clo-md-1" style="padding-top:30px;">
                                                        <div class="form-row">

                                                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                                                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>




                                    <button type="submit" class="btn btn-primary">

                                        {{(@$editData)?'Update':'Submit'}}

                                    </button>



                                </form>







                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

    <div style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">

                <div class="form-row">

                    <div class="form-group col-md-3">
                        <label>Departmentt</label>

                        <select name="subject_id[]"class="form-control">
                            <option value="">Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>


                    </div>
                    <div class="form-group col-md-2 ">
                        <label>Doctor Name</label>

                        <input type="text" name="doctor_name[]"class="form-control">
                    </div>
                    <div class="form-group col-md-2 ">
                        <label>Degree</label>

                        <input type="text" name="degree[]"class="form-control">
                    </div>
                    <div class="form-group col-md-2 ">
                        <label>Doctor Appointment Schedule</label>

                        <input type="text" name="schedule[]"class="form-control">
                    </div>
                    <div class="form-group col-md-2 ">
                        <label>Doctor Image</label>

                        <input type="file" name="img[]"class="form-control">
                    </div>

                    <div class="form-group col-md-1" style="padding-top: 30px">

                        <div class="form-row">

                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>

    --}}
{{-- extra add item --}}{{--


    <script type="text/javascript">


        $(document).ready(function(){

            var counter = 0;
            $(document).on("click",".addeventmore",function(){
                var whole_extra_item_add=$("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click",".removeeventmore",function(event){
                $(this).closest("#delete_whole_extra_item_add").remove();
                counter -= 1;
            });
        });


    </script>



    --}}
{{--validation--}}{{--

    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "class_id": {
                        required: true,
                    },
                    "subject_id[]": {
                        required: true,

                    },
                    "full_mark[]": {
                        required: true,

                    },
                    "pass_mark[]": {
                        required: true,

                    },
                    "subjective_mark[]": {
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





@endsection--}}
