<div class="banner">
        <form class="search" action="" method="GET">
          <div class="container">
            <div class="search__content">
              <div class="col col-6 search__item">
                <label for="">Tên địa điểm muốn đến</label>
              <input type="text" name="tenDiaDiem" value="{{request('tenDiaDiem')}}" /><i class="fa fa-search"></i>
              </div>
              <div class="col col-3 search__item">
                <label for="">Địa điểm</label>
                <input type="text"/><i class="fa fa-map-marker"></i>
              </div>
              <div class="col col-3 search__item__button">
                <input class="btn btn-green" type="submit" value="Tìm kiếm"/>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </form>
        <video autoplay="autoplay" loop="loop" src="{{ asset('images/video1.mp4') }}"></video>
      </div>