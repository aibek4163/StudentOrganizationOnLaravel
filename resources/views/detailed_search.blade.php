<!doctype html>
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
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " style ="color: white;" href="leaders">Leaders Government</a>
                </li>
              </ul>

            

            </div>
          </nav>
    </div>
</div>


<div class="container">
                    <form action="filter" method="get" >

                        <div class="form-inline mt-3">
                        <div class="form-group col-3">
                            <label>
                                By Name:
                            </label>
                            <input   type="text" class="form-control" value="" name="org_name">
                        </div>

                        <div class="form-group col-3">
                            <label >
                            By Leaders
                            </label>
                            <input   type="text" class="form-control" value="" name="leader">
                        </div>


                        <div class="form-group col-3 mt-4">
                        <button class="btn my-2 my-sm-0 " style="background-color: #146145;color: white" type="submit" >Search </button>
                        </div>
                        </div>
                        <div class="form-inline mt-3">
                        <h5 class="mt-2 ml-3">Ordered by:</h5>


                            <button class="btn btn-sm ml-3 my-2 my-sm-0 " type="submit" style="background-color: #50535C;color: white" name="ascending" value="true" type="submit">Ascending </button>


                            <button class="btn btn-sm ml-3 my-2 my-sm-0 " type="submit" style="background-color: #6B757F;color: white"  name="descending" value="true" type="submit">Descending </button>


                        </div>

                    </form>
</div>
        <div class="container">

        @foreach ($db as $r)

         
            <input type="hidden" name="id" value="<%=s.getId()%>">
            <div class="jumbotron text-center p-3 mt-3">
              <div class="row">
                <div class="col-md-4">
                  <div class="avatar mx-auto white mt-5"><img src="{{$r->logo}}"
                                                         alt="avatar mx-auto white" style=" width: 210px;
  height: 200px;" class="rounded-circle img-fluid">
                  </div>
                </div>
                <div class="col-md-7 text-md-left ml-3 mt-3">
                    <h2 class="h2"><a href="#" style="text-decoration: none;color: black">{{$r->name}}</a></h2>
                    <h5 class="font-weight-normal">{{$r->description}}</h5>
                    <hr>
                    <h5 class="font-weight-normal">He is role in our university is :{{$r->role}}</h5>
                    <hr>
                
                    <p class="font-weight-normal">Team Leader of this organisation is :{{$r->surname}}
                    
                    <p class="font-weight-normal">This organisation have {{$r->amount_users}} members</p>
                
                </div>
              </div>
            </div>
          


        @endforeach
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
</html>