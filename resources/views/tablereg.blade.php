<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table Registerasi</title>
</head>
<body>
    
    <a href="/tambah"> + Tambah Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No_Hp</th>
			<th>opsi</th>
		</tr>
		@foreach($register as $r)
		<tr>
			<td>{{ $r->nama }}</td>
			<td>{{ $r->alamat }}</td>
			<td>{{ $r->no_hp }}</td>
			<td>
				<a href="/Regis/edit/{{ $r->id }}">Edit</a>
				|
				<a href="/Regis/hapus/{{ $r->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>