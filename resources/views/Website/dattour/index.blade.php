@extends('layouts.master')


@section('title', 'Tạo lịch đặt')


@section('content')


<section class="content">
        <a href="{{ route('dat-tour.create') }}" class="btn btn-info btn-flat">Tạo mới</a>
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
          <th>Ngày khởi hành</th>
          <th>Số điện thoại</th>
          <th>Email</th>
          <th>Số người lớn</th>
          <th>Số trẻ em</th>
          <th>Mã tour</th>
          <th>Mã tài khoản</th>
          <th>Mã thanh toán</th>
          <th>Thời gian tạo</th>
          <th>Tùy chọn</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($dattour as $key => $item)
        <tr>
           <td>{{ $key+1 }}</td>
          <td>{{$item->ngay_khoi_hanh }}</td>
          <td>{{$item->so_dien_thoai_KH}}</td>
          <td>{{$item->email_KH}}</td>
          <td>{{$item->so_nguoi_lon}}</td>
          <td>{{$item->so_tre_em}}</td>
          <td>{{$item->ma_tour}}</td>
          <td>{{$item->ma_tai_khoan}}</td>
          <td>{{$item->ma_thanh_toan}}</td>
          <td>{{$item->created_at->format('H:i - d/m/Y') ?? ''}}</td>
          <td>
                <button name="{{ route('dat-tour.destroy', ['id'=>$item->id]) }}" class="btn btn-danger btnDelete" data-toggle="modal" data-target="#modal-default">Xóa</button>
                <a href="{{ route('dat-tour.edit', ['id'=>$item->id]) }}" class="btn btn-success">Sửa</a>
          </td>
        </tr>
        @endforeach

        </tbody>
      </table>
      {{$dattour->links()}}
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