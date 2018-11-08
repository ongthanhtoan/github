
<h1>đây là view chủ đề</h1>
<table border="1" width="50%">
	<thead>
		<tr>
			<th>Mã Chủ Đề</th>
			<th>Tên Chủ Đề</th>
		</tr>
	</thead>
	<tbody>
		@foreach($danhsachchude as $chude)
			<tr>
				<td>{{$chude->cd_ma}}</td>
				<td>{{$chude->cd_ten}}</td>
			</tr>
		@endforeach
	</tbody>
</table>