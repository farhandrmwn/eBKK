<!DOCTYPE html>
<html>
<head>
	<title>Cetak data alumni</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<div class="container">
		<center>
			<h5>Data Alumni</h4>
		</center>
	 
		<table class="table table-bordered table-hover table-sm text-center mt-3">
			<thead>
				<tr>
					<th>No</th>
	                <th>NIS</th>
	                <th>Nama</th>
	                <th>Jenis Kelamin</th>
	                <th>Alamat</th>
	                <th>No. Handphone</th>
	                <th>Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($alumni as $a)
				<tr>
					<td>{{ $loop->iteration }}</td>
	                <td>{{ $a->nis }}</td>
	                <td>{{ $a->nama }}</td>
	                <td>{{ $a->jk }}</td>
	                <td>{{ $a->alamat }}</td>
	                <td>{{ $a->no_hp }}</td>
	                <td>{{ $a->status }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
 
</body>
</html>