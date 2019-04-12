
              <div class="wrapper-tours">
                <div class="wrapper-tours-detail text-center">
                  <h1>Tour nổi bật</h1>
                  <p>Những tour được nhiều người yêu thích nhất</p>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="list-tours">

                      @foreach ($tours as $tour)

                      <div class="tour__item">
                          <div class="item-tour item-tour-wrap">
                            <div class="item-tour__img">
                              <a href="{{ route('detail_tour', $tour->id) }}">
                                 <img src="{{$tour->hinh_anh}}" alt="img-item"/>
                              </a>
                            </div>
                            <div class="item-tour__infomation">
                              <h3 class="text-center"><a href="{{ route('detail_tour', ['id'=> $tour->id]) }}">{{$tour->ten_tour}}</a></h3>
                              <p class="item-tour-date">Số ngày:<span>{{$tour->so_ngay}} ngày</span></p>
                              <p class="item-tour-price">Giá:<span>{{$tour->gia_nguoi_lon}} VND</span></p>
                              <form action="{{ route('detail_tour', ['id' => $tour->id]) }}" method="get">
                                <input class="btn btnDatTour btn-tour"  type="submit" value="Xem chi tiết"/>
                              </form>
                            </div>
                          </div>
                          <!--.item-tour-wrap-->
                      </div>

                      @endforeach

                      <div class="wrapper-tours-slide">
                          <div class="wrapper-tours-detail text-center">
                            <h1>Nơi đến</h1>
                            <p>Tìm tour bằng quốc gia</p>
                          </div>
                          <div class="container">
                            <div class="row">
                              <div class="owl-carousel owl-theme wrapper-tours-slide__content">
                                @foreach ($tours as $tour)
                                <div class="item">
                                  <div class="slide__item"><a href="">
                                      <div class="slide__img"><img src="{{$tour->hinh_anh}} " alt="anh"/></div>
                                  <h3></h3></a>
                                  </div>
                                </div>
                                @endforeach             
                              </div>
                            </div>
                          </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="share">
                  <div class="wrapper-tours-detail text-center">
                    <h1>Những lời tốt đẹp từ khách hàng</h1>
                    <p>Đọc đánh giá và ý kiến ​​từ cộng đồng du lịch toàn cầu của chúng tôi!</p>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col col-6">
                        <div class="share__img"><img src="images/item2.jpg" alt="user"/></div>
                        <h3>Nguyễn Tuấn
                          <p class="job">Khách hàng</p>
                        </h3>
                        <p>Nhờ có Du lịch bốn phương mà tôi và gia đình đã có thể tìm kiếm được tour du lịch phù hợp, như mong muốn một cách nhanh chóng và thuận tiện</p>
                      </div>
                      <div class="col col-6">
                        <div class="share__img"><img src="images/1.png" alt="user"/></div>
                        <h3>Mai Hương
                          <p class="job">Khách hàng</p>
                        </h3>
                        <p>Trước đây khi đi du lịch tôi thường tìm đến tận trụ sở của các công ty du lịch để tìm kiếm và nghe tư vấn chọn tour. Nhưng từ tôi biết đến website của Du lịch bốn phương thì tôi không cần phải tốn nhiều thời gian cũng như chi phí đi lại </p>
                      </div>
                      <div class="cleafix"></div>
                    </div>
                  </div>
                </div>
              
      <!-- popup-tour -->
     

              