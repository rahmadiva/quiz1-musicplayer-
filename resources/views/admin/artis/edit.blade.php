@extends('template_backend.home')
@section('content')
<h1>EDIT ARTIS</h1>

<form action="{{ route('artis.update', $artis->id)}}" method="POST">
@csrf
@method('patch')
<div class="form-group">
	<label> Artis</label>
	<input type="text" class="form-control" name="name" value="{{ $artis->name}}">
</div>
<div class="form-group">
	<button class="btn btn-primary ">Simpan Kategori</button>
</div>

@endsection