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
                        <img src="{{url('frontend/images/1490079412_kazisahidul.jpg')}}" alt="...">
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Member</h5>
                            <p class="card-text"style="text-align: justify">Professor (Dr.) Qazi Shahidul Alam is a Director of Islami Bank Bangladesh Limited as the representative of Platinum Endeavors Limited. He is a well known Professor in Orthopedic Surgery in Bangladesh. He completed his MBBS from Dhaka Medical College in 1972, FICS in 1987 and MS of Orthopedic Surgery in 1980.</p>

                        </div>
                    </div>

                </div>
                <div class="card mb-3">

                    <div class="col-md-4">
                        <img src="{{url('frontend/images/1566096456_Saleh Jahur.jpg')}}" alt="...">
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Member</h5>
                            <p class="card-text" style="text-align: justify">Professor Dr. Mohammad Saleh Jahur is an Independent Director of the Bank. He was a Professor of Accounting and Banking at University of Chittagong. He started his career as Lecturer in the Department of Finance in 1993. Before, joining the university, He worked at MIDAS (an NGO; now a financial institution) and Bangladesh Petroleum Corporation (an Autonomous Government Organization) as executive. He also completed BCS successfully but did not join.

                                Dr Jahur completed all academic programs –SSC, HSC, B.Com (Hons.) in Accounting, and M.Com in Accounting with outstanding results. He did his Ph.D.on Lease Financing in Bangladesh Study of Policy and Performance under the joint supervision of Professor Dr S.P.Singh and Professor Dr. Manoj Anand in University Business School, Punjab, India under ICCR Scholarship of Government of India in 2000-2002. He did a diploma on Financial Reporting Standards and Assurance under the World Bank Scholarship at London, United Kingdom in 2008. He also studied on Green Productivity for Industry under the scholarship of METI, Japan in 2013. He also worked in Chartered Accountancy Firm for five months.

                                He is a continuous researcher, working in the area of corporate finance, stock market and industrial productivity for many years. He has a good number articles published at home and abroad. He also participated many seminar and conference as paper presenter, discussant, and session chair at home and abroad. Besides, eleven students got awarded with M. Phil. and Ph.D. under his supervision from the University of Chittagong and about fourteen students are pursuing M. Phil. and Ph.D. at universities in Bangladesh and Malaysia under his supervision/Joint supervision at present.

                                Mr. Jahur successfully implemented the projects titled "Grameen Bank and Socio-Economic Changes—A Study of Select Loanees" and “Higher Education Quality Enhancement Project“ awarded by German Cultural Center-Goethe institute, Dhaka, and University Grants Commission, World Bank & Government of the People’s Republic of Bangladesh respectively. Besides, he worked as Editor of Capital Market Journal-Vision and Academic Journal-of Faculty of Business Administration of University of Chittagong.

                                Professor Jahur served as an Advisor to Chittagong Capital Limited-a Brokerage of Chittagong Stock Exchange, Bangladesh and GPH Ispat Limited for three years from 2009 to 2012. He worked as an Independent Director of GPH Ispat Limited for two terms (6 years) i. e. from 2012 to 2018. He has also been working as an Independent Director of Hakkani Pulp and Paper Mills Limited since September, 2017. He is a member of Chittagong Club Limited, Chittagong and Life Member at Ma O Shishu Hospital Limited, Chittagong & Chittagong Diabetics Association, Khulshi, Chittagong. Prof. Jahur has visited many countries and participated in many international seminars, symposiums & conferences. </p>
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
                            <p class="card-text"style="text-align: justify">Salim Ullah</p>

                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>
@endsection