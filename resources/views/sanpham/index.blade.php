@extends('backend.layouts.index')
@section('title')
Danh Sách Sản Phẩm
@endsection
@section('main-content')
<table border="1">
	<thead>
		<tr>
			<th>Mã Sản Phẩm</th>
			<th>Tên Sản Phẩm</th>
			<th>Tên Loại</th>
		</tr>
	</thead>
	<tbody>
		@foreach($danhsachsanpham as $sanpham)
		<tr>
			<td>{{$sanpham->sp_ma}}</td>
			<td>{{$sanpham->sp_ten}}</td>
			<td>{{$sanpham->Loai->l_ten}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
