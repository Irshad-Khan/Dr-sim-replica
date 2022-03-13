@extends('layouts.admin_auth')

@section('title','Password Reset')
@section('admin_auth_content')
<!-- Row -->
<div class="table-struct full-width full-height">
    <div class="table-cell vertical-align-middle auth-form-wrap">
        <div class="auth-form  ml-auto mr-auto no-float">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="sp-logo-wrap text-center pa-0 mb-30">
                        <a href="{{ route('admin.login') }}">
                            <img class="brand-img mr-10" src="{{ asset('dist/img/logo.png') }}" alt="brand"/>
                            <span class="brand-text">Hound</span>
                        </a>
                    </div>
                    <div class="mb-30">
                        <h3 class="text-center txt-dark mb-10">Need help with your password?</h3>
                        <h6 class="text-center txt-grey nonecase-font">Enter the email you use for Hound, and we’ll help you create a new password.</h6>
                    </div>
                    <div class="form-wrap">
                        <form action="#">
                            <div class="form-group">
                                <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
                                <input type="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter email">
                                 <a class="capitalize-font txt-primary block mb-10 mt-10 pull-right font-12" href="{{ route('admin.login') }}">login</a>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-info btn-rounded">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->
@endsection
