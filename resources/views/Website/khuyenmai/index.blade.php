@extends('layouts.master')


@section('title', 'Quản lý khuyến mại')


@section('content')


<section class="content">
        <a href="{{ route('khuyen-mai.create') }}" class="btn btn-info btn-flat">Thêm khuyến mại</a>
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
          <th>Giá khuyến mại</th>
          <th>Chi tiết khuyến mại</th>
          <th>Thời gian tạo</th>
          <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($khuyenmai as $key => $item)
        <tr>
           <td>{{ $key+1 }}</td>
          <td>{{$item->gia_KM}}</td>
          <td>{{$item->chi_tiet_KM}}</td>
          <td>{{$item->created_at->format('H:i - d/m/Y')}}</td>
          <td>
                <button name="{{ route('khuyen-mai.destroy', ['id'=>$item->id]) }}" class="btn btn-danger btnDelete" data-toggle="modal" data-target="#modal-default">Xóa</button>
                <a href="{{ route('khuyen-mai.edit', ['id'=>$item->id]) }}" class="btn btn-success">Sửa</a>
          </td>
        </tr>
        @endforeach

        </tbody>
      </table>
      {{$khuyenmai->links()}}
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