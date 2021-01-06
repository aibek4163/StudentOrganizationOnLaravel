@extends('master')

@section('user_content')

    <div class="my_container">
        <h1 class="display-3">Register Account</h1>
        <div class="register_form">
            <form action="admin" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Login <span class="required">*</span></label>
                    <div class="col-sm-6">
                      <input type="text" name="login" class="form-control form-control-lg" id="colFormLabelLg">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Password <span class="required">*</span></label>
                    <div class="col-sm-6">
                      <input type="password" name="password" class="form-control form-control-lg" id="colFormLabelLg">
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg float-right text-white">Register</button>
            </form>
        </div>
    </div>
@endsection