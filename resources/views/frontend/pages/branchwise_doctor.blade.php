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


       <div class="row find-doctor replace_filter_branch">




        </div>



    </div>



    <script src="{{asset('backend/js/jquery-2.2.4.min.js')}}"></script>

    <script type="text/javascript">

        $(document).on('change','.branch_id',function() {
           /* var branch_id = $(this).val();*/
            /*var ibh_doctor_id = $(this).val();*/
            var branch_id = $("#branch_id").val();
            var token = "{{ csrf_token() }}";
            var url = "{{route('ajax-find-doctor-branch')}}";
            $.ajax({

                type:"post",
                url: url,
                data:{
                    branch_id: branch_id,
                    _token: token
                },
                success:function (res){

                    $('.replace_filter_branch').html(res);

                    console.log(res);

                }


            });

        })



    </script>



@endsection