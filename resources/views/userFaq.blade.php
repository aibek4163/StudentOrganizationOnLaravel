@extends('master')

@section('user_content')
           <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <div class="my_container_nav">
                            <li class="breadcrumb-item"><a href="indexBoots.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="about_us.html">About</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </div>
                    </ol>
            </nav>-->
        

        <div class="container">
            <div class="about_us_sg">
                <div class="my_container">
                    <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
                    <div class="my_container">



                    

                    </div>
                
                    <div class="about_title">
                        <p >
                   
                        </p>
                    </div>

        </div>
        </div>
        </div>




        
<div class="container">
    <div class="" id="accordion">
    @foreach ($data as $d)    
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">{{$d->question}}</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="card-block ml-5" style="font-size:22px">
                {{$d->answer}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>





<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>





@endsection