@extends('layouts.admin')
@section('title','Mobile Brands')
@section('content')
<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Mobile Brands</h6>
                </div>
                <div class="pull-right">
                    <a href="{{ route('mobile-brands.create') }}" class="btn btn-primary">Add New</a>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    @if(session()->has('success'))
                        @include('shared.alert.success', ['message' => session()->get('success')])
                    @endif
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover display  pb-30" >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($mobileBrands as $mobileBrand)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img width="64" src="{{ $mobileBrand->image ? asset('images/'.$mobileBrand->image) : asset('images/default.jpg') }}" alt="bran image"></td>
                                            <td>{{ $mobileBrand->title }}</td>
                                            <td>
                                                @if($mobileBrand->status == App\Models\MobileBrand::ACTIVE)
                                                    <span class="label label-success capitalize-font inline-block ml-10">
                                                        Active
                                                    </span>
                                                @else
                                                    <span class="label label-danger capitalize-font inline-block ml-10">
                                                        Inactive
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="pull-left inline-block dropdown">
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="fa fa-ellipsis-h"></i></a>
                                                    <ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
                                                        <li role="presentation">
                                                            <a href="{{ route('mobile-brands.edit' ,['mobile_brand' => $mobileBrand->id]) }}" role="menuitem">
                                                                <i class="icon wb-reply" aria-hidden="false"></i>Edit
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="{{ route('mobile-brands.change.status', ['status' => $mobileBrand->status, 'id' => $mobileBrand->id]) }}" onclick="return confirm('Are you sure?')" role="menuitem">
                                                                <i class="icon wb-share" aria-hidden="true"></i>Change Status
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->
@endsection
