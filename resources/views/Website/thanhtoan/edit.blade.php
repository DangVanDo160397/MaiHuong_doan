@extends('layouts.master')

@section('title', 'Sửa thanh toán')

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
                  <form role="form" method="POST" action="{{ route('thanh-toan.update', ['id' => $thanhtoan->id]) }}">
                    {{ csrf_field() }} {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputLoaiThanhToan">Loại thanh toán</label>
                        <input type="text" name="loai_thanh_toan" value="{{$thanhtoan->loai_thanh_toan}}" class="form-control" id="exampleInputLoaiThanhToan" placeholder="Loại thanh toán">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTenHopDong">Tên hợp đồng</label>
                        <input type="text" name="ten_hop_dong" value="{{$thanhtoan->ten_hop_dong}}" class="form-control" id="exampleInputTenHopDong" placeholder="Tên hợp đồng">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputChiTietHopDong">Chi tiết hợp đồng</label>
                        <input type="text" name="chi_tiet_hop_dong" value="{{$thanhtoan->chi_tiet_hop_dong}}" class="form-control" id="exampleInputChiTietHopDong" placeholder="Chi tiết hợp đồng">
                      </div>
                      
                      
                    </div>
                    <!-- /.box-body -->
      
                    <div class="box-footer"> 
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.box -->
      
              </div>

        </div>
</section>

@endsection
