<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table  Login</title>
</head>
<body>
    
    <a href="/tambah"> + Tambah Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>username</th>
			<th>Nama</th>
			<th>password</th>
			<th>opsi</th>
		</tr>
		@foreach($Login as $L)
		<tr>
			<td>{{ $L->username }}</td>
			<td>{{ $L->nama }}</td>
			<td>{{ $L->password }}</td>
			<td>
				<a href="/Login/edit/{{ $L->id }}">Edit</a>
				|
				<a href="/Login/hapus/{{ $L->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	
</body>
</html>