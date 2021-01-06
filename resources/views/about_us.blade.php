@extends('master')

@section('user_content')

        <div class="container">
            <div class="about_us_sg">
                <div class="my_container">
                    <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
                    <div class="my_container">


                        <img src="{{url('../images/about_img.png')}}" class="img-fluid" width="960" height="282" alt="Image"/>

                    

                    </div>
                    <div class="about_title">
                        <h1>What we do</h1>
                    </div>
                    <div class="about_title">
                        <p >
                            We are your brand new, Students’ Government here at IT University. 
                        </p>
                    </div>
                    <div class="about_text">
                        <p class="lead">
                            We exist to fight for, advocate and represent the interests and needs of all students at IT University. All students are automatically a member, and all members drive what we do.
                        </p>
                    </div>
                    <div class="about_text">
                        <p class="lead">
                            We’re a registered charity, we’re independent from the University of IT (although we do work in close partnership with them) and we are led by student Officers that you elected.
                        </p>
                    </div>
                    <div class="about_text">
                        <p class="lead">
                            Our goal is for IT SG to be a groundbreaking organisation that leads the way in representation for all students, both undergraduates and postgraduates. IT SG will replace two current students’ unions, and be a single union for all students. In combining our expertise and resources, we will ensure that all students, regardless of level of study, are represented, supported and have their voice heard across the University of IT. No matter your level of study, background or the marginalisation you may experience, IT SG will be a union that fights for you.
                        </p>
                    </div>
                    <div class="about_text">
                        <p class="lead">
                            You can read more about how IT SG came to exist in our recent news article.
                        </p>
                    </div>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe  src="https://www.youtube.com/embed/PJE2V8dX_Yk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                    
                </div>
            
            </div>
        </div>
        

       
 @endsection