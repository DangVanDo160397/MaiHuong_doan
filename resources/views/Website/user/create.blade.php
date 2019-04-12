@extends('layouts.master')

@section('title', 'Tài khoản')

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
                  <form role="form" method="POST" action="{{ route('user-s.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputName">Họ tên</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Họ tên">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSoDienThoai">Số điện thoại</label>
                        <input type="text" name="so_dien_thoai" class="form-control" id="exampleInputSoDienThoai" placeholder="Số điện thoại">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputDiaChi">Địa chỉ</label>
                        <input type="text" name="dia_chi" class="form-control" id="exampleInputDiaChi" placeholder="Địa chỉ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword">Mật khẩu</label>
                        <input type="text" name="password" class="form-control" id="exampleInputPassword" placeholder="Mật khẩu">
                      </div>     
                    </div>
                    <!-- /.box-body -->
      
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Tạo user</button>
                    </div>
                  </form>
                </div>
                <!-- /.box -->
      
              </div>

        </div>
</section>

@endsection