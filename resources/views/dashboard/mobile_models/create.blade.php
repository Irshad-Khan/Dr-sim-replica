@extends('layouts.admin')
@section('title','Mobile Model | Create')
@section('content')
<!-- Row -->
 <form action="{{ isset($mobileModel) ? route('mobile-models.update', ['mobile_model' => $mobileModel->id]) : route('mobile-models.store') }}"
      method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-3 col-xs-12">
            <div class="panel panel-default card-view  pa-0">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body  pa-0">
                        @include('dashboard.mobile_models._image')
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
                                <li class="active" role="presentation"><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#settings_8" aria-expanded="false"><span>Add Mobile Brand</span></a></li>
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
                                                                @include('dashboard.mobile_models._form')
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
    @include('shared.image_upload._upload', [
        'onChangeId' => 'mobile_brand_image',
        'formId' => 'brand_image_form',
        'errorPlacement' => 'brand_upload_error',
        'url' => "/admin/mobile-brands/upload"
    ])
@stop
