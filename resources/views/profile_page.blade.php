@extends('master')



 
@section('user_content')


        <div class="container">
            <div class="row mt-3 ">
                <div class="col-3">
            
                    <img src="{{session()->get('user')->profile_img}}" height="200" class="w-100">

                    <div class="card mt-5" style="width: 100%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{session()->get('user')->email}} </li>
                            <li class="list-group-item"><a href="/profile"><i class="fas fa-id-card"></i>My Profile</a></li>
                            <li class="list-group-item"><a href="#"><i class="fas fa-cogs"></i>Settings</a></li>
                            <li class="list-group-item"><a href="/logout" style="color: #862F3B"><i class="fas fa-sign-out-alt"></i>Log out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 offset-1">
                    <h4>Edit Profile</h4>
                    <!--
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Email exist!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Your account updated!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Old Password Wrong!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Not same passwords!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Your password changed!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    -->
                    <form action="update_profile" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{session()->get('user')->id}}">
                        <div class="edit_profile border-bottom mb-3 pb-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{session()->get('user')->email}}" readonly>
                                
                                <small id="emailHelp" class="form-text text-muted">Input your email</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFullName1">Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputFullName1" aria-describedby="fullnameHelp" value="{{session()->get('user')->name}}">
                                <small id="fullnameHelp" class="form-text text-muted">Input your name</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFullName1">Surname</label>
                                <input type="text" class="form-control" name="surname" id="exampleInputFullName1" aria-describedby="fullnameHelp" value="{{session()->get('user')->surname}}">
                                <small id="fullnameHelp" class="form-text text-muted">Input your surname</small>
                            </div>
                            <div class="form-group">
                                <label for="date">Birthdate</label>
                                <input class="form-control" id="date" name="date" placeholder="YYYY/MM/DD" type="date" value="{{session()->get('user')->birthdate}}"/>
                                <small id="birthdateHelp1" class="form-text text-muted">Input your birthdate</small>
                            </div>
                            <button type="submit" class="btn text-white" style="background-color: #180B7A">Update Profile</button>
                        </div>
                    </form>
                    <form action="update_picture" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{session()->get('user')->id}}">
                        <div class="edit_picture border-bottom mb-3 pb-3">
                            <h4>Edit Picture</h4>
                            <div class="form-group">
                                <label for="inputPictureUrl">Edit Picture URL</label>
                                <input type="text" class="form-control" name="picture_url" id="inputPictureUrl" aria-describedby="pictureurl" value="{{session()->get('user')->profile_img}}">
                                <small id="pictureurl" class="form-text text-muted">Input your picture URL</small>
                            </div>
                            <button type="submit" class="btn text-white" style="background-color: #180B7A">Update Picture</button>
                        </div>
                    </form>

                    <form action="update_password" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{session()->get('user')->id}}">
                        <div class="edit_password mb-3 pb-3">
                            <h4>Update Password</h4>
                            <div class="form-group">
                                <label for="oldPassword">Old Password</label>
                                <input type="password" class="form-control" name="old_password" id="oldPassword" aria-describedby="oldPasswordHelp">
                                <small id="oldPasswordHelp" class="form-text text-muted">Input your old password</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">New Password</label>
                                <input type="password" class="form-control" name="new_password" id="exampleInputPassword1" aria-describedby="passwordHelp">
                                <small id="passwordHelp" class="form-text text-muted">Input your new password</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Re-New Password</label>
                                <input type="password" class="form-control" name="re_new_password" id="exampleInputRePassword1" aria-describedby="repasswordHelp">
                                <small id="repasswordHelp" class="form-text text-muted">Re input your new password again</small>
                            </div>
                            <button type="submit" class="btn text-white" style="background-color: #180B7A">Update Password</button>
                        </div>
                    </form>
                </div>
              
            </div>
        </div>
        <script>
            $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                var options={
                    format: 'yyyy/mm/dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            })
        </script>

@endsection
 