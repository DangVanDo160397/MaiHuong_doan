
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>web</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/opensan/stylesheet.css') }}"/>
    <link rel="stylesheet" href="{{ asset('libs/fontawesome/fontawesome.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
  </head>
  <body>
    <div id="wrapper">
      <div class="form-user">
        <div class="container">
          <h1>Tài khoản của tôi</h1>
          <div class="tablinks-list">
            <button class="tablinks active" type="button" onclick="tabLinks(event, 'tttk')">Thông tin tài khoản</button>
            <button class="tablinks" type="button" onclick="tabLinks(event, 'ttdh')">Thông tin đơn hàng</button>
          </div>
          <div class="tabcontent-list">
            <div class="tabcontent" id="tttk" style="display:block">
              <form class="form-edit-user" action="" >
                <h2>Thông tin tài khoản</h2>
                <div class="form-edit-user__item">
                  <label for="">Họ tên</label>
                  <input type="text" value="{{Auth::user()->name}}" />
                </div>
                <div class="form-edit-user__item">
                  <label for="">Số điện thoại</label>
                  <input type="text" value="{{Auth::user()->so_dien_thoai}}"/>
                </div>
                <div class="form-edit-user__item">
                  <label for="">Email</label>
                  <input type="text" value="{{Auth::user()->email}}" />
                </div>
                <h3>Đổi mật khẩu</h3>
                <div class="form-edit-user__item">
                  <label for="">Mật khẩu cũ</label>
                  <input type="text"/>
                </div>
                <div class="form-edit-user__item">
                  <label for="">Mật khẩu mới</label>
                  <input type="text"/>
                </div>
                <div class="form-edit-user__item">
                  <label for="">Nhập lại mật khẩu</label>
                  <input type="text"/>
                </div>
                <div class="form-edit-user__button">
                  <a class="btn btn-form-edit" href="index.html">Hủy</a>  
                </div>
              </form>
            </div>

            <div class="tabcontent" id="ttdh">
              <form class="form-edit-user" action="" style="width:1050px; margin-top: 10px; height:400px" >
                  @csrf
                <h2 style=" margin-top: -30px">Thông tin đơn hàng</h2>
                
                <div class="form-edit-user__item">
                 
                </div>
                 
                <table style=" border-color: #09ad7e;">
                  <tr class="text-center">
                
                    <th class="fix-w-120">Mã tour</th>
                    <th class="fix-w-120">Tên tour</th>
                    <th class="fix-w-150">Ngày khởi hành</th>
                    <th class="fix-w-120">Số điện thoại</th>
                    <th class="fix-w-150">Số người lớn</th>
                    <th class="fix-w-150">Số trẻ em</th>
                    <th class="fix-w-150">Giá tuor</th>
                  </tr>
                  @foreach($dattour as $dt)
                    <tr class="text-center">
                      <td>{{$dt->id}}</td>
                      <td>{{$dt->tours->ten_tour}}</td>
                      <td>{{date('d-m-Y',strtotime($dt->ngay_khoi_hanh))}}</td>
                      <td>{{$dt->users->so_dien_thoai}}</td>
                      <td>{{$dt->so_nguoi_lon}}</td>
                      <td>{{$dt->so_tre_em}}</td>
                      <td>{{$dt->gia_tien}}</td> 
                    </tr>
                  @endforeach
                </table>
                <div class="form-edit-user__button" style="margin-top: 100px;">
                  <a class="btn btn-form-edit" href="/">Trở về</a>
                </div>

              </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <script src="libs/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
  </body>
</html>