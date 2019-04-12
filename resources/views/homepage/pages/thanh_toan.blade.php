@extends('homepage.layouts.master')

@section('title', 'Thanh toán' )

@section('content')

<div class="popup-tour-wrap popup-tour disable">
  <div class="popup-tour__content popup-tour__content-small">
    <div class="popup-tour-user">
      <form action="">
        <div class="popup-tour-table">
          <table>
            <tr class="text-center">
              <th></th>
              <th class="fix-w-120">Giá</th>
              <th class="fix-w-120">Số lượng</th>
              <th class="fix-w-150">Tổng</th>
            </tr>
            <tr class="size-big">
              <td class="text-bold">Người lớn<span>Trên 12 tuổi</span></td>
              <td class="text-right price"> <span class="fs-14" >{{$tour->gia_nguoi_lon}}</span>đ</td>
              <td>
                <div class="unit"><span class="minus btn btn-defaul">-</span><span class="amount" id="qty_nguoi_lon">0</span><span class="plus btn"> +</span></div>
              </td>
              <td class="text-right total total-adult"><span class="fs-14" id="price_nguoi_lon">0</span>đ</td>
            </tr>
            <tr class="size-small">
              <td class="text-bold">Trẻ em<span>Từ 2-12 tuổi</span></td>
              <td class="text-right price"> <span class="fs-14" id="qty_nguoi_lon">{{$tour->gia_tre_em}}</span>đ</td>
              <td>
                <div class="unit"><span class="minus btn btn-defaul">-</span><span class="amount">0</span><span class="plus btn"> +</span></div>
              </td>
              <td class="text-right total total-young"><span class="fs-14" id="price_tre_em">0</span>đ</td>
            </tr>
            
          </table>
        </div>
      </form>
      <div class="popup-tour-notes">
        <h3>Lưu ý khi đặt tour</h3>
        <ul>
          <li>Số lượng hành khách tối đa phụ thuộc vào tùy từng tour</li>
          <li>Số trẻ em không vượt quá số người lớn</li>
        </ul>
        <div class="sum-money">Tổng cộng:<span>0</span>đ</div>
      </div>
    </div>
    <div class="edit-update">
      <button class="btn btn-popup-update" id="update">Cập nhật</button>
    </div>
  </div>
</div>
<!--.editpop-wrap-->
<div class="section-pay">
  <div class="container">
    <div class="wrapper-tours-detail text-center">
      <h1>Thanh toán</h1>
      <p>Xin quý khách nhập đầy đủ thông tin</p>
    </div>
    <div class="row">
      {{-- {{ form::open([ 'route' => 'StoreThanhToan', 'method' => 'post' ] ) }} --}}
      <form action="{{route('StoreThanhToan')}}" method="POST">
        @csrf

        <input type="hidden" value="{{$tour->id}}" name="tour_id">
        <div class="col col-4">
          <div class="section-pay__tour"><img src="{{ asset(''.$tour->hinh_anh) }}" alt="img"/>
            <h4>Tên tour: <i><span>{{$tour->ten_tour}}</span></i></h4>
            <h4>Chi tiết: </h4><i><span>{{$tour->chi_tiet_tour}}</span></i>
            <h4>Số ngày: <i><span>{{$tour->so_ngay}}</span></i> ngày</h4>
          </div>
        </div>
        <div class="col col-4">
          <h3>A - Thông tin khách hàng</h3><a href="{{ route('getLogin') }}"><i class="fa fa-arrow-circle-right"></i>Bạn đã có tài khoản? Đăng nhập ngay</a>
          <div class="input-information">
            <label for="">Họ tên:</label> <input type="text" style="width:230px;  margin-left: 50px;" value="@if(Auth::check()) {{Auth::user()->name}} @endif" placeholder="Họ &amp; Tên *"/>
            <label for="">Số điện thoại:</label><input type="text" style="width:230px;  margin-left: 10px;" value="@if(Auth::check()) {{Auth::user()->so_dien_thoai}} @endif" name="so_dien_thoai_KH" placeholder="Số di động *"/>
            <label for="">Email:</label><input type="text" style="width:230px;  margin-left: 63px;" value=" @if(Auth::check()) {{Auth::user()->email}} @endif" name="email_KH" placeholder="Địa chỉ email"/>
            <label for="">Ngày khởi hành : </label><input type="date" style="width:230px;  margin-left: 63px;" value="{{old('ngay_khoi_hanh')}}" name="ngay_khoi_hanh" placeholder="Ngày khởi hành.."/>
          </div>
          <h3>B - Thông tin đặt tour</h3>
          <!--
          <div class="section-pay-line"><span class="fleft">Khách người lớn</span><span class="fright"><span class="nuberx-big">0</span>x <span class="pricex-big">0</span>đ</span>
            <div class="clearfix"></div>
          </div>
          <div class="section-pay-line"><span class="fleft">Khách trẻ em</span><span class="fright"><span class="nuberx-small">0</span>x <span class="pricex-small">0</span>đ</span>
            <div class="clearfix"></div>
          </div>
        -->
          
          <div class="btn btn-update" href=""><i class="fa fa-pencil"></i>Cập nhật thông tin khách hàng</div>
          <div class="input-information">
            <div class="form-group">
                <label for="">Người lớn:</label> 
                <input type="number" name="so_nguoi_lon" value="1"  style="width:50px;  margin-left: 50px;" />
            </div>  
            <div class="form-group">
                <label for="">Trẻ em:</label> 
                <input type="number" name="so_tre_em" value="1"  style="width:50px;  margin-left: 71px;" />
            </div> 
          </div>
          <div class="section-pay-price">
            <div class="section-pay-line"><span class="fleft">Giá: </span><span class="fright sumx">
                0đ</span>
              <div class="clearfix"></div>
            </div>
            <div class="section-pay-line"><span class="fleft">Tổng cộng: </span><span class="fright sumx">
                0đ</span>
              <div class="clearfix"></div>
            </div>
            <div class="section-pay-line"><span class="fleft">Đặt trước: </span><span class="fright text-green prepay">
                0đ</span>
              <div class="clearfix"></div>
            </div>

            <div class="section-pay-pricecore">
              <input type="text" placeholder="Nhập mã khuyến mại"/>
              <button class="btn btn-apply">Áp dụng</button>
            </div>
          </div>
        </div>
        <div class="col col-4">
          <h3>C - Phương thức thanh toán</h3>
          <div class="section-pay__tab active">
            <h4><i class="fa fa-dot-circle-o"></i><i class="fa fa-circle-thin"></i><input type="radio" name="chuyenkhoan" value="11"/>Thanh toán chuyển khoản</h4>

            <div class="section-pay__tab-wrap">
              <p>Quý khách có thể thanh toán bằng tiền mặt tại ngân hàng hoặc chuyển khoản qua internet và ATM theo thông tin sau:</p>
              <div class="detail-pay-row">
                <div class="detail-pay">
                  <div class="detail-pay-col col-4 text-italic">Chủ tài khoản:</div>
                  <div class="detail-pay-col col-8">Công ty du lịch bốn phương</div>
                  <div class="clearfix"></div>
                </div>
                <div class="detail-pay">
                  <div class="detail-pay-col col-4 text-italic">Số tài khoản:</div>
                  <div class="detail-pay-col col-8">123456789123</div>
                  <div class="clearfix"></div>
                </div>
                <div class="detail-pay">
                  <div class="detail-pay-col col-4 text-italic">Ngân hàng:</div>
                  <div class="detail-pay-col col-8">Techcombank</div>
                  <div class="clearfix"></div>
                </div>
                <div class="detail-pay">
                  <div class="detail-pay-col col-4 text-italic">Chi nhánh:</div>
                  <div class="detail-pay-col col-8">Hà Nội</div>
                  <div class="clearfix"></div>
                </div>
                <div class="detail-pay">
                  <div class="detail-pay-col col-4 text-italic">Nội dung ck:</div>
                  <div class="detail-pay-col col-8">[Mã đơn hàng] [số điện thoại đặt hàng]
                    <p>Ví dụ: 123 234</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-pay__tab">
            <h4><i class="fa fa-dot-circle-o"></i><i class="fa fa-circle-thin"></i><input type="radio" name="chuyenkhoan" value="12" checked/>Thanh toán tiền mặt tại văn phòng Du lịch bốn phương</h4>

            <div class="section-pay__tab-wrap">
              <p>Trong vòng 24h từ khi gửi thông tin đặt chỗ quý khách vui lòng thanh toán tiền đặt cọc tại văn phòng </p>
            </div>
          </div>
          <!--
          <div class="section-pay__tab">
            <h4><i class="fa fa-dot-circle-o"></i><i class="fa fa-circle-thin"></i><input id="confirm" type="checkbox"/>Thanh toán bằng thẻ/tài khoản ngân hàng (ATM nội địa/quốc tế)</h4>
            <div class="section-pay__tab-wrap">
              <select name="">
                <option value="">bank1</option>
                <option value="">bank2</option>
                <option value="">bank3</option>
                <option value="">bank4</option>
                <option value="">bank5</option>
              </select>
            </div>
          </div>
        -->
        <!--
          <div class="section-pay__tab">
            <h4><i class="fa fa-dot-circle-o"></i><i class="fa fa-circle-thin" ></i><input type="radio" name="chuyenkhoan"/>Thẻ tín dụng/ghi nợ quốc tế</h4>
            <div class="section-pay__tab-wrap">
              <select name="">
                <option value="">VISA</option>
                <option value="">MASTER</option>
                <option value="">JCB</option>
              </select>
            </div>
          </div>
          -->
        
          <div class="section-pay-confirm">
            <input id="confirm" type="checkbox"/>
            <label for="confirm">Tôi đồng ý với các <a href="{{ route('dieuKien') }}">điều khoản và điều kiện</a>của trang web</label>
          </div>
          
          <button type="submit" class="btn btn-send">Gửi yêu cầu</button>
        </div>
        <div class="clearfix"></div>
      </form>

    </div>
  </div>
</div>



@endsection

@section('script')
  <script>
    // $(document).ready(function(){
    //   $('#update').click(function(){
    //       var qty_nguoi_lon = document.getElementById('qty_nguoi_lon').value;
          
    //       document.getElementById('so_nguoi_lon').value = qty_nguoi_lon;
    //   });
    // });
  </script>
@endsection('script')