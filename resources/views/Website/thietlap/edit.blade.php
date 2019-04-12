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
                  <form role="form" method="POST" action="{{ route('thiet-lap.update', ['id' => $thietlap->id]) }}" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group row">
                        <div class="col-md-6">
                          <label for="exampleInputLoGo">Logo</label>
                          <input type="file" name="logo" class="form-control" id="exampleInputLoGo" placeholder="Logo">
                        </div>
                        <div class="col-md-6" style="text-align: center;">
                          <img style="width: 80%" src="{{asset($thietlap->logo)}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6">
                          <label for="exampleInputBanner">Banner</label>
                          <input type="file" name="banner" value="{{$thietlap->banner}}" class="form-control" id="exampleInputBanner" placeholder="Banner">
                        </div>
                        <div class="col-md-6" style="text-align: center;">
                          <img style="width: 80%" src="{{asset($thietlap->banner)}}">
                        </div>
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputLinkLienKe">Link liên kết</label>
                        <input type="text" name="link_lien_Ket" value="{{$thietlap->link_lien_Ket}}" class="form-control" id="exampleInputLinkLienKe" placeholder="Link liên kết">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputGioiThieu">Giới thiệu</label>
                        <input type="text" name="gioi_thieu" value="{{$thietlap->gioi_thieu}}" class="form-control" id="exampleInputGioiThieu" placeholder="Giới thiệu">
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