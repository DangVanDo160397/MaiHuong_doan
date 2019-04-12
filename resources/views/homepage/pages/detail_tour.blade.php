@extends('homepage.layouts.master')

@section('title', $tour->ten_tour)

@section('content')


<div class="container">
        <div class="row" style=" margin: 20px 0; ">
          <div class="col col-4">

            <div class="owl-carousel owl-theme slide-tour-detail">
              <div class="item">
                <div class="slide-tour-detail__img"><img src="{{ asset(''.$tour->hinh_anh) }}" alt="anh"/></div>
                <br>
                <br>
                <br>
                <br>
               <p> <input class="btn btnDatTour btn-tour btn__show-popup"  type="button" value="Đặt tour"/></p>
              </div>
<!--
              <div class="item">
                <div class="slide-tour-detail__img"><img src="{{ asset('images/slide1.jpg') }}" alt="anh"/></div>
              </div>
              <div class="item">
                <div class="slide-tour-detail__img"><img src="{{ asset('images/slide2.jpg') }}" alt="anh"/></div>
              </div>
              <div class="item">
                <div class="slide-tour-detail__img"><img src="{{ asset('images/slide3.jpg') }}" alt="anh"/></div>
              </div>
 -->

            </div>
            
            

          </div>
          <div class="col col-8">
            <h2>{{$tour->ten_tour}}</h2>
            <p>Số ngày: <span>{{$tour->so_ngay}} day</span></p>
            
            <p>Điểm đến: <span>{{$tour->dia_diem->ten_dia_diem}}</span></p>
            <p>Quốc gia: <span>{{$tour->dia_diem->quoc_gia}}</span></p>
            <p>Thông tin tour: <span>{{$tour->chi_tiet_tour}}</span></p>
            <div class="section-detail-tour__item">
              <h3>Lộ trình tour</h3>
              <p> <i class="fa fa-dot-circle-o"></i> - Ngày 1:</p>
              <ul>
                <li>Đón khách tại địa điểm đã hẹn</li>
                <li>Đưa khách hàng đến địa điểm du lịch</li>
                <li>Ăn uống, nghỉ ngơi</li>
              </ul>
              <p><i class="fa fa-dot-circle-o"></i> - Ngày 2:</p>
              <ul>
                <li>Tham gia các hoạt động</li>
                <li>Tham quan các địa điểm</li>
                <li>Ăn uống, nghỉ ngơi</li>
                <li>Xe đưa quý khách về</li>
              </ul>
            </div>
            <div class="section-detail-tour__item">
              <h3>Dịch vụ</h3>
              <ul>
                <li>{{$tour->dich_vu->ten_dich_vu}}</li>
              </ul>
            </div>
            <div class="section-detail-tour__item">
              <h3>Điều kiện hoàn hủy</h3>
              <ul>
                <li>Hủy lịch đặt trước 24h đặt lịch</li>
                <li>Hủy lịch do các yếu tố ngoại cảnh vì thời tiết,...</li>
              </ul>
            </div>
            <div class="section-detail-tour__item">
              <h3>Lưu ý</h3>
              <ul>
                <li>Cất giữ hành lý cẩn thận</li>
                <li>Không được tự ý rời khỏi đoàn</li>
                <li>Thực hiện đúng quy định đã được đề ra</li>
              </ul>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>


      
      <div class="popup-tour-wrap popup-tour disable">
          <div class="popup-tour__content">
            <div class="popup-tour__content-left">
              <ul id="tablink">
                <li class="activedefaul" onclick="tabLinks(event, 'nkh')">Ngày khởi hành<i class="fa fa-calendar"></i>
                  <p class="date-start-tour disable">23/02/2019</p>
                </li>
                <li onclick="tabLinks(event, 'slk')">Số lượng khách<i class="fa fa-users"></i>
                  <p class="amount-big disable">Người lớn:<span>1</span></p>
                  <p class="amount-small disable">Trẻ em:<span>2</span></p>
                </li>
              </ul>
            </div>
            <div class="popup-tour__content-right">
              <div class="popup-tour-tabcontent">
                <div class="popup-tour-date" id="nkh" style="display:block">
                  <form action="">
                    <div class="form-line">
                      <div id="shippingDay"></div>
                    </div>
                  </form>
                </div>
                <div class="popup-tour-user" id="slk" style="display:none">
                  <form action="">
                    <div class="popup-tour-table">
                      <table>
                        <tr class="text-center">
                          <th></th>
                          <th class="fix-w-120">Giá</th>
                          <th class="fix-w-120">Số lượng</th>
                          <th class="fix-w-150">Tổng</th>
                        </tr>
                        <tr>
                          <td class="text-bold">Người lớn<span>Trên 12 tuổi</span></td>
                          <td class="text-right price"> <span class="fs-14">{{$tour->gia_nguoi_lon}} </span>đ</td>
                          <td>
                            <div class="unit"><span class="minus btn btn-defaul">-</span><span class="amount">0</span><span class="plus btn"> +</span></div>
                          </td>
                          <td class="text-right total total-adult"><span class="fs-14">0</span>đ</td>
                        </tr>
                        <tr>
                          <td class="text-bold">Trẻ em<span>Từ 2-12 tuổi</span></td>
                          <td class="text-right price"> <span class="fs-14">{{$tour->gia_tre_em}}</span>đ</td>
                          <td>
                            <div class="unit"><span class="minus btn btn-defaul">-</span><span class="amount">0</span><span class="plus btn"> +</span></div>
                          </td>
                          <td class="text-right total total-young"><span class="fs-14">0</span>đ</td>
                        </tr>
                      </table>
                    </div>

                  </form>
                  <div class="popup-tour-notes">
                    <h3>Lưu ý khi đặt tour</h3>
                    <ul>
                      <li>Số lượng hành khách tối đa sẽ phụ thuộc vào tour</li>
                      <li>Số trẻ em không vượt quá số người lớn</li>
                    </ul>
                    <ul>
                      <li>Giá trên đã bao gồm thuế. Trang web không thu phí dịch vụ</li>
                      <li>Giá trẻ em áp dụng khi ngủ chung giường với bố mẹ. Trong trường hợp trẻ em ngủ riêng sẽ được tính bằng giá người lớn.</li>
                      <li>Giá trên áp dụng cho phòng tiêu chuẩn từ 2-3 khách/phòng. Trong trường hợp quý khách yêu cầu ở phòng đơn, xin vui lòng trả thêm phụ phí phòng đơn</li>
                      <li>Mọi thắc mắc, xin vui lòng liên hệ <span>0334.816.852</span></li>
                    </ul>
                    <div class="sum-money">Tổng cộng:<span>0</span>đ</div>
                  </div>
                </div>
              </div>
              <div class="popup-tour-footer">
                <div class="fleft">
                  <button class="btn btn-back btn__hide-popup" type="button">Quay lại</button>
                </div>
              <div class="fright"><a class="btn btn-next btnDatTourNext" href="{{route('thanhToan',$tour->id)}}">Tiếp tục</a></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
@endsection