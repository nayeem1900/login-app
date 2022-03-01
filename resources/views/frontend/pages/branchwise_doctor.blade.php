@extends('frontend.layouts.master')
@section('content')
    <div class="container">


        <div class="departmetheader">
            <h3 style="background-color:DodgerBlue; text-align: center">FIND YOUR DOCTOR</h3>
        </div>


        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select branch_id" id="branch_id" aria-label="Floating label select example">
                        <option selected>Select Your Branch</option>
                        @foreach($branches as $branch)
                            <option value="{{$branch->id}}{{(@$branch_id==$branch->id)?"selected":""}}">{{$branch->name}}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelectGrid">Branch selects</label>
                </div>
            </div>

        </div>



    </div>



    <script src="{{asset('backend/js/jquery-2.2.4.min.js')}}"></script>



@endsection