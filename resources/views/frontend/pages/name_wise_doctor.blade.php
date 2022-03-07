@extends('frontend.layouts.master')
@section('content')
    <div class="container">


        <div class="departmetheader">
            <h3 style="background-color:DodgerBlue; text-align: center">FIND YOUR DOCTOR BY Name</h3>
        </div>


        <div class="input-group flex-nowrap">

            <input type="text" class="form-control name" id="name" placeholder="Doctor name" aria-label="Doctor name" aria-describedby="addon-wrapping">
        </div>



        <div class="row replace_data">

        </div>

        </div>







    <script src="{{asset('backend/js/jquery-2.2.4.min.js')}}"></script>

    <script type="text/javascript">

        $(document).on('keyup','.name',function() {

            var name = $(this).val();
            var url = "{{ url('finddoctor/name/ajax')}}/"+name;

            $.ajax({

                type:"get",
                url: url,

                success:function (res){

                    $('.replace_data').html("").html(res);

                    console.log(res);

                }


            });

        })




    </script>



@endsection