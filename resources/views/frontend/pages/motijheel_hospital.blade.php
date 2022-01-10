@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <h1 style="text-align: center">Islami Bank Central Hospital,Motijheel</h1>
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
                                <a class="nav-link" href="{{route('motijheel')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Department</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <strong>Welcome To Islami Bank Central Hospital, Kakrail, Dhaka.</strong>
        <p style="text-align: justify">Islami Bank Central Hospital Kakrail is a largest and fast growing Hospital in Dhaka. The Hospital has founded  13 April 1993. It is a 135 beded hospital. We believe the Hospital will go ahead as a pioneer private Hospital in Dhaka.The Hospital operates its daily activities of the own building. There are three building in Hospitalt.  It has 06 operation theaters including 01 Eye OT. There are also 05 preoperative and 06 post operative room. There have Modern ICU  that leaded by famous and expert  Consulant and medical related people. </p>



        <div class="row">

            <div class="col-md-3">
                <label class="form-control-label">Select Department</label>
                <select class="form-control select2-show-search" data-placeholder="Select Category" name="" id="ibchkdep_id">
                    <option value="">Select Department</option>
                    @foreach($allData as $ibchdep)
                        <option value="{{$ibchdep->id}}">{{$ibchdep->name}} </option>

                    @endforeach

                </select>

            </div>

            <div class="col-md-9">
                <label>Doctor Name </label>
                <select name="ibchk_id" id="ibchk_id" class="form-control form-control-sm">
                    <option value="">Select Doctor</option>


                </select>

            </div>









        </div>

        <br>
        <div class="row">


            <div class="col-md-3">

                @include('backend.ibh_motijheel.moti-dep')

            </div>
            <div class="col-md-6">






            </div>


        </div>


        <br>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Contact Us</h5>

                <p class="card-text">30, Anjuman-e-Mofidul Islam Road, Kakrail, Dhaka-1000
                    Phone:+(02) 9360331-2, 9355801-2
                    Mobile:+01915728266, 01918872802
                    Office Email:ibhdit@yahoo.com
                </p>

            </div>
        </div>

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