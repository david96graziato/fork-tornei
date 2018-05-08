@if (count($errors) > 0)
	<div class="form-group">
		@foreach ($errors->all() as $error)
		    <div class="alert alert-danger" role="alert">
		        <em>{{ $error }}</em>
		    </div>    
		@endforeach
	</div>
@endif
@if (Session::has('success_message'))
	<div class="alert alert-success" role="alert">
		<em>{!! Session::get('success_message') !!}</em>
	</div> 
@endif