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
                  <form role="form" method="POST" action="{{ route('tour-tour.update', ['id' => $tour->id]) }}" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputTenTour">Tên tour</label>
                        <input type="text" name="ten_tour" value="{{$tour->ten_tour}}" class="form-control" id="exampleInputTenTour" placeholder="Tên tour">
                      </div>
                      <div class="form-group row">
                        <div class="col-md-6">
                          <label for="exampleInputHinhAnhTour">Hình ảnh tour</label>
                          <input type="text" name="hinh_anh" class="form-control" id="exampleInputHinhAnhTour" placeholder="Hình ảnh tour">
                        </div>
                        <div class="col-md-6" style="text-align: center;">
                          <img style="width: 80%" src="{{asset($tour->hinh_anh)}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSoNgay">Số ngày</label>
                        <input type="text" name="so_ngay" value="{{$tour->so_ngay}}" class="form-control" id="exampleInputSoNgay" placeholder="Số ngày">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputDiaDiem">Mã địa điểm</label>
                        <input type="text" name="ma_dia_diem" value="{{$tour->ma_dia_diem}}" class="form-control" id="exampleInputĐiaiem" placeholder="Địa điểm">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSoCho">Số chỗ</label>
                        <input type="text" name="so_cho" value="{{$tour->so_cho}}" class="form-control" id="exampleInputSoCho" placeholder="Số chỗ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputGiaNguoiLon">Giá người lớn</label>
                        <input type="text" name="gia_nguoi_lon" value="{{$tour->gia_nguoi_lon}}" class="form-control" id="exampleInputGiaNguoiLon" placeholder="Số người lớn">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputGiaTreEm">Giá trẻ em</label>
                        <input type="text" name="gia_tre_em" value="{{$tour->gia_tre_em}}" class="form-control" id="exampleInputGiaTreEm" placeholder="Giá trẻ em">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputChiTietTour">Chi tiết tour</label>
                        <input type="text" name="chi_tiet_tour" value="{{$tour->chi_tiet_tour}}" class="form-control" id="exampleInputChiTietTour" placeholder="Chi tiết tour">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMaDichVu">Mã dịch vụ</label>
                        <input type="text" name="ma_dich_vu" value="{{$tour->ma_dich_vu}}" class="form-control" id="exampleInputMaDichVu" placeholder="Mã dịch vụ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMaKhuyenMai">Mã khuyến mại</label>
                        <input type="text" name="ma_khuyen_mai" value="{{$tour->ma_khuyen_mai}}" class="form-control" id="exampleInputMaKhuyenMai" placeholder="Mã khuyến mại">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputLoaiTour">Loại tour</label>
                        <input type="text" name="loai_tour" value="{{$tour->loai_tour}}" class="form-control" id="exampleInputLoaiTour" placeholder="Loại tour">
                      </div>

   
                    </div>
                    <!-- /.box-body -->
      
                    <div class="box-footer"> 
                      <button type="submit" class="btn btn-primary"> Cập nhật</button>
                    </div>
                  </form>
                </div>
                <!-- /.box -->
      
              </div>

        </div>
</section>

@endsection