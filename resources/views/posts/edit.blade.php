@extends('layouts.master')

@section('title', 'View Post')

@section('stylesheets')
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

	<script>
		tinymce.init({ 
			selector:'textarea',
			plugins: "link image",
			menubar: false,
			branding: false
		});
	</script>
@endsection

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Edit Post</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					Edit Blog post for great, happy, hungry and beautiful customers
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
        {!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method' => 'PUT', 'files' => 'true']) !!}
			<div class="col-md-8 ">
                {{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, ['class' => 'form-control input-lg', 'required' => '']) }}
				
				{{ Form::label('slug', 'URL:') }}
                {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '']) }}
				
				{{ Form::label('category_id', 'Category:') }}
				{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

				{{ Form::label('tags', 'Tags:') }}
				{{ Form::select('tags[]', $tags, null, ['class' => 'form-control js-example-basic-multiple', 'multiple' => 'multiple']) }}

				{{ Form::label('featured_image', 'Update Image:') }}
				{{ Form::file('featured_image') }}

                {{ Form::label('body', 'Body:') }}
				{{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}
			</div>
			<div class="col-md-3">
				<div class= "well">
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
						  	{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), ['class'=>'btn btn-success btn-block', 'style' =>'padding:13px; color:white']) !!} 
							
						</div>
						<div class="col-sm-6">
                                {{ Form::submit('Save Changes', ['class' => 'btn btn-default btn-block'])}}
						</div>
				</div>
            {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection

