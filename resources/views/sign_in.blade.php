@extends('master')

@section('user_content')
    <div class="my_container">
        <div class="sign_in d-flex justify-content-between">
            <div class="sign_title mt-5">
                <h1 class="display-3 mt-5" style="text-transform: uppercase;">Welcome to<br> Your New<br> Students`s <br>Union</h1>
            </div>
            <div class="jumbotron jumbotron-fluid mt-5">
                <div class="container">
                    <h3 style="text-align: center;padding-bottom: 30px;">Sign In</h1>
                    <div class="register_form">
                        <form action="login" method="POST">
                            @csrf
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-success">Sign In</button>
                            <a href="#" class="mt-5"><small id="emailHelp" class="form-text text-muted mt-3">Register new Account</small></a>
                        </form>
                    </div>
                </div>
              </div>
        </div>
    </div>
@endsection