@extends('layouts.master')

@section('title', 'Tạo thiết lập')

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
                  <form role="form" method="POST" action="{{ route('thiet-lap.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputLoGo">Logo</label>
                        <input type="file" name="logo" class="form-control" id="exampleInputLoGo" placeholder="Logo">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputBanner">Banner</label>
                        <input type="file" name="banner" class="form-control" id="exampleInputBanner" placeholder="Banner">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputLinkLienKet">Link liên kết</label>
                        <input type="text" name="link_lien_Ket" class="form-control" id="exampleInputLinkLienKet" placeholder="Link liên kết">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputGioiThieu">Giới thiệu</label>
                        <input type="text" name="gioi_thieu" class="form-control" id="exampleInputGioiThieu" placeholder="Giới thiệu">
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