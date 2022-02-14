
@extends('frontend.layouts.master')
@section('content')
    <style></style>
    <div class="container">
        <h1 style="text-align: center">Islami Bank Central Hospital,Mugdha. Hotline:01810000116</h1>
        <div class="header_image">
            <img src="{{url('frontend/images/kakrial.jpg')}}" class="d-block w-100" width="" alt="">
        </div>
        <div class="ibch_nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('ibch')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Department</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <strong>Welcome To Islami Bank Hospital Mughda, Dhaka.</strong>
        <p style="text-align: justify">Islami Bank Hospital Mugdha is a largest and fast growing Hospital in Dhaka. The Hospital has founded 2015. It is a 60 beded hospital. We believe the Hospital will go ahead as a pioneer private Hospital in Dhaka.The Hospital operates its daily activities of the own building. There are three building in Hospitalt.  It has 06 operation theaters including 01 Eye OT. There are also 05 preoperative and 06 post operative room. There have Modern ICU  that leaded by famous and expert  Consulant and medical related people. </p>




        <br>
        <h5>Select Your Doctor Department</h5>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Department
            </button>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach($departments as $department)
                    <li><a class="dropdown-item department" id="department" data-id="{{ $department->id }}" href="javascript:">{{$department->name}}</a></li>
                @endforeach
            </ul>

        </div>
        <br/>

        <div class="card-body">

            <link rel="stylesheet"type="text/css"href="{{asset('frontend/css/ajax_css.css')}}">
            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Department</th>
                    <th>Name</th>
                    <th>Degree</th>
                    <th>Schedule</th>

                    <th>Image</th>
                </tr>
                </thead>
                <tbody class="filter_data">

                @foreach($doctor as $key=> $value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value['department']['name']}}</td>
                        <td>{{$value->doctor_name}}</td>
                        <td>{{$value->degree}}</td>
                        <td>{{$value->schedule}}</td>

                        <td>

                            <img  src="{{(!empty($value->img))?url('upload/doctor_images/'.$value->img):url('upload/no_img.png')}}" style="width:70px;height:80px;border:1px solid#000;">
                        </td>

                    </tr>
                @endforeach

                </tbody>
                <tfoot>


                </tfoot>
            </table>


        </div>



        <br>



<!--ajax html --->


    </div>

    <script src="{{asset('backend/js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript">

        $(document).on('click','#department',function () {
            var departmentId = $(this).data('id');

            $.ajax({
                type:"GET",
                url:"{{route('ajax-doctor')}}",
                data:{
                    department_id:departmentId
                },
                success:function (res){
                    $(".filter_data").html("");
                    $.each(res, function(index, data){

                        $(".filter_data").append("" +
                            "<tr>" +
                            "<td>"+ (parseInt(index)+1) +"</td>" +
                            "<td>"+data.name+"</td>" +
                            "<td>"+ data.doctor_name +"</td>" +
                            "<td>"+ data.degree +"</td>" +
                            "<td>"+ data.schedule +"</td>" +
                            "<td>" +
                            "<img  src='{{(!empty($value->img))?url('upload/doctor_images/'.$value->img):url('upload/no_img.png')}}' style='width:70px;height:80px;border:1px solid#000;'>" +
                            "</td>" +
                            "</tr>" +
                            "");
                    });

                },
                error:function(xhr){
                    console.table(xhr);
                }
            });
        });

    </script>

    <script src="{{asset('backend/select2')}}"></script>

    <script src="{{asset('frontend/js/j_query.3.5.js')}}"></script>
    <script src="{{asset('frontend/js/dattabel.min.js')}}"></script>

    <script type="text/javascript">


        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>











@endsection
