@extends('layouts.master')

@section('title', 'Sửa khuyến mại')

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
                  <form role="form" method="POST" action="{{ route('khuyen-mai.update', ['id' => $khuyenmai->id]) }}">
                    {{ csrf_field() }} {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputGiaKhuyenMai">Giá khuyến mại</label>
                        <input type="text" name="gia_KM" value="{{$khuyenmai->gia_KM}}" class="form-control" id="exampleInputGiaKhuyenMai" placeholder="Giá khuyến mại">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputChiTietKhuyenMai">Chi tiết khuyến mại</label>
                        <input type="text" name="chi_tiet_KM" value="{{$khuyenmai->chi_tiet_KM}}" class="form-control" id="exampleInputChiTietKhuyenMai" placeholder="Chi tiết khuyến mại">
                      </div>
                      
                    </div>
                    <!-- /.box-body -->
      
                    <div class="box-footer"> 
                      <button type="submit" class="btn btn-primary">Sửa khuyến mại</button>
                    </div>
                  </form>
                </div>
                <!-- /.box -->
      
              </div>

        </div>
</section>

@endsection