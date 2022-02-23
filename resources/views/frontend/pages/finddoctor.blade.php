
@extends('frontend.layouts.master')
@section('content')
    <style></style>
    <div class="container">
        <h5 style="text-align: center">Welcome To Islami Bank Hospital</h5>
        <div class="header_image">
            <img src="{{url('frontend/images/kakrial.jpg')}}" class="d-block w-100" width="" alt="">
        </div>
        <div class="ibch_nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
            </nav>
        </div>
<br/>
      <div class="row">

          <div class="col-md-4">

              <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Doctor Name</h5>
                      <p class="card-text">Degree</p>
                      <p class="card-text">Schedule</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>

          </div>

      </div>






    </div>




@endsection
