@extends('template_backend.home')
@section('content')
<h1>TAMBAH ARTIS</h1>

<form action="{{ route('artis.store') }}" method="POST">
@csrf
<div class="form-group">
	<label> Artis</label>
	<input type="text" class="form-control" name="name">
</div>
<div class="form-group">
	<button class="btn btn-primary ">Simpan Artis</button>
</div>

@endsection