@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <strong>Carrier</strong>
                <p class="etender" style="text-align: justify">Islami Bank Foundation have equal oppurnity for all.</p>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;color:whitesmoke;font-size: 20px;text-align: center">
                    <div class="card-header">
                        Carrier
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="http://119.18.151.117:8080/website/page/carrer">Apply for job</a> </li>
                        <p class="card-text">Hot LIne :+02 7125567</p>

                        <li class="list-group-item">Carrier Notice</li>

                    </ul>
                </div>
            </div>

        </div>
        {{--Tender table--}}
        <table class="table">
            <thead>
            <tr>
                <th>Sl</th>
                <th>Date</th>
                <th>Deadline</th>
                <th>Title</th>
                <th>Download</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allData as $key=>$carrier)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{($carrier->t_date)}}</td>
                    <td>{{($carrier->deadline)}}</td>
                    <td>{{($carrier->title)}}</td>
                    <td>
                        <a href="upload/carrier_images/{{($carrier->t_download)}}" download="{{($carrier->t_download)}}">
                            <button type="button" class="btn btn-primary">
                                <i class="glyphicon glyphicon-download">
                                </i>Download</button>
                        </a>
                    </td>
                    {{--<td>{{($etender->t_download)}}</td>--}}
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>

@endsection