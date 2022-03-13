@extends('layouts.admin_auth')
@section('title','Login')
@section('admin_auth_content')
    <!-- Row -->
<div class="table-struct full-width full-height">
    <div class="table-cell vertical-align-middle auth-form-wrap">
        <div class="auth-form  ml-auto mr-auto no-float">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="mb-30">
                        <h3 class="text-center txt-dark mb-10">Sign in to DrSim</h3>
                        <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                         @if(session('error'))
                            <div class="alert alert-danger alert-dismissable alert-style-1 mt-10">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="zmdi zmdi-block"></i>{{ session('error') }}.
                            </div>
                        @endif
                    </div>
                    <div class="form-wrap">
                        <form action="{{route('admin.auth')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label mb-10" for="email">Email address</label>
                                <input type="email" name="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Enter email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="pull-left control-label mb-10" for="password">Password</label>
                                <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="{{ route('show.recover.password.form') }}">forgot password ?</a>
                                <div class="clearfix"></div>
                                <input type="password"
                                    name="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Enter password">
                                @error('password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="checkbox checkbox-primary pr-10 pull-left">
                                    <input id="checkbox_2" type="checkbox">
                                    <label for="checkbox_2"> Keep me logged in</label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-info btn-rounded">sign in</button>
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
