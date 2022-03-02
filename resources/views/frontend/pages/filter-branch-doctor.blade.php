
@foreach($doctors as $doctor)
    <div class="col-md-3 col-sm-6 mt-2">
        <div class="card">

            <img src="{{(!empty($doctor->img))?url('upload/doctor_images/'.$doctor->img):url('upload/no_img.png')}}" style="width:100%;height:180px;border:1px solid#000;" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">Doctor Name: {{$doctor->doctor_name}}</h5>
                <p class="card-text">Degree: {{$doctor->degree}}</p>
                <p class="card-text">Department: {{$doctor['department']['name']}}</p>
                <p class="card-text">Schedule: {{$doctor->schedule}}</p>


            </div>
        </div>
    </div>
@endforeach