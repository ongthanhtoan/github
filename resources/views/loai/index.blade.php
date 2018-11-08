@extends('backend.layouts.index')
@section('title')
Danh Sách Loại Sản Phẩm
@endsection
@section('main-content')
<table border="1" width="50%">
	<thead>
		<tr>
			<th>Mã Loại</th>
			<th>Tên Loại</th>
		</tr>
	</thead>
	<tbody>
		@foreach($danhsachloai as $loai)
			<tr>
				<td>{{$loai->l_ma}}</td>
				<td>{{$loai->l_ten}}</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection