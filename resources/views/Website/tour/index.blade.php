@extends('layouts.master')


@section('title', 'tour')


@section('content')


<section class="content">
        <a href="{{ route('tour-tour.create') }}" class="btn btn-info btn-flat">Tạo mới</a>
<div class="row">
    <div class="col-xs-12">
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Hover Data Table</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>STT</th>
          <th>Tên tour</th>
          <th style="width: 20%">Hình ảnh tour</th>
          <th>Số ngày</th>
          <th>Mã địa điểm</th>
          <th>Số chỗ</th>
          <th>Giá người lớn</th>
          <th>Giá trẻ em</th>
          <th>Chi tiết tour</th>
          <th>Mã dịch vụ</th>
          <th>Mã khuyến mại</th>
          <th>Loại tour</th>
          <th>Thời gian tạo</th>
          <th>Tùy chọn</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($tour as $key => $item)
        <tr>
           <td>{{ $key+1 }}</td>
          <td>{{$item->ten_tour}}</td> 
          <td style=";text-align: center;"><img style="width: 70%" src="{{asset($item->hinh_anh)}}"></td>
          <td>{{$item->so_ngay}}</td>
          <td>{{$item->ma_dia_diem}}</td>
          <td>{{$item->so_cho}}</td>
          <td>{{$item->gia_nguoi_lon}}</td>
          <td>{{$item->gia_tre_em}}</td>
          <td>{{$item->chi_tiet_tour}}</td>
          <td>{{$item->ma_dich_vu}}</td>
          <td>{{$item->ma_khuyen_mai}}</td>
          <td>{{$item->loai_tour}}</td>
          <td>{{$item->created_at->format('H:i - d/m/Y')}}</td>
          <td>
                <button name="{{ route('tour-tour.destroy', ['id'=>$item->id]) }}" class="btn btn-danger btnDelete" data-toggle="modal" data-target="#modal-default">Xóa</button>
                <a href="{{ route('tour-tour.edit', ['id'=>$item->id]) }}" class="btn btn-success">Sửa</a>
          </td>
        </tr>
        @endforeach

        </tbody>
      </table>
      {{$tour->links()}}
    </div>
    <!-- /.box-body -->
  </div>
    </div>
</div>
</div>


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" method="POST" id="formDelete">
          {{ csrf_field() }} {{ method_field('DELETE') }}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Bạn có muốn xóa?</h4>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
          <button type="submit" class="btn btn-primary">Xóa</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>
  <!-- /.modal -->


@endsection


@section('scripts')
<script>
  $( document ).ready(function() {
    $('.btnDelete').click(function(event) {
      event.preventDefault();
      var action = $(this).attr('name');
      $('#formDelete').attr('action', action);
      // console.log('d '+action)  
    });
  });

</script>
    
@endsection