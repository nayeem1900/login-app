
@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <h1 style="text-align: center">Islami Bank Hospital,Muhdha</h1>
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

        <strong>Welcome To Islami Bank Hospital, Mughda.</strong>
        <p>Islami Bank Central Hospital Mugdha is a largest and fast growing Hospital in Dhaka. The Hospital has founded 13 April 1993. It is a 135 beded hospital. We believe the Hospital will go ahead as a pioneer private Hospital in Dhaka.The Hospital operates its daily activities of the own building. There are three building in Hospitalt. It has 06 operation theaters including 01 Eye OT. There are also 05 preoperative and 06 post operative room. There have Modern ICU that leaded by famous and expert Consulant and medical related people.</p>




        <br>

        <div class="card" style="width: 18rem;">

            <ul class="list-group list-group-flush">
                @foreach($office as $item)
                    <li class="list-group-item">{{($item->department->name)}}</li>
                @endforeach
            </ul>
        </div>



        <table class="table">
            <thead>
            <tr>

                <th scope="col">Name</th>
                <th scope="col">Degree</th>

            </tr>
            </thead>
            <tbody>
            @foreach($office as $item)
                <tr>

                    <td><a href="">{{($item->department->name)}}</a> </td>
                    <td>{{($item->doctor_name)}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>



        {{-- <div class="card-body">



             <table id="example1" class="table table-bordered table-hover">

                 <thead>
                 <tr>
                     <th width="7%">SL</th>
                     <th>Department</th>
                     <th>Name</th>
                     <th>Degree</th>
                     <th>Schedule</th>

                     <th>Image</th>


                 </tr>
                 </thead>
                 <tbody>
                 @foreach($doctor as $key=> $value)
                     <tr>
                         <td>{{$key+1}}</td>
                         <td>{{$value['department']['name']}}</td>
                         <td>{{$value->doctor_name}}</td>
                         <td>{{$value->degree}}</td>

                         <td>{{$value->schedule}}</td>
                         --}}{{-- <td>{{$value['branch']['name']}}</td>--}}{{--




                         <td>

                             <img  src="{{(!empty($value->img))?url('upload/doctor_images/'.$value->img):url('upload/no_img.png')}}" style="width:70px;height:80px;border:1px solid#000;">
                         </td>




                     </tr>
                 @endforeach


                 </tbody>



             </table>


         </div>--}}




        <br>

    </div><br>
    @include('backend.ibchk.ibch-footer')
    </div>
    <script src="{{asset('backend/select2')}}"></script>
    <script src="{{asset('backend/js/jquery-2.2.4.min.js')}}"></script>


    <script type="text/javascript">
        $(function(){
            $(document).on('change','#ibchkdep_id',function () {
                var ibchkdep_id=$(this).val();
                $.ajax({
                    type:"GET",
                    url:"{{route('ajax-doctor')}}",
                    data:{ibchkdep_id:ibchkdep_id},
                    success:function (data){
                        var html='<option value="">Select Doctor</option>'
                        $.each(data,function (key,v) {
                            html+='<option value="'+v.id+'">'+v.name+', Degree: '+v.ibchkdegree+', Doctor Sechedule: '+v.ibchktime+'</option>';
                        });
                        $('#ibchk_id').html(html);
                    }
                });
            });
        });
    </script>


@endsection
