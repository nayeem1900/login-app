@extends('frontend.layouts.master')
@section('content')


    <div class="container">


{{--akhon tik ace?--}}

       {{-- Image er maje gap tik ase?--}}








        @foreach ($gallaries as $chunk)
            <div class="row">
                @foreach ($chunk as $gallary)
                    <div class="col-md-3 col-sm-6">
                        <img src="{{asset('upload/gallery/'.$gallary->image)}}" style="width:100%" alt="No Image found!">
                        <p style="text-align: justify">{{($gallary->desc)}}</p>
                    </div>

                @endforeach
            </div>
        @endforeach


    </div>


@endsection