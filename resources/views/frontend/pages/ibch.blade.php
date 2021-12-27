@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <h1 style="text-align: center">Islami Bank Central Hospital, Kakrail</h1>
    <div class="header_image">
        <img src="{{url('frontend/images/mirpur.jpg')}}" class="d-block w-100" width="" alt="">
    </div>

    <strong>Welcome To Islami Bank Central Hospital, Kakrail, Dhaka.</strong>
    <p style="text-align: justify">Islami Bank Central Hospital Kakrail is a largest and fast growing Hospital in Dhaka. The Hospital has founded  13 April 1993. It is a 135 beded hospital. We believe the Hospital will go ahead as a pioneer private Hospital in Dhaka.The Hospital operates its daily activities of the own building. There are three building in Hospitalt.  It has 06 operation theaters including 01 Eye OT. There are also 05 preoperative and 06 post operative room. There have Modern ICU  that leaded by famous and expert  Consulant and medical related people. </p>

    <div class="row">

        <div class="col-md-3">
            <label class="form-control-label">Select Department: <span class="tx-danger">*</span></label>
            <select class="form-control select2-show-search" data-placeholder="Select Category" name="" id="ibchkdep_id">
                <option value="">Select Department</option>
                @foreach($allData as $ibchdep)
                    <option value="{{$ibchdep->id}}">{{$ibchdep->name}} </option>

                @endforeach

            </select>

        </div>

        <div class="col-md-3">
            <label>Doctor Name </label>
            <select name="ibchk_id" id="ibchk_id" class="form-control form-control-sm">
                <option value="">Select Doctor</option>


            </select>

        </div>

        <div class="col-md-3">
            <textarea></textarea>

        </div>

        <div class="form-group col-md-3" style="padding-top:29px;">

            <a id="search"class="btn btn-primary btn-sm" name="search">Search</a>
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
            html+='<option value="'+v.id+'">'+v.name+'</option>';
        });
$('#ibchk_id').html(html);

    }
        

});

   });

});

</script>




{{--<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="ibchkdep_id"]').on('change', function(){
            var ibchkdep_id = $(this).val();
//                alert(category_id)
            if(ibchkdep_id) {
                $.ajax({
                    url: "{{route('ajax-doctor')}}/"+ibchkdep_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        console.log(data);
                        var d =$('select[name="ibchk_id"]').empty();
                        $.each(data, function(key, value){

                            $('select[name="ibchk_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');

                        });

                    },

                });
            } else {
                alert('Category Not Found');
            }

        });

    });

</script>--}}

  @endsection