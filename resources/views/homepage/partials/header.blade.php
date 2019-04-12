
      <header class="header" id="header">
            <div class="header__container">
              <div class="logo"><a href="">Du lịch bốn phương</a></div>
              <nav class="nav">
                <ul class="tree">
                  <li class="tree__bough active"><a href="{{ route('homepage') }}"><i class="fa fa-home"></i>Trang chủ</a></li>
                 <!-- <li class="tree__bough"><a href="">Tour nổi bật</a></li>  -->
                  <li class="tree__bough"><a href="{{ route('camLangDuLich') }}">Cầm nang du lịch</a></li>
                  <li class="tree__bough"><a href="{{ route('homepage') }}">Khuyến mại</a></li>
                  <li class="tree__bough"><a href="{{ route('gioiThieu') }}">Giới thiệu</a></li>
                  <li class="tree__bough"><a href="{{ route('lienHe') }}">Liên hệ</a></li>
                  <li class="tree__bough">
                    <ul class="user">
                      @if (Auth::check())
                      <li><a href="{{ route('web.logout') }}"><i class="fa fa-times-circle"></i>Đăng xuất</a></li>
                      @else
                      <li><a href="{{ route('getLogin') }}"><i class="fa fa-user-circle"></i>Đăng nhập</a></li>
                      @endif
                    </ul>
                  </li>
                  <li class="disable tree__bough"><a href="">Han</a></li>
                  
                  @if (Auth::check())
                <li class="tree__bough"><a href="{{route('taiKhoan', Auth::user()->id) }}">Tài khoản</a></li>

                  @endif
                 
                 <!-- <li class="tree__bough"><a href="{{route('taiKhoan') }}">Tài khoản</a></li> -->

                  <li class="tree__bough tree__bough-end"><a href="{{ route('troGiup') }}"><i class="fa fa-question-circle"></i>Trợ giúp</a></li>
                </ul>
              </nav>
            </div>
          </header>