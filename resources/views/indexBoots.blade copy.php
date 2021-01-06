<!-- <!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Bootstrap page!</title>
  </head>
  <body>
    

    

    <?php
      $user = session('user');
    ?>

    <header class="header_intro">
      <div class="progress-container">
        <div  class="progress-bar" id="myBar" style="width:0%;"></div>
      </div>
      <div class="col-xs-12 no-padding">
          <div class="my_container">
            <a href="registration" style="color: white; text-align: left;margin-right: 10px;">Sign Up</a>
            <a href="sign_in" style="color: white;text-align: right;">Login</a>
              <h1 class="header_text">International IT University</h1>
          </div>
      </div>
      <br>
  </header>
    
    <div class="my_navbar" >
        <div class="cont" >
        <nav class="navbar navbar-expand-lg navbar-light"  >
            <a class="navbar-brand" style ="color: white;" href="indexBoots">IITU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" style ="color: white;" href="contact">Contuct Us <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style ="color: white;" href="about_us">About US</a>
                </li>                              
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" style ="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile">My Profile</a>
                    <a class="dropdown-item" href="organizations">Organizations</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " style ="color: white;" href="leaders">Leaders Government</a>
                </li>
              </ul>

              <form class="form-inline my-2 my-lg-0" action="/search" method="POST">
              @csrf
                <input class="form-control mr-sm-2" type="search" name=searched placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>





            </div>
          </nav>
    </div>
</div>

    <div class="zhoi">

        <div class="cont" style="margin-top: 35px;">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                  
                    <img src="{{url('../images/42837667_2176753655882028_6959031159183376384_o.png')}}" style="height: 450px;" class="d-block w-100" alt="...">
                    
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Student Government</h5>
                    
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{url('../images/sport.png')}}" style="height: 450px;"  class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 style="color: black;">Ministry of policy</h5>
               
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{url('../images/min.png')}}"  style="height: 450px;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: white; background-color: teal;">Ministry of Culture</h5>
                    
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>

        <div class="cont">
            <div class="text" style="text-align: center; color: black;">
              <h5 class="display-4">Mission</h5>
              <blockquote class="blockquote text-center">
                <p class="mb-0">Diligently serving with integrity, honor, and enthusiasm while always aware of our university's proud tradition of academic excellence. We advocate for all of our constituents with respect to individual differences which may include, but are not limited to: age, cultural background, disability, ethnicity, family status, gender presentation, immigration status, national origin, race, religion, sex, sexual orientation, socioeconomic status, and veteran status.</p>
              </blockquote>
            </div>
        </div>

        <div class="my_container_plan">
          <div class="card-deck" style="flex-flow:nowrap;">
            <a href="#">
              <div class="card" style="height: 10rem;">
                <svg class="svg_img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-32af" style="enable-background:new 0 0 512 512;"><g><g><path d="M498.791,161.127c-17.545-17.546-46.094-17.545-63.645,0.004c-5.398,5.403-39.863,39.896-45.128,45.166V87.426    c0-12.02-4.681-23.32-13.181-31.819L334.412,13.18C325.913,4.68,314.612,0,302.592,0H45.018c-24.813,0-45,20.187-45,45v422    c0,24.813,20.187,45,45,45h300c24.813,0,45-20.187,45-45V333.631L498.79,224.767C516.377,207.181,516.381,178.715,498.791,161.127    z M300.019,30c2.834,0,8.295-0.491,13.18,4.393l42.426,42.427c4.76,4.761,4.394,9.978,4.394,13.18h-60V30z M360.018,467    c0,8.271-6.728,15-15,15h-300c-8.271,0-15-6.729-15-15V45c0-8.271,6.729-15,15-15h225v75c0,8.284,6.716,15,15,15h75v116.323    c0,0-44.254,44.292-44.256,44.293l-21.203,21.204c-1.646,1.646-2.888,3.654-3.624,5.863l-21.214,63.64    c-1.797,5.39-0.394,11.333,3.624,15.35c4.023,4.023,9.968,5.419,15.35,3.624l63.64-21.213c2.209-0.736,4.217-1.977,5.863-3.624    l1.82-1.82V467z M326.378,312.427l21.213,21.213l-8.103,8.103l-31.819,10.606l10.606-31.82L326.378,312.427z M368.8,312.422    l-21.213-21.213c11.296-11.305,61.465-61.517,72.105-72.166l21.213,21.213L368.8,312.422z M477.573,203.558l-15.463,15.476    l-21.213-21.213l15.468-15.481c5.852-5.849,15.366-5.848,21.214,0C483.426,188.19,483.457,197.673,477.573,203.558z"></path>
                </g>
                </g><g><g><path d="M285.018,150h-210c-8.284,0-15,6.716-15,15s6.716,15,15,15h210c8.284,0,15-6.716,15-15S293.302,150,285.018,150z"></path>
                </g>
                </g><g><g><path d="M225.018,210h-150c-8.284,0-15,6.716-15,15s6.716,15,15,15h150c8.284,0,15-6.716,15-15S233.302,210,225.018,210z"></path>
                </g>
                </g><g><g><path d="M225.018,270h-150c-8.284,0-15,6.716-15,15s6.716,15,15,15h150c8.284,0,15-6.716,15-15S233.302,270,225.018,270z"></path>
                </g>
                </g><g><g><path d="M225.018,330h-150c-8.284,0-15,6.716-15,15s6.716,15,15,15h150c8.284,0,15-6.716,15-15S233.302,330,225.018,330z"></path>
                </g>
                </g><g><g><path d="M285.018,422h-90c-8.284,0-15,6.716-15,15s6.716,15,15,15h90c8.284,0,15-6.716,15-15S293.302,422,285.018,422z"></path>
                </g>
                </g></svg>
                <div class="card-body">
                  <h5 class="card-title"style="text-align: center;">Schedule</h5>
                </div>
              </div>
            </a>
            <a href="#">
                <div class="card" style="height: 10rem;">
                  <svg class="svg_img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 375.148 375.148" x="0px" y="0px" id="svg-bf5d" style="enable-background:new 0 0 375.148 375.148;"><g><g><g><path d="M222.076,218.936h-68.963c-5.771,0-10.449,4.678-10.449,10.449v135.314c0,5.771,4.678,10.449,10.449,10.449h68.963     c5.771,0,10.449-4.678,10.449-10.449V229.385C232.525,223.614,227.847,218.936,222.076,218.936z M211.627,354.25h-48.065V239.834     h48.065V354.25z"></path><path d="M358.958,136.911h-69.486c-5.771,0-10.449,4.678-10.449,10.449v217.339c0,5.771,4.678,10.449,10.449,10.449h69.486     c5.771,0,10.449-4.678,10.449-10.449V147.36C369.407,141.59,364.729,136.911,358.958,136.911z M348.509,354.25h-48.588V157.809     h48.588V354.25z"></path><path d="M85.717,269.613H16.231c-5.771,0-10.449,4.678-10.449,10.449v84.637c0,5.771,4.678,10.449,10.449,10.449h69.486     c5.771,0,10.449-4.678,10.449-10.449v-84.637C96.166,274.292,91.488,269.613,85.717,269.613z M75.268,354.25H26.68v-63.739     h48.588V354.25z"></path><path d="M370.452,10.479c-1.589-2.19-4.089-3.536-6.792-3.657L268.574,0.03c-5.771-0.433-10.8,3.895-11.233,9.665     c-0.433,5.771,3.894,10.8,9.665,11.233l67.297,4.57l-123.721,96.786l-94.563-74.188c-4.038-3.198-9.803-2.976-13.584,0.522     L5.26,141.613c-4.131,3.919-4.363,10.425-0.522,14.629c1.864,2.419,4.786,3.783,7.837,3.657c2.756-0.039,5.385-1.166,7.314-3.135     l90.384-86.727l93.518,73.665c3.817,3.056,9.244,3.056,13.061,0L350.601,39.624l-5.227,64.896     c-0.026,5.674,4.279,10.431,9.927,10.971h0.522c5.386,0.027,9.91-4.045,10.449-9.404l6.792-88.294     C373.447,15.074,372.471,12.34,370.452,10.479z"></path>
                  </g>
                  </g>
                  </g></svg>
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Development</h5>
                  </div>
                </div>
              </a>

            
              <a href="#">
                <div class="card" style="height: 10rem;">
                  <svg class="svg_img"  viewBox="0 0 16 16" class="bi bi-globe"  xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.018 7.5h2.49c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5zM2.255 4H4.09a9.266 9.266 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.024 7.024 0 0 0 2.255 4zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm-.5 1.077c-.67.204-1.335.82-1.887 1.855-.173.324-.33.682-.468 1.068H7.5V1.077zM7.5 5H4.847a12.5 12.5 0 0 0-.338 2.5H7.5V5zm1 2.5V5h2.653c.187.765.306 1.608.338 2.5H8.5zm-1 1H4.51a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm1 2.5V8.5h2.99a12.495 12.495 0 0 1-.337 2.5H8.5zm-1 1H5.145c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12zm-2.173 2.472a6.695 6.695 0 0 1-.597-.933A9.267 9.267 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM1.674 11H3.82a13.651 13.651 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm8.999 3.472A7.024 7.024 0 0 0 13.745 12h-1.834a9.278 9.278 0 0 1-.641 1.539 6.688 6.688 0 0 1-.597.933zM10.855 12H8.5v2.923c.67-.204 1.335-.82 1.887-1.855A7.98 7.98 0 0 0 10.855 12zm1.325-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm.312-3.5h2.49a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.91 4a9.277 9.277 0 0 0-.64-1.539 6.692 6.692 0 0 0-.597-.933A7.024 7.024 0 0 1 13.745 4h-1.834zm-1.055 0H8.5V1.077c.67.204 1.335.82 1.887 1.855.173.324.33.682.468 1.068z"/>
                  </svg>
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Advisory</h5>
                  </div>
              </div>
              </a>
            
          </div>
        
        <div class="my_container">
          <div class="title_events">
            <h5 class="display-4">Up coming events</h5>
          </div>
          <div class="card-deck">
            <div class="card">
              <img src="{{url('../images/event_1.jpg')}}"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Some event</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
            <div class="card">
              <img src="{{url('../images/event_2.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Some event</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
            <div class="card">
            <img src="{{url('../images/event_3.jpeg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Some event</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
        

        <div class="my_container">
          <div class="title_events">
            <h5 class="display-4">Organizations</h5>
          </div>
          <div class="card-deck">
            @foreach($orgs as $o)
            <div class="card mb-3" style="max-width:300px;min-width:250px;">
              <img src="{{$o->logo}}"class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="organization/{{$o->id}}">{{$o->name}}</a></h5>
                <p class="card-text">{{$o->description}}</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
            @endforeach
          </div>
        </div>


        <div class="cont">

        <div class="boxlinks">
            <div class="box"><a href="#"><img alt=""  src="{{url('../images/1.png')}}"> </a>
       
            <h2><a href="news1">Fresh news in our University</a></h2>
            </div>
            
            <div class="box"><a href="#"><img  alt="" src="{{url('../images/2.png')}}"> </a>
            
            <h2><a href="#">Find out more about IITU </a></h2>
            </div>
            
            <div class="box"><a href="#"><img  alt="" src="{{url('../images/3.png')}}"> </a>
            
            <h2><a href="#">Get confidential advice</a></h2>
            </div>
            
            <div class="box"><a href="#"><img alt="" src="{{url('../images/4.png')}}"> </a>
            
            <h2><a href="#">Online library of University</a></h2>
            </div>
        </div>

        </div>
    </div>  
  
    <div class="footer">
        <div class="footer_column">
          
            <div class="cont">
                <nav class="footer_nav">
     
                    <div class="nav_content  ">
           
                        <ul >
                            <li ><a class=" nav_link" href="#">About StudGOV</a></li>
                            <li ><a class=" nav_link" href="#">Academics</a></li>
                            <li ><a class=" nav_link" href="#">Admissions</a></li>
                            
                        </ul>
                        <ul >
                            <li  ><a class=" nav_link"  href="#">Locations</a></li>
                            <li  ><a class=" nav_link" href="#">Campus Life</a></li>
                            <li  ><a class=" nav_link" href="#">Research</a></li>
                        </ul>
                    </div>
            
                </nav>

                <div class="logo_container">
                    
                    <img class="logo_foot" src="{{url('../images/logo_t.png')}}" alt="">
                    
                    <p class="footer_address">070777 , <br >Almaty, Manas34A, Kazakhstan<br>8 777 5466 9966
                    </p>
                </div>

                

            </div>
            
            
        </div>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
            <div class="container text-center">
              <small>Copyright &copy; Internation IT University</small>
            </div>
          </footer>
    </div>































    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html> -->