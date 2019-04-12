@extends('homepage.layouts.master')

@section('title', 'Cẩm nang du lịch')

@section('content')



<div class="section-tours">
        <h1 class="text-center">Cẩm nang du lịch</h1>
        <div class="col-3 col">
          <div class="sidebar">
            <div class="sidebar__item">
              <h2 class="text-center">Tour trong nước</h2>
              <p class="text-center text-italic">Tour trong nước phổ biến</p>
              <ul>
                <li>
                  <input id="toursapa" type="checkbox"/>
                  <label for="toursapa">Sapa</label>
                </li>
                <li>
                  <input id="tourdanang" type="checkbox"/>
                  <label for="tourdanang">Đà nẵng</label>
                </li>
                <li>
                  <input id="tour1" type="checkbox"/>
                  <label for="tour1">Đà Lạt</label>
                </li>
                <li>
                  <input id="tour2" type="checkbox"/>
                  <label for="tour2">Phú Quốc</label>
                </li>
                <li>
                  <input id="tour3" type="checkbox"/>
                  <label for="tour3">Mộc châu</label>
                </li>
                <li>
                  <input id="tour12" type="checkbox"/>
                  <label for="tour12">Quảng Ninh</label>
                </li>
                <li>
                  <input id="tour13" type="checkbox"/>
                  <label for="tour13">Ninh Bình</label>
                </li>
                <li>
                  <input id="tour14" type="checkbox"/>
                  <label for="tour14">Hải Phòng</label>
                </li>
               
              </ul>
              <div class="sidebar-add"><i class="fa fa-chevron-down fright"></i>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="sidebar__item">
              <h2 class="text-center">Tour nước ngoài</h2>
              <p class="text-center text-italic">Tour nước ngoài phổ biến</p>
              <ul>
                <li>
                  <input id="tour4" type="checkbox"/>
                  <label for="tour4">Hàn Quốc</label>
                </li>
                <li>
                  <input id="tour5" type="checkbox"/>
                  <label for="tour5">Thái Lan</label>
                </li>
                <li>
                  <input id="tour6" type="checkbox"/>
                  <label for="tour6">Đài Loan</label>
                </li>
                <li>
                  <input id="tour7" type="checkbox"/>
                  <label for="tour7">Pháp</label>
                </li>
                <li>
                  <input id="tour8" type="checkbox"/>
                  <label for="tour8">Anh</label>
                </li>
                <li>
                  <input id="tour9" type="checkbox"/>
                  <label for="tour9">Mỹ</label>
                </li>
                <li>
                  <input id="tour10" type="checkbox"/>
                  <label for="tour10">Canada</label>
                </li>
                <li>
                  <input id="tour11" type="checkbox"/>
                  <label for="tour11">Lao</label>
                </li>
              </ul>
              <div class="sidebar-add"><i class="fa fa-chevron-down fright"></i>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-9">
          <div class="row">
            <div class="tours-list">
              
                @foreach ($tintuc as $item)
                <div class="col-4">
                  <div class="tours-list__item">
                    <div class="item-tour item-tour-wrap">
                      <div class="item-tour__img"><a href="{{ route('detail_cam_nang', ['id'=>$item->id]) }}"><img src="{{$item->hinh_anh_tin_tuc}}" alt="img-item"/></a></div>
                      <div class="item-tour__infomation">
                        <h3 class="text-center"><a href="{{ route('detail_cam_nang', ['id'=>$item->id]) }}">{{$item->tieu_de_tin_tuc}}</a></h3>
                        <p class="detail-content">{{$item->noi_dung_tin_tuc}}</p><a class="fright detail-link btn-link" href="{{ route('detail_cam_nang', ['id'=>$item->id]) }}">Xem chi tiết...</a>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <!--.in-tour-wrap-->
                  </div>
                </div>
                @endforeach
              
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>

@endsection