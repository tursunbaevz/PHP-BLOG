@if(count($errors ) > 0)
	@foreach($errors->all() as $error)
	<div class="alert alert-danger">
		<?php echo  $error ?>
	</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success">
		<?php echo session('success'); ?>
	</div>
@endif