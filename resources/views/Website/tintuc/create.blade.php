@extends('layouts.master')

@section('title', 'Tạo tin tuc')

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
                  <form role="form" method="POST" action="{{ route('tin-tuc.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputTieuDeTinTuc">Tiêu đề tin tức</label>
                        <input type="text" name="tieu_de_tin_tuc" class="form-control" id="exampleInputTieuDeTinTuc" placeholder="Tiêu đề tin tức">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputHinhAnhTinTuc">Hình ảnh tin tức</label>
                        <input type="file" name="hinh_anh_tin_tuc" class="form-control" id="exampleInputHinhAnhTinTuc" placeholder="Hình ảnh tin tức">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNoiDungTinTuc">Nội dung tin tức</label>
                        <input type="text" name="noi_dung_tin_tuc" class="form-control" id="exampleInputNoiDungTinTuc" placeholder="Nội dung tin tức">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputLoaiTinTuc">Loại tin tức</label>
                        <input type="text" name="loai_tin_tuc" class="form-control" id="exampleInputLoaiTinTuc" placeholder="Loại tin tức">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMaDiaDiem">Mã địa điểm</label>
                        <input type="text" name="ma_dia_diem" class="form-control" id="exampleInputMaDiaDiem" placeholder="Mã địa điểm">
                      </div>
                      
                    </div>
                    <!-- /.box-body -->
      
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Tạo mới</button>
                    </div>
                  </form>
                </div>
                <!-- /.box -->
      
              </div>

        </div>
</section>

@endsection