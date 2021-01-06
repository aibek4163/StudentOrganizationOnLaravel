@extends('master')

@section('user_content')

    <?php
      use App\Http\Controllers\OrganizationController;
    ?>

    <div class="zhoi">
        <div class="my_container">
                <div class="title_events">
                    @if(count($req_u)>0)
                        <h5 class="display-4">All Requests</h5>
                    @else
                        <h5 class="display-4">You don`t have Requests</h5>
                    @endif
                </div>
                <div class="card-deck">
                    @foreach($req_u as $r)
                    <div class="card mb-3" style="max-width:300px;min-width:250px;">
                        <img src="{{$r->profile_img}}"class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="organization/{{$r->id}}">{{$r->name}}</a></h5>
                            <p class="card-text">{{$r->surname}}</p>
                            
                            <?php
                            //echo session()->get('user')->id;
                            $org_id = OrganizationController::getLeaderById(session()->get('user')->id);
                            // $org_id;
                                  if(OrganizationController::isInRequest($r->id,$org_id)){
                            ?>
                            <p class="card-text"><a href="confirm_request/{{$r->id}}"><button class="btn btn-sm btn-success">Confirm</button></a></p>
                            <p class="card-text"><a href="reject_from_org/{{$r->id}}"><button class="btn btn-sm btn-success">Reject</button></a></p>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
        <div class="my_container">
                <div class="title_events">
                    @if(count($users)>0)
                        <h5 class="display-4">All Users</h5>
                    @else
                        <h5 class="display-4">You don`t have Members</h5>
                    @endif
                </div>
                <div class="card-deck">
                    @foreach($users as $r)
                    <div class="card mb-3" style="max-width:300px;min-width:250px;">
                        <img src="{{$r->profile_img}}"class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="organization/{{$r->id}}">{{$r->name}}</a></h5>
                            <p class="card-text">{{$r->surname}}</p>
                            <?php 

                            $org_id = OrganizationController::getLeaderById(session()->get('user')->id);
                            //echo $org_id;
                            if( OrganizationController::isInOrg($r->id,$org_id)) ?>
                            <p class="card-text"><a href="delete_from_org/{{$r->id}}" ><button class="btn btn-sm btn-success">Delete</button></a></p>
                            <?php
                                
                            ?>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>  

    @endsection