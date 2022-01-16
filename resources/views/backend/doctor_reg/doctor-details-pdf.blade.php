<!DOCTYPE html>
<html>
<head>
    <title>Student Details Info</title>

    <link rel="stylesheet" href="{{asset('backend/admin_panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <style type="text/css">

        table{
            border-collapse:collapse;
        }
        h2 h3{

            margin:0;
            padding:0;
        }
        table{
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }
        .table th,
        .table td{
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid#dee2e6;
        }
        .table thead th{
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {

            border-top: 2px solid #dee2e6;
        }
        .table .table {
            background-color: #fff;
        }
        .table-bordered th,
        .table-bordered td {
            border:1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td{
            border-bottom-width: 2px;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        table tr td{
            padding: 5px;
        }
        .table-bordered thead th, .table-bordered td , .table-bordered th{
            border: 1px solid black !important;

        }
        .table-bordered thead th{
            background-color: #cacaca;
        }

    </style>
</head>
<body>


<div class="container">

    <div class="row">

        <div class="col-md-12 ">
<table width="80%">
<tr>
    <td width="33%" class="text-center"><img src="{{asset('upload/logo_images/202112220751202104010722logo.png')}}"style="width: 100px;height: 100px"></td>
    <td class="text-center" width="63%">
        <h4><strong>Islami Bank Foundation</strong></h4>
        <h4><strong>Purana Paltan</strong></h4>
        <h4><strong>ibfbd.org</strong></h4>

    </td>
    <td class="text-center"><img src="{{url('upload/doctor_images/'.$details['doctor']['img'])}}"style="width: 100px;height: 100px"></td>

</tr>

</table>
        </div>


        <div class="col-md-12 text-center">
            <h5 style="font-weight: bold;padding-top: -25px ">Doctor Details Information</h5>
        </div>
        <div class="col-md-12"></div>
            <table border="1" width="100%">
                <tbody>
                <tr>
                    <td style="width: 50%">Doctor Name</td>
                    <td>{{$details['doctor']['doctor_name']}}</td>
                </tr>
                <tr>
                    <td style="width: 50%">Doctor Degree</td>
                    <td>{{$details['doctor']['degree']}}</td>
                </tr>
                <tr>
                    <td style="width: 50%">Doctor Schedule</td>
                    <td>{{$details['doctor']['schedule']}}</td>
                </tr>
                <tr>
                    <td style="width: 50%">Doctor Picture</td>
                    <td>{{$details['doctor']['img']}}</td>
                </tr>
                <tr>
                    <td style="width: 50%">Branch</td>
                    <td>{{$details['branch']['name']}}</td>
                </tr>
                <tr>
                    <td style="width: 50%">Department</td>
                    <td>{{$details['department']['name']}}</td>
                </tr>



                </tbody>

            </table>



            <i style="font-size: 10px;float: right;">Print Date:{{date("d m y")}}</i>
        </div>
    </div><br/>




{{--jj--}}

<div class="col-md-12">
    <table border="0" width="100%">
        <tbody>
        <tr>

            <td style="width: 30%"></td>
            <td style="width: 30%"></td>
            <td style="width: 40%; text-align: center;">
                <hr style="border:solid 1px;width: 60%;color: #000;margin-bottom: 0px;">
                <p style="text-align: center;">This is computer generated document. Sign not need</p>
            </td>
        </tr>
        </tbody>

    </table>
</div>


</body>
</html>