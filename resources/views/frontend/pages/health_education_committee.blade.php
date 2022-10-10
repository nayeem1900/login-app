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

                <div class="card mb-3" >

                    <div class="col-md-4">
                        <img src="{{url('public/frontend/images/1572253796_Fashiul Alam.jpg')}}" alt="...">
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Chairman</h5>
                            <p class="card-text" style="text-align: justify">Professor Dr. Md. Fashiul Alam is an Independent Director of the Bank. Currently, he is the Dean of Faculty of Business Studies, Port City International University, Chittagong. He was the Professor of Department of Management and Dean of Faculty of Commerce & Chairman of Department of Management, University of Chittagong and the former Vice Chancellor, Feni University. He was also the Senior Research Fellow, Institute of Business Management, Karachi, Pakistan. He obtained B.Com Hons and M.Com Degree in Management from the University of Chittagong and stood first in order of merit in both examinations. As an Indian Government Scholar, he earned Ph. D in 1982 on ‘Collective Bargaining in Bangladesh Jute Industry’ from the University of Punjab, Chandigarh. He did Post Doctoral Research from the University of London, UK as a Commonwealth Academic Staff Fellow in 1991-92. He was also a Visiting Scholar in 2009 at University of Texas A & M, USA.

                                Dr. Alam participated in the Australian Academy of Business Leadership sponsored SIBR Conference 2015, Sydney, Australia, April 17-20, 2015, 8th SKM Symposium and 2nd CBSM Conference, Magdeburg, Germany, September 17-20, 2013, Canada International Conference on Education (CICE, 012) CICE-2012 held in June 18­-21, 2012 at University of Guelph, Canada and others in France, USA, China, South Korea, Malaysia, Taiwan, Bahrain during his professional tenure.

                                Mr. Alam has traveling experience in different countries like United Kingdom, Saudi Arabia, France, USA, India. South Korea, Thailand, Malaysia, UAE, Qatar, Pakistan. China, Sri Lanka, Oman, Bahrain, Singapore, Taiwan, Canada, Turkey, Germany, Switzerland, Hong Kong. Australia and has language proficiency in Bengali, English, Arabic, Urdu and Hindi.

                                Dr. Alam is well known as a reputed scholar, potential academia, creative researcher, efficient administrator, dedicated social worker and a man of high dignity and distinct personality. His fields of specialization cover mainly HRM, HRD, Industrial Relations, and Strategic Management. Besides holding a long experience of pursuing research in management and allied fields and conducting project work, he is an author of 41 articles published in reputed and recognized national and international journals.

                                He is as an Independent Director of the Peninsula Chittagong Limited since 2014. He was founder & Chairman of Nazmul-Jahan Foundation and Chairman of Sitakunda Foundation (A Social & Development Organization), Estd, in 1998. He is also the founder & President of Hill-Side Public School & Technical College (Estd. 2000) situated near Chittagong University.

                                He was Secretary General of Bangladesh Federation of University Teachers' Association in 1994 and President of Chittagong University Teachers Association in 1993 and 1994.

                            </p>
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
                        <img src="" alt="...">
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Member</h5>
                            <p class="card-text" style="text-align: justify">S.A.M SalimUllah</p>
                        </div>

                    </div>


                </div>





            </div>
        </div>

    </div>
@endsection