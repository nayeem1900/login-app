<section class="header">

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{url('upload/logo_images/'.$logo->image)}}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('index')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About US
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}">At a Glance</a></li>
                                <li><hr class="dropdown-divider"><strong style="padding-left: 10px;background-color:green;opacity: 1;">Organizational Structure</strong></li>
                                <li><a class="dropdown-item" href="{{route('foundationcommittee')}}">Foundation Committees</a></li>
                                <li><a class="dropdown-item" href="{{route('executivecommittee')}}">Executive Committee</a></li>
                                <li><a class="dropdown-item" href="{{route('auditcommittee')}}">Audit Committee</a></li>
                                <li><a class="dropdown-item" href="{{route('hospitalcommittee')}}">Hospital Committee</a></li>
                                <li><a class="dropdown-item" href="{{route('communityhospitalcommittee')}}">Community Hospital Committee</a></li>
                                <li><a class="dropdown-item" href="{{route('communityhospitalboard')}}">Islami Bank Community Hospitals Board</a></li>
                                <li><a class="dropdown-item" href="">Executive Committee of Islami Bank Health Educational Institutions</a></li>
                                <li><a class="dropdown-item" href="{{route('healtheducationcommittee')}}">Education,Health Education & Social Work Committee</a></li>


                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Instituions
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li style="background: green;padding-left: 10px" ><hr class="dropdown-divider"><strong style="color: white">Islami Bank Hospital</strong></li>

                                {{--  <p><strong>Islami Bank Hospital</strong></p>--}}
                                <li><a class="dropdown-item" href="{{route('ibch')}}">Islami Bank Central Hospital</a></li>
                                <li><a class="dropdown-item" href="{{route('motijheel')}}">Islami Bank Hospital Motijheel</a></li>
                                <li><a class="dropdown-item" href="">Islami Bank Hospital Mirpur</a></li>
                                <li><a class="dropdown-item" href="">Islami Bank Hospital Mughda</a></li>
                                <li><a class="dropdown-item" href="">Islami Bank Spetalize Hospital,Nayapalton</a></li>
                                <li><a class="dropdown-item" href="">Islami Bank Hospital Khulna</a></li>
                                <li><a class="dropdown-item" href="">Islami Bank Hospital Barishal</a></li>
                                <li><a class="dropdown-item" href="">Islami Bank Hospital Chottogram</a></li>
                                <li><a class="dropdown-item" href="">Islami Bank Hospital Luxmipur,Rajshahi</a></li>
                                <li style="background: green"><hr class="dropdown-divider"><strong style="color: white">Community Hospital</strong></li>

                                <li><a class="dropdown-item" href="#">Islami Bank Community Hospital, Faridpur Ltd</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Community Hospital,Rangpur Ltd</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Community Hospital,Dinajpur Ltd</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Community Hospital,Naogoan Ltd</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Community Hospital,Jhenaidah Ltd</a></li>
                                <li><a class="dropdown-item" href="">Islami Bank Community Hospital,Manikgong Ltd</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Community Hospital,Sathkhira Ltd</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank A.R Howlader Community Hospital,Madaripur Ltd</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Community Hospital,Mymensingh Ltd</a></li>

                                <li style="background: green"><hr class="dropdown-divider"><strong style="color: white">Health Education</strong></li>

                                <li><a class="dropdown-item" href="#">Islami Bank Medical College Rajsahi</a></li>
                                <li><a class="dropdown-item" href="http://ibncr.edu.bd/">Islami Bank Nursing College Rajsahi</a></li>
                                <li><a class="dropdown-item" href="http://ibncb.edu.bd/">Islami Bank Nursing Institute Barisal</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Institute of Health Technology Rajsahi</a></li>
                                <li style="background: green"><hr class="dropdown-divider"><strong style="color: white">Generala Education</strong></li>

                                <li><a class="dropdown-item" href="http://ibiscdhaka.com">Islami Bank International School & College</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Model School & College</a></li>

                                <li style="background: green"><hr class="dropdown-divider"><strong style="color: white">Technical Education</strong></li>

                                <li><a class="dropdown-item" href="http://ibitsylhet.edu.bd/">Islami Bank Institute of Technology,Sylhet</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Institute of Technology,Bogura</a></li>
                                <li><a class="dropdown-item" href="#">Islami Bank Institute of Technology,Chattogram</a></li>
                            </ul>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link" href="#">Media Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('etender')}}">E-tender</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Forms & Publication</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('career')}}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>



    </div>





</section>