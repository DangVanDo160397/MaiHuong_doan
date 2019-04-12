<!DOCTYPE html>
<html lang="en">
  <head>
    <title>wedsite</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="libs/opensan/stylesheet.css"/>
    <link rel="stylesheet" href="libs/fontawesome/fontawesome.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>
  <body>
    <div id="wrapper">
    <form class="form" action="{{route('post.dangKy')}}" method="POST" >
      <input type="hidden" value="{{csrf_token()}}" name="_token">
        <div class="form__content"><a class="close" href="index.html"><i class="fa fa-times-circle"></i></a>
          <h1 class="form__registration">Đăng ký</h1>
          <div class="form__item form__item-input">
            <div class="form__item-icon"><i class="fa fa-volume-control-phone"></i></div>
          <input type="text" name="so_dien_thoai" value="{{old('so_dien_thoai')}}" placeholder="phone number..."/>
          </div>
          <div class="form__item form__item-input">
            <div class="form__item-icon"><i class="fa fa-envelope"></i></div>
            <input type="text" name="email" value="{{old('email')}}" placeholder="mail..."/>
          </div>
          <div class="form__item form__item-input">
            <div class="form__item-icon"><i class="fa fa-user"></i></div>
            <input type="text" name="name" value="{{old('name')}}" placeholder="username..."/>
          </div>
          <div class="form__item form__item-input">
            <div class="form__item-icon"><i class="fa fa-user"></i></div>
            <input type="text" name="dia_chi" value="{{old('dia_chi')}}" placeholder="address..."/>
          </div>
          <div class="form__item form__item-input">
            <div class="form__item-icon"><i class="fa fa-lock"></i></div>
            <input type="password" name="password" value="{{old('password')}}" placeholder="password..."/>
          </div>
          <div class="form__item form__item-input">
            <div class="form__item-icon"><i class="fa fa-lock"></i></div>
            <input type="password" name="crfpassword"  placeholder="confirm password..."/>
          </div>
          @if(count($errors) > 0)
              @foreach($errors->all() as $err)
                <span style="color:red" class="help-block error">{{$err}}</span><br>
              @endforeach
          @endif
          <div class="form__item form__item-submit">
            <input class="btn btn-login" type="submit" value="Đăng ký"/>
          </div>
        </div>
      </form>
    </div>
    <script src="libs/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
  </body>
</html>