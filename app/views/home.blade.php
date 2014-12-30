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
		<a href="#" id="nuovo" class="btn btn-primary pull-right">
			Crea nuovo
		</a>
	</div>
</div>

<div id="statuspanel" class="row" style="display: none;">
	<div class="col-md-12">
		<div class="alert alert-info">
			<p id="statusmessage">Stocazzo</p>
		</div>
	</div>
</div>

<div class="row" id="formo" style="display: none;">
	{{ Form::open(array('url' => 'foo/bar')) }}
	<div class="col-md-6">
		<div class="form-group">
		{{ Form::label('cognome', 'Cognome :') }}
		{{ Form::text('cognome', Input::old('cognome'), array('class' => 'form-control',
													 'placeholder' => 'Cognome')) }}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
		{{ Form::label('nome', 'Nome :') }}
		{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control',
													 'placeholder' => 'Nome')) }}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
		{{ Form::label('email', 'E-Mail :') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control',
													 'placeholder' => 'Indirizzo e-mail')) }}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
		{{ Form::label('livello', 'Livello :') }}
		{{ Form::number('livello', Input::old('email'), array('class' => 'form-control',
													 'placeholder' => 'Level')) }}
		</div>
	</div>
	{{ Form::submit('Invia', array('class' => 'btn btn-primary pull-right',
								   'id' => 'formsubmit')) }}
	{{ Form::close() }}
</div>

@endsection()

@section('myscript')
<script>
$(document).ready(function() {
	$("#nuovo").click(function(e) {
		e.preventDefault();
		$("#statuspanel").fadeOut(200);
		$("#formo").slideToggle(200);
	});
	$("#formsubmit").click(function(e) {
		e.preventDefault();
		$("#statusmessage").html('Operazione in corso...');
		$("#statuspanel").slideToggle(200);
	})
});

</script>
@endsection()
