@extends('admin.app')

@section('content')

<div class="container">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Anggota Baru</h3>
		</div>
		<div class="box-body">

			<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th>Tanggal Bergabung</th>
				</tr>
				</thead>
				@foreach ($users as $user)
				<tr>
					<td>{{ $user->pribadi["nama"] }}</td>
					<td>{{ $user->pribadi["email"] }}</td>
					<td>{{ $user->join_date }}</td>
				</tr>

				@endforeach
			</table>
		</div>
	</div>
</div>

{{ $users->links() }}
@endsection