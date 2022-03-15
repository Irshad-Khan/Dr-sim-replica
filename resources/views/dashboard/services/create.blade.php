@extends('layouts.admin')
@section('title','Service | Create')
@section('content')
<!-- Row -->
 <form action="{{ route('services.store') }}"
      method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="panel panel-default card-view pa-0">
                <div class="panel-wrapper collapse in">
                    <div  class="panel-body pb-0">
                        <div  class="tab-struct custom-tab-1">
                            <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                                <li class="active" role="presentation"><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#settings_8" aria-expanded="false"><span>Add Service</span></a></li>
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
                                                                @include('dashboard.services._form')
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
 </form>
<!-- /Row -->
@endsection
@section('script')
    @include('dashboard.services._script')
@stop