@extends('master')

@section('user_content')

    <div class="my_container">
        <h1 class="display-3">Register Account</h1>
        <div class="register_form">
            <form action="user" method="post">
                @csrf
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">First Name <span class="required">*</span></label>
                    <div class="col-sm-6">
                      <input type="text" name="first_name" class="form-control form-control-lg" id="colFormLabelLg">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Last Name <span class="required">*</span></label>
                    <div class="col-sm-6">
                      <input type="text" name="last_name" class="form-control form-control-lg" id="colFormLabelLg">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Birthdate</label>
                    <div class="col-sm-6">
                        <input name="date" class="form-control form-control-lg" id="date"  type="date" id="colFormLabelLg"/>
                    </div>
                    <small id="birthdateHelp1"  class="form-text text-muted">Input your birthdate</small>
                </div>                
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Phone Number</label>
                    <div class="col-sm-6">
                      <input type="text" name="phone_number" class="form-control form-control-lg" id="colFormLabelLg">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Address </label>
                    <div class="col-sm-6">
                      <input type="text" name="address" class="form-control form-control-lg" id="colFormLabelLg">
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email <span class="required">*</span></label>
                    <div class="col-sm-6">
                      <input type="email" name="email" class="form-control form-control-lg" id="colFormLabelLg">
                    </div>
                </div>       
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Password <span class="required">*</span></label>
                    <div class="col-sm-6">
                      <input type="password" name="password" class="form-control form-control-lg" id="colFormLabelLg">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                    <div class="col-sm-6">
                      <input type="password" name="re_pass" class="form-control form-control-lg" id="colFormLabelLg">
                      <small id="passwordHelpBlock" class="form-text text-muted">
                        Re type password. <span class="required">*</span>
                      </small>
                      <button type="submit" class="btn btn-success btn-lg float-right text-white">Register</button>
                    </div>
                </div>       
            </form>
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