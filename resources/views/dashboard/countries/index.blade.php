@extends('layouts.admin')
@section('title','Countries')
@section('content')
<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Countries</h6>
                </div>
                {{--  <div class="pull-right">
                    <a href="{{ route('countries.create') }}" class="btn btn-primary">Add New</a>
                </div>  --}}

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
                                        <th>emoji</th>
                                        <th>Name</th>
                                        <th>Capital</th>
                                        <th>Currency</th>
                                        <th>Region</th>
                                        <th>Phone Code</th>
                                        <th>Lat</th>
                                        <th>Long</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>emoji</th>
                                        <th>Name</th>
                                        <th>Capital</th>
                                        <th>Currency</th>
                                        <th>Region</th>
                                        <th>Phone Code</th>
                                        <th>Lat</th>
                                        <th>Long</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($countries as $country)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $country->emoji }}</td>
                                            <td>{{ $country->name }}</td>
                                            <td>{{ $country->capital }}</td>
                                            <td>{{ $country->currency_name }}
                                                <span style="font-weight: bolder;">({{ $country->currency }} {{ $country->currency_symbol }})</span>
                                            </td>
                                            <td>{{ $country->region }}</td>
                                            <td>{{ $country->phone_code }}</td>
                                            <td>{{ number_format($country->latitude, 2)}}</td>
                                            <td>{{ number_format($country->longitude, 2) }}</td>
                                            <td>
                                                @if($country->status == App\Models\Country::ACTIVE)
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
                                                        {{--  <li role="presentation">
                                                            <a href="{{ route('countries.edit' ,['country' => $country->id]) }}" role="menuitem">
                                                                <i class="icon wb-reply" aria-hidden="false"></i>Edit
                                                            </a>
                                                        </li>  --}}
                                                        <li role="presentation">
                                                            <a href="{{ route('countries.change.status', ['status' => $country->status, 'id' => $country->id]) }}" onclick="return confirm('Are you sure?')" role="menuitem">
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
