@extends('layouts.master')

@section('title', 'View Post')

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Blog Post</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					Blog post for great, happy, hungry and beautiful customers
					<br />
				</p>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.row -->
</div>

<div class="container" style="margin: 20px">
    @include('partials._messages')
</div>
<div class="container">
	<div class="row" style="margin:20px">
			<div class="col-md-8 ">
				<h1>{{ $post->title }}</h1>
				<p class="lead"> {{ $post->body}} </p>
				@foreach ($post->tags as $tag)
					<span class="label">{{ $tag->name }}</span>
				@endforeach
			</div>
		
			<div class="col-md-3">
				<div class= "well">
					<dl class="dl-horizontal">
						<dt>Category:</dt>
						<dd>{{ $post->category->name }}</dd>
					</dl> 
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd>{{ date('M j, Y H:i',strtotime($post->created_at)) }}</dd>
					</dl>

					<dl class="dl-horizontal">
							<dt>Last Updated:</dt>
							<dd>{{ date('M j, Y H:i',strtotime($post->updated_at)) }}</dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6" style="padding-bottom:20px">
						  	{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), ['class'=>'btn btn-success btn-block', 'style' =>'padding:13px; color:white']) !!} 
							
						</div>
						<div class="col-sm-6">
							{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

								{!! Form::submit('Delete', ['class' => 'btn btn-default btn-block']) !!}

							{!! Form::close() !!}
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection