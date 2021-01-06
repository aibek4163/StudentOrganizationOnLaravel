@extends('master')

@section('user_content')


<div class="container">
                    <form action="filter" method="get" >

                        <div class="form-inline mt-3">
                        <div class="form-group col-3">
                            <label>
                                Organisation name:
                            </label>
                            <input   type="text" class="form-control" value="" name="org_name">
                        </div>

                    

                        <div class="form-group col-3 mr-5 mt-4">
                        <button class="btn my-2 my-sm-0 " style="background-color: #146145;color: white" type="submit" >Search </button>
                        </div>
                        </div>
                        <div class="form-inline mt-3">
                        <h5 class="mt-2 ml-3">Ordered by:</h5>


                            <button class="btn btn-sm ml-3 my-2 my-sm-0 " type="submit" style="background-color: #50535C;color: white" name="ascending" value="true" type="submit">Ascending </button>


                            <button class="btn btn-sm ml-3 my-2 my-sm-0 " type="submit" style="background-color: #6B757F;color: white"  name="descending" value="false" type="submit">Descending </button>


                        </div>

                    </form>
</div>
        <div class="container">

        @foreach ($result as $r)

         
            <input type="hidden" name="id" value="">
            <div class="jumbotron text-center p-3 mt-3">
              <div class="row">
                <div class="col-md-4">
                  <div class="avatar mx-auto white mt-5"><img src="{{$r->logo}}"
                                                         alt="avatar mx-auto white" style=" width: 210px;
  height: 200px;" class="rounded-circle img-fluid">
                  </div>
                </div>
                <div class="col-md-7 text-md-left ml-3 mt-3">
                    <h2 class="h2"><a href="organization/{{$r->id}}" style="text-decoration: none;color: black">{{$r->name}}</a></h2>
                    <h5 class="font-weight-normal">{{$r->description}}</h5>
                    <hr>
                    <h5 class="font-weight-normal">Role in our university is :{{$r->role}}</h5>
                    <hr>
                
                    <p class="font-weight-normal">Team Leader of this organisation is :
                    <?php $t=false; ?>
                    @foreach($db as $d)
                    <?php
                     if($r->user_id==$d->user_id && $t==false){
                      
                       echo $d->surname;
                       echo " ";
                       echo $d->name;
                       $t=true;
                     }
                     
                     ?>
                     </p>
                    @endforeach

                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="font-weight-normal">This organisation have {{$r->amount_users}} members</p>
                
                </div>
              </div>
            </div>
          


        @endforeach
        </div>

     




 @endsection