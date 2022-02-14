@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <h1 style="text-align: center">Islami Bank Central Hospital, Kakrail</h1>
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

        <strong>Welcome To Islami Bank Central Hospital, Kakrail, Dhaka.</strong>
        <p style="text-align: justify">Islami Bank Central Hospital Kakrail is a largest and fast growing Hospital in Dhaka. The Hospital has founded  13 April 1993. It is a 135 beded hospital. We believe the Hospital will go ahead as a pioneer private Hospital in Dhaka.The Hospital operates its daily activities of the own building. There are three building in Hospitalt.  It has 06 operation theaters including 01 Eye OT. There are also 05 preoperative and 06 post operative room. There have Modern ICU  that leaded by famous and expert  Consulant and medical related people. </p>






        <div class="card-body">


            <table id="example1" class="table table-bordered table-hover">

                <thead>
                <tr>
                    <th >SL</th>
                    <th>Name</th>

                    <th >Find Doctor</th>

                </tr>
                </thead>
                <tbody>
               {{-- @foreach($departments as $key=>$value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->name}}</td>
                        --}}{{--<td>{{$value->name}}</td>--}}{{--


                        <td>
                            --}}{{--<button type="submit"class="btn btn-primary btn-sm" name="search" href=""><i class="fa fa-search"></i></button>--}}{{--
                            <a  class="btn btn-sm btn-primary" href="{{route('dep.ibch.doctor.details')}}"><i class="fa fa-search"></i></a>
                            --}}{{-- <a target="_blank" title="Details" class="btn btn-sm btn-info" href="--}}{{----}}{{--{{route('doctor.registration.details',$value->doctor_id)}}--}}{{----}}{{--"><i class="fa fa-search"></i></a>--}}{{--

                        </td>

                    </tr>
                @endforeach--}}



               <div class="card" style="width: 18rem;">

                   <ul class="list-group list-group-flush">
                       @foreach($office as $item)
                           <li class="list-group-item">{{($item->department->name)}}</li>
                       @endforeach
                   </ul>
               </div>



                </tbody>


            </table>



        </div>



        <div class="row">
{{--
            <ul>
                <h1>Islami Bank Hospital Doctors Department</h1>
                @foreach($departments as $key=>$value)
                    --}}{{--<td>{{$value['doctor']['doctor_name']}}</td>--}}{{--
                    <li>{{$value->name}}</li>

                @endforeach
            </ul>--}}

        </div>


    </div>



@endsection