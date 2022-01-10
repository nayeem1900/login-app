@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <h1 style="text-align: center">Islami Bank Central Hospital, Kakrail. Hotline:01810000116</h1>
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
    <p style="text-align: justify">Islami Bank Central Hospital Kakrail is a largest and fast growing Hospital in Dhaka. The Hospital has founded 2002. It is a 250 beded hospital. We believe the Hospital will go ahead as a pioneer private Hospital in Dhaka.The Hospital operates its daily activities of the own building. There are three building in Hospitalt.  It has 06 operation theaters including 01 Eye OT. There are also 05 preoperative and 06 post operative room. There have Modern ICU  that leaded by famous and expert  Consulant and medical related people. </p>



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


        {{--<div class="form-group col-md-3" style="padding-top:29px;">

            <a id="search"class="btn btn-primary btn-sm" name="search">Search</a>
        </div>--}}








    </div>

   <br>
    <div class="row">
      {{--<div class="col-md-4">


          <div class="list-group">
              <a href="" class="list-group-item list-group-item-action active" aria-current="true" style="background-color:#1d5444">
                 Islami Bank Central Hospital Doctors Department
              </a>
              @foreach($allData as $ibchkDep)
              <li class="list-group-item">{{$ibchkDep->name}}</li>
              @endforeach

--
          </div>

      </div>
--}}

        <div class="col-md-3">

           @include('backend.ibchk.department-include')

        </div>
        <div class="col-md-6">

            {{--<ul class="list-group">
                <a href="" class="list-group-item list-group-item-action active" aria-current="true" style="background-color:#1d5444">
                    Islami Bank Central Hospital Services
                </a>
                <li class="list-group-item">ICU</li>
                <li class="list-group-item">NICU</li>
                <li class="list-group-item">Blood Bank</li>
                <li class="list-group-item">Cardiology</li>
                <li class="list-group-item">Laboratory</li>
                <li class="list-group-item">Pharmicy</li>
                <li class="list-group-item">Ambulance</li>
            </ul>--}}




        </div>


    </div>


    <br>
    {{--<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Contact Us</h5>

            <p class="card-text" style="text-align: justify">30, Anjuman-e-Mofidul Islam Road, Kakrail, Dhaka-1000 Phone:+(02)22222824, 58316521-2, 222225801-2, 222225937-8, Consultant Appointment ext-212,213,314,315 Mobile:+01915728266, 01918872802; 8 AM to 3 PM . Office Email:ibhdit@yahoo.com Hotline:01810000116
              </p>

        </div>--}}
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


{{--
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
                        html+='<option value="'+v.id+'">'+v.name+','+v.ibchkdegree+'</option>';
                    });
                    $('#ibchk_id').html(html);

                }



            });

        });

    });

</script>
--}}




{{--
<script type="text/javascript">
    $(document).on('click','#search',function () {

        var year_id=$('#ibchkdep_id').val();
        var class_id=$('#ibchk_id').val();

        $('.notifyjs-corner').html('');
        if(year_id==''){
            $.notify("Year required",{globalPosition:'top right',className:'error'});
            return false;
        }
        if(class_id=='') {
            $.notify("Class required", {globalPosition: 'top right', className: 'error'});
            return false;
        }
        if(month=='') {
            $.notify("Month required", {globalPosition: 'top right', className: 'error'});
            return false;
        }


        $.ajax({
            url:"{{route('students.monthly.fee.get-student')}}",
            type:"get",
            data:{'year_id':year_id,'class_id':class_id,'month':month},
            beforeSend:function () {

            },
            success:function (data) {
                var source=$("#document-template").html();
                var template=Handlebars.compile(source);
                var html=template(data);
                $('#DocumentResults').html(html);
                $('[data-toggle="tooltip"]').tooltip();

            }
        });

    });

</script>

--}}




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