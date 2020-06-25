@extends('template_backend.home')
@section('content')
<h1>TAMBAH ALBUM</h1>

<form action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
	<label> nama album</label>
	<input type="text" class="form-control" name="nama_album">
</div>
<div class="form-group">
	<label> Artis</label>
	<select class="form-control" name="artis_id">
	<option value="" holder>Pilih Artis</option>
	@foreach($artis as $result)
		<option value="{{$result->id}}">{{ $result->name }}</option>
		@endforeach
	</select>
</div>
<div class="form-group">
	<button class="btn btn-primary ">Simpan Albums</button>
</div>

@endsection