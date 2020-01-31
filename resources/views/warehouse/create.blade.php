@extends('welcome')
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- isi halaman -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-12">
                                
                                <div class="col-12">
                                    <form action="{{ route('warehouses.store') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}

                                        <div class="form-group">
                                            <label for="" >Name<span class="text-danger">*</span></label>
                                            <input type="text" name="Name"  class="form-control" value="{{old('Name')}}" onkeypress="return hanyaHuruf(event);" placeholder="Masukan nama, contoh: PT. Asep Kusnadi">
                                            @if ($errors->has('Name'))
                                                <span class="badge badge-danger">{{ $errors->first('Name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="" >Type Warehouse <span class="text-danger">*</span></label>
                                                <select class="form-control" name="IDWarehouseType" value="{{old('IDWarehouseType')}}">
                                                <option selected disabled>Pilih Warehouse</option>
                                                    @foreach ($warehouse_type as $k=> $type) : ?>
                                                    <option value="{{$type->ID}}">{{$type->Name}}</option>
                                                @endforeach;
                                                </select>
                                                @if ($errors->has('Name'))
                                                    <span class="badge badge-danger">{{ $errors->first('IDWarehouseType') }}</span>
                                                @endif
                                        </div>
                                     
                                        <div class="form-group">
                                            <label for="" class="">Email Warehouse<span class="text-danger">*</span></label>
                                            <input type="text" name="Email" id="" class="form-control" value="{{old('Email')}}" placeholder="contoh: Asep@gmail.com">
                                            @if ($errors->has('Name'))
                                                <span class="badge badge-danger">{{ $errors->first('Email') }}</span>
                                            @endif
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="">Address <span class="text-danger">*</span></label>
                                            <textarea name="Address" class="form-control" value="{{old('Address')}}" placeholder="contoh: Jl. Dago utara keluarahan Dago Utara Kota Bandung"></textarea>
                                            @if ($errors->has('Name'))
                                                <span class="badge badge-danger">{{ $errors->first('Address') }}</span>
                                            @endif</div>
                                        <div class="form-group">
                                            <label for="" >Phone <span class="text-danger">*</span></label>
                                            <input type="text" name="Phone"  class="form-control" value="{{old('Phone')}}" placeholder="contoh: 08123456789">
                                            @if ($errors->has('Name'))
                                                <span class="badge badge-danger">{{ $errors->first('Phone') }}</span>
                                            @endif</div>
                                        <div class="form-group">
                                            <input type="submit" value="Simpan" class="btn btn-success">
                                        </div>
                                    </form>

                                </div>
                                
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
        <!-- isi halaman -->
    </div>
</div>
@endsection
