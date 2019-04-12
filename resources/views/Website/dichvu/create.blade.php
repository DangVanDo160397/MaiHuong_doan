@extends('layouts.master')

@section('title', 'Tạo dịch vụ')

@section('content')
    

<section class="content">
        <div class="row">

            
        <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form" method="POST" action="{{ route('dich-vu.store') }}">
                    {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputTenDichVu">Tên dịch vụ</label>
                        <input type="text" name="ten_dich_vu" class="form-control" id="exampleInputTenDichVu" placeholder="Tên dịch vụ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputGiaDichVu">Giá dịch vụ</label>
                        <input type="text" name="gia_dich_vu" class="form-control" id="exampleInputGiaDichVu" placeholder="Giá dịch vụ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputChiTietDichVu">Chi tiết dịch vụ</label>
                        <input type="text" name="chi_tiet_dich_vu" class="form-control" id="exampleInputChiTietDichVu" placeholder="Chi tiết dịch vụ">
                      </div>
                    </div>
                    <!-- /.box-body -->
      
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Tạo dịch vụ</button>
                    </div>
                  </form>
                </div>
                <!-- /.box -->
      
              </div>

        </div>
</section>

@endsection