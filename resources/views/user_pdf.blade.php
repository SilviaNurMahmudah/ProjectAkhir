<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Laporan User PDF</title>
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
		<h5>Laporan Users</h4>
	</center>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Create At</th>
				<th>Roles</th>
                <th>Picture</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($User as $u)
			<tr>
				<td>{{$u->id}}</td>
				<td>{{$u->name}}</td>
				<td>{{$u->email}}</td>
				<td>{{$u->created_at}}</td>
				<td>{{$u->roles}}</td>
				<td><img src="{{public_path('storage/'.$u->profil)}}" style="height:70px, width:140px"></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
