@extends('frontend.layouts.master')
@section('content')
    <p style="text-align: center; font-size: 30px;" ><strong>IBF Education,Health Education & Socail Work Committee</strong></p>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    @include('frontend.layouts.committee')
                </div>
            </div>
        <!--<div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                  @include('frontend.layouts.committee')
                </ul>
            </div>-->
            <div class="col-md-9">

                <div class="card mb-3">

                    <div class="col-md-4">
                        <img src="{{url('frontend/images/1557393365_nazmul.jpg')}}" alt="...">
                    </div>
                    <div class="col-md-12">
                        <div class="card-body ">
                            <h5 class="card-title">Chairman</h5>
                            <p class="card-text" style="text-align: justify">Professor Md. Nazmul Hassan is the Chairman of Board of Directors of Islami Bank Bangladesh Limited and he represents Armada Spinning Mills Limited as Director on the Bank’s Board. He is also the Chairman of the Islami Bank Foundation. Dr. Hassan started his career as a Lecturer in Dhaka University back in 1975. Then he completed his MS and Ph.D. with major in Agricultural Economics and Development Economics respectively. There after he was appointed as Professor, Institute of Nutrition and Food Science, University of Dhaka in 1993 and later held a faculty position at Brown University, USA. In addition, he held many important research and teaching positions throughout his long professional career of about forty-five years. He worked as Consultant at Cornell University, USA in its Food System Development Research and served on Ph.D. Committees there. He was also a Visiting Professor at the Royal Agricultural University, Denmark and a Consultant at the International Food Policy Research Institute and Academy for Educational Development, Washington DC. USA. In addition, he collaborated with few more Universities in USA including Yale,Harvard,U-Penn, Minnesota, and Ohio on matters of research and has over one hundred influential publications in peer reviewed outlets to his credit.</p>
                            <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                    </div>

                </div>


                <div class="card mb-3">

                    <div class="col-md-4">
                        <img src="{{url('frontend/images/1557046377_Areef Suleman.jpg')}}" alt="...">
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Member</h5>
                            <p class="card-text" style="text-align: justify">Dr. Areef Suleman is the representative of Islamic Development Bank, Jeddah, KSA as Foreign director of Islami Bank Bangladesh Limited. He is appointed as director on March 28, 2013 in place of Janab Mohammad Adnan Midani. He is a South African National having PhD in Economics, Master in Economics and Masters in Business Leadership. At present he is a Manager of Policy Development Division in Economic Research & Policy Division of Islamic Development Bank, Jeddah, KSA.</p>
                        </div>
                    </div>

                </div>



                <div class="card mb-3">

                    <div class="col-md-4">
                        <img src="{{url('frontend/images/1523785648_Dr Tanveer Ahmad.jpg')}}" alt="...">
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Member</h5>
                            <p class="card-text" style="text-align: justify">Dr. Tanveer Ahmad is a Director of the Bank representing Marsa Food & Beverage Limited. He completed his MBBS Degree from University of Science & Technology, Chittagong in 2009. Then he obtained MD (Doctor of Medicine) in Cardiology from Bangabandhu Sheikh Mujib Medical University in 2017. He founded T A Trading in 2003. Then he joined in New Star Lab & Diagnostic Centre in 2010 as director and Guest Lecturer of Psychology Department in 2011 and Medicine Department in 2012 in the University of Science & Technology, Chittagong before joining Sir Solimullah Medical College & Hospital as a post Graduate Fellow. At present he has been working in United Hospital, first as a Fellow Cardiologist in 2017 and later on in the Department of Cardiology. <br>


                                Dr. Tanveer is the owner of T A Trading and Managing Director of Infinia Knit Fabrics Ltd. & Paradise International Ltd. He manages and supervises the concerned institutions.<br>Dr. Tanveer visited various countries of the world and participated in various seminars and workshops conducted at National and International level by various local organizations including Bangladesh Society of Cardiology, Transnational (TNCS), BIT and Multinationals (MNCs), American College of Cardiology (ACC) workshops. He also volunteered for the free medical camp and relief work in various rural areas of Bangladesh. He is a life time member of Bangladesh Cardiac Society and an associate member of Bangladesh Intervention Cardiac Society. He is involved in a number of research studies and his thesis work on young patients with cardiovascular diseases was published in Bangladesh Heart Journal.<br>
                                He is also engaged in various social, educational and cultural organizations of the country.

                            </p>
                        </div>

                    </div>


                </div>





            </div>
        </div>

    </div>
@endsection