<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Laporan Destinasi PDF</title>
</head>
<body>
	<style type="text/css">
		table {
        	border-collapse: collapse;
            width: 100%;
            font-size: 9pt;
            border: 1px solid #999;
            color: #232323;
        }
        th, td {
            text-align: left;
            padding: 16px;
            font-size: 9pt;
            border: 1px solid #999;
            color: #232323;
        }
        tr:nth-child(even) {
	        background-color: #f2f2f2
        }
	</style>
	<center>
		<h5>Laporan Artikel Destinasi Wisata</h4>
		</center>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Isi</th>
                    <th>Jenis Wisata</th>
					<th>Gambar</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($Destinasi as $d)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$d->title}}</td>
					<td>{{$d->content}}</td>
                    <td>{{$d->jenis_wisata}}</td>
					<td><img width="150px" src="{{('storage/'.$d->image)}}"></td>
				</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>