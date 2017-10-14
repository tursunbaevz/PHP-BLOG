@extends('layouts.app')

@section('content')


@include('includes/messages')



<!-- Article From -->



{!! Form::open(['url' => 'form/submit']) !!}   
    <div class="container">
        <div class="my-form">
        	<div class="form-group">
        		<p>Title</p>
        		<?php echo Form::text('title', '', ['class' => 'form-group', 'placeholder' => 'Title name']);?> <br>
        		<p>Text</p>
        		<?php echo Form::textarea('text' ,  '', ['class' => 'form-group', 'placeholder' => 'Text']);?>	
        	</div>
        	<div>
        		<?php echo Form::submit('Submit', ['class' => 'btn btn-success']); ?>
        	</div>
        </div>
    </div>
{!! Form::close() !!}

@endsection