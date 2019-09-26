<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paket Laundry</title>
</head>
<body>
<center>
	<h3>Data Paket</h3>
 
	<a href="/paket/tambah"> + Tambah Paket Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Id Paket</th>
			<th>Jenis</th>
			<th>Warna</th>
			
		</tr>
		@foreach($paket as $p)
		<tr>
        <td>{{ $p->id }}</td>
			<td>{{ $p->jenis }}</td>
			<td>{{ $p->warna }}</td>
			
			<td>
				<a href="/paket/edit/{{ $p->paket_id }}">Edit</a>
				|
				<a href="/paket/hapus/{{ $p->paket_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</center>
</body>
</html>
</body>
</html>