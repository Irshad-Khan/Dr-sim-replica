@extends('layouts.admin')
@section('title','Services')
@section('content')
<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Services</h6>
                </div>
                <div class="pull-right">
                    <a href="{{ route('services.create') }}" class="btn btn-primary">Add New</a>
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
                                        <th>Title</th>
                                        <th>Mobile Brand</th>
                                        <th>Price By Brand</th>
                                        <th>Mobile Model</th>
                                        <th>Price By Model</th>
                                        <th>Average Time</th>
                                        <th>Delivery Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Mobile Brand</th>
                                        <th>Price By Brand</th>
                                        <th>Mobile Model</th>
                                        <th>Price By Model</th>
                                        <th>Average Time</th>
                                        <th>Delivery Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>{{ optional($service->brand)->title ?? "N/A" }}</td>
                                            <td>{{ number_format($service->price_by_brand,2)  }}</td>
                                            <td>{{ optional($service->model)->name ?? "N/A" }}</td>
                                            <td>{{ number_format($service->price_by_model,2) }}</td>
                                            <td>{{ $service->average_time }}</td>
                                            <td>{{ $service->delivery_time }}</td>
                                            <td>
                                                @if($service->status == App\Models\Service::ACTIVE)
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
                                                            <a href="{{ route('services.edit', ['service' => $service->id]) }}" role="menuitem">
                                                                <i class="icon wb-reply" aria-hidden="false"></i>Edit
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="{{ route('services.change.status', ['status' => $service->status, 'id' => $service->id]) }}" onclick="return confirm('Are you sure?')" role="menuitem">
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
