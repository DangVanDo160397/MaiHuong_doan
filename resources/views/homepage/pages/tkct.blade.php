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
              <form class="form-edit-user" action="">
                <h2>Thông tin tài khoản</h2>
                <div class="form-edit-user__item">
                  <label for="">Họ tên</label>
                  <input type="text"/>
                </div>
                <div class="form-edit-user__item">
                  <label for="">Số điện thoại</label>
                  <input type="text"/>
                </div>
                <div class="form-edit-user__item">
                  <label for="">Email</label>
                  <input type="text"/>
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
                <div class="form-edit-user__button"><a class="btn btn-form-edit" href="index.html">Hủy</a>
                  <input class="btn btn-form-edit" type="submit" value="Lưu"/>
                </div>
              </form>
            </div>
            <div class="tabcontent" id="ttdh">
              <h1>nmmmm</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
  </body>
</html>