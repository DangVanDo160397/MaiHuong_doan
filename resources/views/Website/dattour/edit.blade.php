@extends('layouts.master')

@section('title', 'Sửa lịch đặt ')

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
                  <form role="form" method="POST" action="{{ route('dat-tour.update', ['id' => $dattour->id]) }}" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputNgayKhoiHanh">Ngày khỏi hành</label>
                        <input type="date" name="ngay_khoi_hanh" value="{{$dattour->ngay_khoi_hanh}}" class="form-control" id="exampleInputNgayKhoiHanh" placeholder="Ngày khỏi hành">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSoDienThoai">Số điện thoại</label>
                        <input type="text" name="so_dien_thoai_KH" value="{{$dattour->so_dien_thoai_KH}}" class="form-control" id="exampleInputSoDienThoai" placeholder="Số điện thoại">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmailKH">Email</label>
                        <input type="text" name="email_KH" value="{{$dattour->email_KH}}" class="form-control" id="exampleInputEmailKH" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSoNguoiLon">Số người lớn</label>
                        <input type="text" name="so_nguoi_lon" value="{{$dattour->so_nguoi_lon}}" class="form-control" id="exampleInputSoNguoiLon" placeholder="Số người lớn">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSoTreEm">Số trẻ em</label>
                        <input type="text" name="so_tre_em" value="{{$dattour->so_tre_em}}" class="form-control" id="exampleInputSoTreEm" placeholder="Số trẻ em">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMaTour">Mã tour</label>
                        <input type="text" name="ma_tour" value="{{$dattour->ma_tour}}" class="form-control" id="exampleInputMaTour" placeholder="Mã tour">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMaTaiKhoan">Mã tài khoản</label>
                        <input type="text" name="ma_tai_khoan" value="{{$dattour->ma_tai_khoan}}" class="form-control" id="exampleInputMaTaiKhoan" placeholder="Mã tài khoản">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMaThanhToan">Mã thanh toán</label>
                        <input type="text" name="ma_thanh_toan" value="{{$dattour->ma_thanh_toan}}" class="form-control" id="exampleInputMaThanhToan" placeholder="Mã thanh toán">
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