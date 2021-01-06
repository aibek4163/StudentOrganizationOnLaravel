@extends('master')

@section('user_content')



<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">

<h2>Schedule</h2>
    <p class="lead">
        Here you can find all events in our university!
    </p>
    

    <hr />

    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Event</th>
                        <th>Location</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Single event in a single day -->
                    @foreach ($data as $d)   
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            
                             <?php 
                             $date=$d->sch_date;
                             $dayN = date('d', strtotime($date));
                             $day = date('l', strtotime($date));
                             $month = date('F', strtotime($date));
                             $year = date('Y', strtotime($date));
                             ?>
                            <div class="dayofmonth">{{$dayN}}</div>
                            <div class="dayofweek">{{$day}}</div>
                            <div class="shortdate text-muted">{{$month}},{{$year}}</div>
                        </td>

                        <td class="agenda-time">
                        {{$d->sch_time}}
                        </td>

                        <td class="agenda-events">
                            <div class="agenda-event">
                            
                                {{$d->name}}
                            </div>
                        </td>

                        <td class="agenda-events">
                            <div class="agenda-event">
                               
                            {{$d->location}}
                            </div>
                        </td>

                    </tr>
         
                    @endforeach   
                </tbody>
            </table>
        </div>
    </div>
</div>





<style>

.agenda {  }

/* Dates */
.agenda .agenda-date { width: 170px; }
.agenda .agenda-date .dayofmonth {
  width: 40px;
  font-size: 36px;
  line-height: 36px;
  float: left;
  text-align: right;
  margin-right: 10px; 
}
.agenda .agenda-date .shortdate {
  font-size: 0.75em; 
}


/* Times */
.agenda .agenda-time { width: 140px; } 


/* Events */
.agenda .agenda-events {  } 
.agenda .agenda-events .agenda-event {  } 

@media (max-width: 767px) {
    
}





</style>





















@endsection