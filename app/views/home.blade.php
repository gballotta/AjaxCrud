@extends('layouts.main')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h1>AJAX CRUD <small>A Jointhub study</small></h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-10">
		<form>
			<div class="form-group">
				<input type="text" class="form-control" id="ricerca" placeholder="Inserire cognome" />
			</div>
		</form>
	</div>
	<div class="col-md-2">
		<a href="#" class="btn btn-primary">
			Crea nuovo
		</a>
	</div>
</div>
@endsection()