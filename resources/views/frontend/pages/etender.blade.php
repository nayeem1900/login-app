@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <strong>E-Tender System</strong>
                <p class="etender" style="text-align: justify">Islami Bank Foundation E-Tender System is an internet based process wherein the complete tendering process; from advertising to receiving and submitting tender-related information are done through online. Islami Bank Foundation E-Tender system has developed and will be implemented as followed by the Government of the People's Republic of Bangladesh in pursuant to Section 65 of the Public Procurement Act, 2006. Visiting IBF website e-tender section visitor/bidder informed about the enlistment notice, then he complete the registration process, IBF responsible authority check and verify the registered user and approve the suitable applicant to be a enlisted bidder. After being a bidder he will informed tender notice and can participate in tender.</p>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;color:whitesmoke;font-size: 20px;text-align: center">
                    <div class="card-header">
                        Etender
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="">Supplier Login</a> </li>
                        <p class="card-text" style="color: #00A000;text-align: center">Hot LIne :+02 47110505</p>



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
            @foreach($allData as $key=>$etender)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{($etender->t_date)}}</td>
                    <td>{{($etender->deadline)}}</td>
                    <td>{{($etender->title)}}</td>
                    <td>
                        <a href="upload/etender_images/{{($etender->t_download)}}" download="{{($etender->t_download)}}">
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