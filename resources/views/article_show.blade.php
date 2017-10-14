@extends('layouts.app')

@section('content')

   	<div class="container">
		<div class="row">
			<div class="col-sm-8 blogmain">
				<div class="blog-post">
					<h2 class="blog-post-title">{{$article->title}}</h2>
					<p class="blog-post-meta">{{ \Carbon\Carbon::parse($article->pubdate)->format('d/m/Y')}} </p>
				</div>			
				<p>{{$article->text}}</p>
			</div>	
		</div>
	</div>	

	
@endsection