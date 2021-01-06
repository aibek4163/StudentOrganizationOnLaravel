@extends('master')

@section('user_content')







    <div class="container">

      <link rel="stylesheet" href="{{asset('css/leaders.css')}}">
      <div class="about-section">
          <h1>Leaders our Student organisations</h1>
          <p>If you want to invite to some Stud Government</p>
          <p>Just press button contuct and contuct with us</p>
        </div>
        
        <h2 style="text-align:center">Leaders</h2>
        <div class="row">
          <div class="column">
            <div class="card">


              <img src="{{url('../images/litlead.jpg')}}" alt="Jane" style="width:100%">
              <div class="container">
                <h2 style="text-align: center;">Dauranbayev Dauren</h2>
                <p class="title">Leage of IT</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
             
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
        
          <div class="column">
            <div class="card">


              <img src="{{url('../images/minLead.jpg')}}" alt="Mike" style="width:100%">
              <div class="container">
                <h2 style="text-align: center;">Aruzhan Suleimenova</h2>
                <p class="title">Ministry of Culture</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
               
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
        
          <div class="column">
            <div class="card">




              <img src="{{url('../images/askh.png')}}" alt="John" style="width:100%">
              <div class="container">
                <h2 style="text-align: center;">Sagatbek Askhat</h2>
                <p class="title">Ministry of Policy</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
        </div>
  </div>































    @endsection