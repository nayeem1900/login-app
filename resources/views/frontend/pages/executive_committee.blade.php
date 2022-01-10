@extends('frontend.layouts.master')

@section('content')
    <p style="text-align: center; font-size: 30px;" ><strong>Executive Committee</strong></p>


    <div class="container">

        <div class="row">
           <div class="col-md-3">
               <div class="card" style="width: 18rem;">
                   @include('frontend.layouts.committee')
               </div>
           </div>

            <div class="col-md-9">

                <div class="card mb-3" >

                        <div class="col-md-4">
                            <img src="{{url('frontend/images/1523785648_Dr Tanveer Ahmad.jpg')}}" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Chairman</h5>
                                <p class="card-text" style="text-align: justify">Dr. Tanveer Ahmad is a Director of the Bank representing Marsa Food & Beverage Limited. He completed his MBBS Degree from University of Science & Technology, Chittagong in 2009. Then he obtained MD (Doctor of Medicine) in Cardiology from Bangabandhu Sheikh Mujib Medical University in 2017. He founded T A Trading in 2003. Then he joined in New Star Lab & Diagnostic Centre in 2010 as director and Guest Lecturer of Psychology Department in 2011 and Medicine Department in 2012 in the University of Science & Technology, Chittagong before joining Sir Solimullah Medical College & Hospital as a post Graduate Fellow. At present he has been working in United Hospital, first as a Fellow Cardiologist in 2017 and later on in the Department of Cardiology. <br>


                                    Dr. Tanveer is the owner of T A Trading and Managing Director of Infinia Knit Fabrics Ltd. & Paradise International Ltd. He manages and supervises the concerned institutions.<br>Dr. Tanveer visited various countries of the world and participated in various seminars and workshops conducted at National and International level by various local organizations including Bangladesh Society of Cardiology, Transnational (TNCS), BIT and Multinationals (MNCs), American College of Cardiology (ACC) workshops. He also volunteered for the free medical camp and relief work in various rural areas of Bangladesh. He is a life time member of Bangladesh Cardiac Society and an associate member of Bangladesh Intervention Cardiac Society. He is involved in a number of research studies and his thesis work on young patients with cardiovascular diseases was published in Bangladesh Heart Journal.<br>
                                    He is also engaged in various social, educational and cultural organizations of the country.

                                </p>
                            </div>

                        </div>


                </div>

                <div class="card mb-3">

                        <div class="col-md-4">
                            <img src="{{url('frontend/images/1557393365_nazmul.jpg')}}" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body ">
                                <h5 class="card-title">Member</h5>
                                <p class="card-text" style="text-align: justify">Professor Md. Nazmul Hassan, Ph.D is the Chairman of Board of Directors of Islami Bank Bangladesh Limited and also the Chairman of  Islami Bank Foundation. He represents Armada Spinning Mills Limited as Director of the Bank. Dr. Hassan started his career as a Lecturer in Dhaka University back in 1975. Then he completed his MS and Ph.D. with major in Development Economics. There after he was appointed as Professor, Institute of Nutrition and Food Science, University of Dhaka in 1993 and has now been holding dual appointments at Dhaka and Brown University, USA. He held many important research and teaching position throughout his long professional career of about forty years. He worked as Consultant at Cornell University, USA Food System Development research project and served on Ph.D Committees there. He was also a Visiting professor at the Royal Agricultural and Veterinary University, Denmark and a Consultant at the International Food Policy Research Institute and Academy for Educational Development, Washington DC. USA. He was involved with the EU and French Food Aid Evaluation in Bangladesh. In addition he collaborated with few more Universities in USA on matters of research, and has over one hundred influential publications in peer reviewed outlets to his credit</p>

                            </div>
                        </div>

                </div>
                <div class="card mb-3">

                        <div class="col-md-4">
                            <img src="{{url('frontend/images/1490079412_kazisahidul.jpg')}}" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Member</h5>
                                <p class="card-text">Professor (Dr.) Qazi Shahidul Alam is a Director of Islami Bank Bangladesh Limited as the representative of Platinum Endeavors Limited. He is a well known Professor in Orthopedic Surgery in Bangladesh. He completed his MBBS from Dhaka Medical College in 1972, FICS in 1987 and MS of Orthopedic Surgery in 1980.</p>

                            </div>
                        </div>


                </div>
                <div class="card mb-3">

                        <div class="col-md-4">
                            <img src="{{url('frontend/images/1557046101_abdullah al - Rajhi.jpg')}}" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Vice-Chairman</h5>
                                <p class="card-text" style="text-align: justify">Mr. Yousif Abdullah Al-Rajhi is the Vice Chairman of the Board of Directors and a foreign Director of the Bank.He is a Saudi National. He served as a Branch Manager of Al-Rajhi Banking & Investment Corporation from 1987 to 1998, he also served as Project Finance manager of Al-Rajhi Banking & Investment Corporation from 1992 to 1995 and served as DGM of Al-Rajhi Company for Industry & Trade from 1996 till recent promotion to the rank of General Manager.</p>

                            </div>
                        </div>

                </div>


            </div>
        </div>

    </div>
@endsection