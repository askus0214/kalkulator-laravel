@extends('welcome')
@section('content')

<div class="card-box table-responsive">
    
    <div class="col-12">
            <form action="{{ route('warehouses.update', ['ID' => $warehouse->ID]) }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}                                      
                {{ method_field('PATCH') }}

                <div class="form-group row">
                    <label for="">{{__('warehouse.input_name')}}</label>
                    <input type="text" name="Name" id="" class="form-control" value="{{$warehouse->Name}}">
                </div>

                <div class="form-group row">
                    <label for="" class="">Email</label>
                    <input type="text" name="Email" id="" class="form-control" value="{{$warehouse->Email}}">
                </div>

                
                <div class="form-group row">
                    <label for="" class="">Address</label>
                    <textarea class="form-control" name="Address" value="" placeholder="" rows="3">{{$warehouse->Address}}</textarea>
                </div>

                <div class="form-group row">
                    <label for="" class="">Phone</label>
                    <input type="text" name="Phone" class="form-control" value="{{$warehouse->Phone}}">
                </div>


                <div class="form-group">
                    <input type="submit" value="send" class="btn btn-primary">
                </div>
            </form>
    </div>
</div>
@endsection