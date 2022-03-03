@extends('layouts.admin')

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-lg-3 col-xs-12">
        <div class="panel panel-default card-view  pa-0">
            <div class="panel-wrapper collapse in" style="padding-bottom: 63px !important">
                <div class="panel-body  pa-0">
                    <div class="profile-box">
                        <div class="profile-cover-pic">
                            <div class="fileupload btn btn-default">
                                <span class="btn-text">edit</span>
                                <input class="upload" type="file">
                            </div>
                            <div class="profile-image-overlay"></div>
                        </div>
                        <div class="profile-info text-center">
                            <div class="profile-img-wrap">
                                <img class="inline-block mb-10" src="{{ asset('dist/img/mock1.jpg') }}" alt="user"/>
                                <div class="fileupload btn btn-default">
                                    <span class="btn-text">edit</span>
                                    <input class="upload" type="file">
                                </div>
                            </div>
                            <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">{{ Auth::guard('admin')->user()->full_name }}</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-xs-12">
        <div class="panel panel-default card-view pa-0">
            <div class="panel-wrapper collapse in">
                <div  class="panel-body pb-0">
                    <div  class="tab-struct custom-tab-1">
                        <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                            <li class="active" role="presentation"><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#settings_8" aria-expanded="false"><span>settings</span></a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent_8">
                            <div  id="settings_8" class="tab-pane fade active in" role="tabpanel">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="col-sm-12 col-xs-12">
                                                        <div class="form-wrap">
                                                            <form action="{{ route('admin.profile.update') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ Auth::guard('admin')->user()->id }}">
                                                                <div class="form-body overflow-hide">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10" for="first_name">First Name <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                id="first_name"
                                                                                name="first_name"
                                                                                placeholder="willard"
                                                                                value="{{ old('first_name', $admin->first_name) }}">
                                                                            @error('first_name')
                                                                                <div class="error">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10" for="last_name">Last Name <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                id="last_name"
                                                                                name="last_name"
                                                                                placeholder="bryant"
                                                                                value="{{ old('last_name', $admin->last_name) }}">
                                                                            @error('last_name')
                                                                                <div class="error">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10" for="email">Email address <span class="text-danger">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                                            <input type="email"
                                                                                class="form-control"
                                                                                id="email"
                                                                                name="email"
                                                                                placeholder="xyz@gmail.com"
                                                                                value="{{ old('email', $admin->email) }}">
                                                                            @error('email')
                                                                                <div class="error">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10" for="password">Password</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                            <input type="password"
                                                                                 class="form-control"
                                                                                 id="password"
                                                                                 placeholder="Enter password"
                                                                                 name="password">
                                                                            @error('password')
                                                                                <div class="error">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions mt-10">
                                                                    <button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- /Row -->
@endsection
