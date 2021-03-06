<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Laporan Comment PDF</title>
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
		<h5>Laporan Comment</h4>
		</center>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Judul</th>
                    <th>Isi</th>
					<th>Gambar</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($Comment as $c)
				<tr>
					<td>{{ $i++ }}</td>
                    <td>{{$c->name}}</td>
					<td>{{$c->title}}</td>
					<td>{{$c->content}}</td>
					<td><img width="150px" src="{{('storage/'.$c->image)}}"></td>
				</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>