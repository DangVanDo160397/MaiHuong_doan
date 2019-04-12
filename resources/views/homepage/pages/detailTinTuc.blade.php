@extends('homepage.layouts.master')

@section('title', $tintuc->tieu_de_tin_tuc)

@section('content')


<div class="container">
        <div class="row" style=" margin: 20px 0; ">
          <div class="col col-4">
            <div class="owl-carousel owl-theme slide-tour-detail">
              <div class="item">
                <div class="slide-tour-detail__img"><img src="{{ asset(''.$tintuc->hinh_anh_tin_tuc) }}" alt="anh"/></div>
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
            <h2>{{$tintuc->tieu_de_tin_tuc}}</h2>
            <p>Ngày tạo: {{$tintuc->created_at->format('d/m/Y')}}</p>
            <p>{{$tintuc->noi_dung_tin_tuc}}</p>
            
            
            
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

@endsection