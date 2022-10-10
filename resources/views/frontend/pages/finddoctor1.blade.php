@extends('frontend.layouts.hospital_master')
@section('content')

    <div class="container">
        <h5 style="text-align: center" href="">Welcome To {{ $brancheData->name }}  </h5>
        <h4 style="text-align: center;color: #00ace6"> Contract Info : @foreach($branchContract as $key=> $value)

               {{ $value->mobile }}

        @endforeach</h4>
        <div class="header_image">
            <img src="{{url('frontend/images/kakrial.jpg')}}" class="d-block w-100" width="" alt="">
        </div>
        <div class="ibch_nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
            </nav>
        </div>
        <br/>

       {{-- <div class="col-md-12">--}}

            <div class="row find_doctor">
                @foreach($ibhdoctor as $key=> $value)
                    <div class="col-md mt-2">
                        <div class="card" style="width: 18rem;">

                            <img src="{{(!empty($value->img))?url('upload/doctor_images/'.$value->img):url('upload/no_img.png')}}" style="width:100%;height:180px;border:1px solid#000;" class="card-img-top" alt="...">
                          {{--  <img src="" class="card-img-top" alt="...">--}}
                            <div class="card-body">
                                <h5 class="card-title">Doctor Name: {{$value->doctor_name}}</h5>
                                <p class="card-text">Degree: {{$value->degree}}</p>
                                <p class="card-text">Department: {{$value['department']['name']}}</p>
                                <p class="card-text">Schedule: {{$value->schedule}}</p>
                               {{-- <a href="#" class="btn btn-success"></a>--}}

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

       {{-- </div>--}}

        <section class="footer_part">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 style="color:aliceblue">Contact US</h3>
                        @foreach($branchContract as $key=> $value)
                        <p style="color: aliceblue;text-align: justify">Address : {{ $value->address }}
                            Phone :{{ $value->mobile }}
                            </p>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <h3 style="color:aliceblue; text-align:center">Follow US</h3>
                        <div class="social" style="margin-left: 150px;">
                            <ul>
                                <l><a href="https://www.facebook.com/ibfpage"><i class="fa fa-facebook"></i></a></l>

                            </ul>

                        </div>
                    </div>



                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p style="color:white;text-align: center" >
                            copyright &copy;<script type="text/javascript">document.write(new Date().getFullYear())</script>@ Islami Bank Foundation
                        </p>
                    </div>
                </div>
            </div>

        </section>


    </div>






@endsection
