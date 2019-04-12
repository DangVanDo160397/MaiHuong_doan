@extends('homepage.layouts.master')

@section('title', )

@section('content')

<div class="popup-tour-wrap popup-tour disable">
    <div class="popup-tour__content">
      <div class="popup-tour__content-left">
        <ul id="tablink">
          <li class="activedefaul" onclick="tabLinks(event, 'nkh')">Ngày khởi hành<i class="fa fa-calendar"></i>
            <p class="date-start-tour disable">23/02/2019</p>
          </li>
          <li onclick="tabLinks(event, 'slk')">Số lượng khách <i class="fa fa-users"></i>
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
                    <td class="text-right price"> <span class="fs-14"></span>đ</td>
                    <td>
                      <div class="unit"><span class="minus btn btn-defaul">-</span><span class="amount">0</span><span class="plus btn"> +</span></div>
                    </td>
                    <td class="text-right total total-adult"><span class="fs-14">0</span>đ</td>
                  </tr>
                  <tr>
                    <td class="text-bold">Trẻ em<span>Từ 2-12 tuổi</span></td>
                    <td class="text-right price"> <span class="fs-14"></span>đ</td>
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
                <li>Số lượng hành khách tối đa sẽ phụ thuộc vào tùy từng tour</li>
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
          <div class="fright"><a class="btn btn-next" href="thanhtoan.html">Tiếp tục</a></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>