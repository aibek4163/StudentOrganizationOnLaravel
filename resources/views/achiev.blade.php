@extends('master')

@section('user_content')
        

        <div class="container">
            <div class="about_us_sg">
                <div class="my_container">
                    <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
                    <div class="my_container">


                        <img src="{{url('../images/ach.jpeg')}}" class="img-fluid" width="960" height="200" alt="Image"/>

                    

                    </div>
                
             
        <div class="my_container">
          <div class="title_events">
            <h5 class="display-4">Achievments of our students</h5>
          </div>
          <div class="card-deck">
           
          @foreach ($data as $d)    
            <!-- foreach -->

            <div class="card mt-3" style="max-width:300px;min-width:250px;">
                <img src="{{$d->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$d->title}}</h5>
                    <p class="card-text">{{$d->text}} </p>
                    <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>

             <!-- endforeach -->

             
            @endforeach
          </div>
        </div>
        
                   

            
              
                    
                </div>
            
            </div>
        </div>
        

@endsection