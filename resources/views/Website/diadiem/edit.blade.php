@extends('layouts.master')

@section('title', 'Sửa địa điểm')

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
                  <form role="form" method="POST" action="{{ route('dia-diem.update', ['id' => $diadiem->id]) }}">
                    {{ csrf_field() }} {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên địa điểm</label>
                        <input type="text" name="ten_dia_diem" value="{{$diadiem->ten_dia_diem}}" class="form-control" id="exampleInputEmail1" placeholder="Tên địa điểm">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTinhThanh">Tỉnh thành</label>
                        <input type="text" name="tinh_thanh" value="{{$diadiem->tinh_thanh}}" class="form-control" id="exampleInputTinhThanh" placeholder="Tỉnh thành">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputQuocGia">Quốc gia</label>
                        <input type="text" name="quoc_gia" value="{{$diadiem->quoc_gia}}" class="form-control" id="exampleInputQuocGia" placeholder="Quốc gia">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Chi tiết địa điểm</label>
                        <input type="text" name="chi_tiet_dia_diem" value="{{$diadiem->chi_tiet_dia_diem}}" class="form-control" id="exampleInputPassword1" placeholder="Chi tiết địa điểm">
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