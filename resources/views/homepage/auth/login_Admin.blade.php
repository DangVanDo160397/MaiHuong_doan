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
      <form class="form" action="{{ route('postDangnhapAdmin') }}" method="POST">
        @csrf
        <div class="form__content"><a class="close" href="index.html"><i class="fa fa-times-circle"></i></a>
          <h1>Đăng nhập</h1>
          <div class="form__img text-center"><i class="fa fa-user-circle-o"></i></div>

          <div class="form__item form__item-input">
            <div class="form__item-icon"><i class="fa fa-user"></i></div>
            <input type="text" placeholder="Phone" name="so_dien_thoai"/>
            @if($errors->has('so_dien_thoai'))
            <span class="help-block error">{{ $errors->first('so_dien_thoai') }}</span>
            @endif
          </div>

          <div class="form__item form__item-input">
            <div class="form__item-icon"><i class="fa fa-lock"></i></div>
            <input type="password" placeholder="password" name="password"/>
          </div>
          @if($errors->has('password'))
          <span class="help-block error">{{ $errors->first('password') }}</span>
          @endif

         <!-- 
          <div class="form__item-link">
            <div class="fright"><a href="">Quên mật khẩu ?</a></div>
            <div class="clearfix"></div>
          </div>
        -->
          <div class="form__item form__item-submit">
            <button class="btn btn-login" type="submit">Đăng nhập</button>
          </div>
          <div class="form__item form__item-submit"><a class="btn btn-login" href="{{ route('dangKy') }}">Đăng ký</a></div>
        </div>
      </form>
    </div>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
  </body>
</html>