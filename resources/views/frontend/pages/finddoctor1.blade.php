@extends('frontend.layouts.master')
@section('content')

    <div class="container">
        <h5 style="text-align: center" href="">Welcome To {{ $brancheData->name }} </h5>
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



</div>






@endsection
