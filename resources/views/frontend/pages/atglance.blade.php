@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <strong>At a Glance</strong>
                <p style="text-align: justify">(I) A charitable fund named "Sadaqah Tahbil" was created on July 4, 1983, immediately after the inception of Islami Bank on 30th March 1983, as per decision of the Board of Directors of the Bank in pursuance to the clause 104 of its Memorandum and Articles of Association.

                    (II) Gradually the volume of its activities increased with the passage of time and the “Sadaqah Tahbil” was renamed ”Islami Bank Foundation" on May 20,1991. Islami Bank Foundation has been working as a subsidiary organization of Islami Bank Bangladesh Limited with separate accounts and administration.
                    (III) It is registered with the Registrar of Joint Stock Companies and firms of Government of the People's Republic of Bangladesh under no S-1214 (25) 1988, dated 25-06-88.
                    It is also registered with the NGO Affairs Bureau under no. 668 dated 24-11-92.
                </p>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('frontend/images/ibf-head-office-1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">IBF Head Office</h5>
                        <p class="card-text">Chairman : Professor Md. Nazmul Hassan, Ph.D
                            Executive Director : S A M Salimullah
                            No. of Projects : 36</p>

                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Notice
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">View All</li>
                        <li class="list-group-item">News & Events</li>
                        <li class="list-group-item">Links</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection