@extends('master')

@section('user_content')

<?php
    use App\Http\Controllers\OrganizationController;
?>

<div class="container">

<h1 class="my-4">{{$org['name']}}
  <small>Organization</small>
</h1>

<div class="row">

  <div class="col-md-8">
    <img class="img-fluid" src="{{$org['logo']}}" alt="">
  </div>

  <div class="col-md-4">
    <h3 class="my-3">Description</h3>
    <p>{{$org['description']}}</p>
    <h3 class="my-3">About Organization</h3>
    <ul>
      <li>Role in university: {{$org['role']}}</li>
      <li>Number of Students: {{$org['amount_users']}}</li>
      <?php $t=false; ?>
          @foreach($user as $d)
          <?php
           if($org['user_id']==$d->user_id && $t==false){
            // echo $d->surname;
            // echo " ";
            // echo $d->name;
            $t=true;
            ?>
            <li>Leader:  {{$d->surname}} {{$d->name}}</li>
             
             <?php
           }
             ?>
          @endforeach
          <?php
                            //echo session()->get('user')->id;
                            
                            // $org_id;
                                  if(!OrganizationController::isInRequest(session()->get('user')->id,$org['id'])){
                            ?>
            <li><button class="btn btn-success btn-sm"><a href="/send_request/{{$org['id']}}" style="text-decoration: none;color:white;">Send Request</a></button></li>
            <?php
                                  }else if(OrganizationController::isInRequest(session()->get('user')->id,$org['id'])){
            ?>
            <li><button class="btn btn-danger btn-sm"><a href="/cancel_request/{{$org['id']}}" style="text-decoration: none;color:white;">Cancel Request</a></button></li>
            <?php
                                  }
            ?>
    </ul>
  </div>

</div>
<!-- /.row -->

<!-- Related Projects Row -->
<h3 class="my-4">Related Projects</h3>

<div class="row">

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
  </div>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
  </div>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
  </div>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->







@endsection