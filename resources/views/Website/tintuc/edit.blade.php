@extends('layouts.master')

@section('title', 'Sửa ')

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
                  <form role="form" method="POST" action="{{ route('tin-tuc.update', ['id' => $tintuc->id]) }}" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputTieuDeTinTuc">Tiêu đề tin tức</label>
                        <input type="text" name="tieu_de_tin_tuc" value="{{$tintuc->tieu_de_tin_tuc}}" class="form-control" id="exampleInputTieuDeTinTuc" placeholder="Tiêu đề tin tức">
                      </div>
                      <div class="form-group row">
                        <div class="col-md-6">
                          <label for="exampleInputHinhAnhTinTuc">Hình ảnh tin tức</label>
                          <input type="text" name="hinh_anh_tin_tuc" class="form-control" id="exampleInputHinhAnhTinTuc" placeholder="Hình ảnh tin tức">
                        </div>
                        <div class="col-md-6" style="text-align: center;">
                          <img style="width: 80%" src="{{asset($tintuc->hinh_anh_tin_tuc)}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNoiDungTinTuc">Nội dung tin tức</label>
                        <input type="text" name="noi_dung_tin_tuc" value="{{$tintuc->noi_dung_tin_tuc}}" class="form-control" id="exampleInputNoiDungTinTuc" placeholder="Nội dung tin tức">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputLoaiTinTuc">Loại tin tức</label>
                        <input type="text" name="loai_tin_tuc" value="{{$tintuc->loai_tin_tuc}}" class="form-control" id="exampleInputLoaiTinTuc" placeholder="Loại tin tức">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMaDiaDiem">Mã địa điểm</label>
                        <input type="text" name="ma_dia_diem" value="{{$tintuc->ma_dia_diem}}" class="form-control" id="exampleInputMaDiaDiem" placeholder="Mã địa điểm">
                      </div>
                      
                    </div>
                    <!-- /.box-body -->
      
                    <div class="box-footer"> 
                      <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                  </form>
                </div>
                <!-- /.box -->
      
              </div>

        </div>
</section>

@endsection