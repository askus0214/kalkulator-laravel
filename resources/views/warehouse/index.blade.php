@extends('welcome')
@section('content')
<div class="row">
        <div class="button-list">
        <a href="{{ route('warehouses.create') }}" class="btn btn-success waves-effect waves-light"><span class="btn-label"><i class="fa fa-plus"></i></span>Add</a>
        </div>
                <div class="col-12">
                    <div class="card-box">
                        <table class="table table-hover">
                            <caption>List of product type</caption>
                            <thead class="thead-light">
                                <tr class="">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Picture</th>
                                    <th>Address</th>
                                    <!-- <th>Location</th> -->
                                    <th>Phone</th>
                                    <th>Faximile</th>
                                    <th>Email</th>
                                    <th><span class="pull-right">Action</span></th>
                                </tr>
                            </thead>
                            @if(!empty($warehouses))
                            <tbody>
                                @foreach($warehouses as $warehouse)
                                <tr id="{{ $warehouse->ID }}">
                                    <th class="align-middle" scope="row">{{$loop->iteration}}</th>
                                    <td class="align-middle">{{$warehouse->Name}}</td>
                                    <td>
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/' . $warehouse->FilePic) }}" alt=""  height="30" width="50">
                                        </div>
                                    </td>                               
                                    <td class="align-middle">{{$warehouse->Address}}</td>
                                    <!-- <td class="align-middle">{{$warehouse->Location}}</td> -->
                                    <td class="align-middle">{{$warehouse->Phone}}</td>
                                    <td class="align-middle">{{$warehouse->Fax}}</td>
                                    <td class="align-middle">{{$warehouse->Email}}</td>
                                    <td class="align-middle">
                                    <a class="btn btn-sm btn-primary waves-effect waves-light" href="{{ route('warehouses.edit', $warehouse->ID) }}">edit</a> 
                                    
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                            @endif
                        

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
@endsection