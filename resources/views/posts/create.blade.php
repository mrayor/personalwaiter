@extends('layouts.master')

@section('title', 'Create New Post')

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
	<h2>Create Post</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					Build content and create amazing blog posts for beautiful customer
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
<div class="row" style="margin:20px">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        <hr>
            {!! Form::open(['route' => 'posts.store']) !!}
                {{ Form::label('title', 'Title:')}}
				{{ Form::text('title', null, ['class' => 'form-control input-lg', 'placeholder' => 'Post Title', 'required' => '', 'maxlength' => '255' ])}}
				
				{{ Form::label('slug', 'URL:')}}
                {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter URL', 'required' => '', 'minlength' => '5', 'maxlength' => '255' ])}}

				{{ Form::label('category_id', 'Category:')}}
				<select class="form-control" name="category_id">
					@foreach($categories as $category)
						<option value='{{ $category->id }}'>{{ $category->name }}</option>
					@endforeach
				</select>
				
	
				{{ Form::label('tags', 'Tags:')}}
				<select class="form-control js-example-basic-multiple" name="tags[]" multiple="multiple">
					@foreach($tags as $tag)
						<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
					@endforeach
				</select>

				

                {{ Form::label('body', 'Post Body:')}}
                {{ Form::textarea('body', null, ['class' => 'form-control luna-message', 'placeholder' => 'Enter Blog Post Here'])}}

                {{ Form::submit('Create Post', ['class' => 'btn btn-default', 'style' => 'margin-top: 20px'])}}
            {!! Form::close() !!}
        
	</div>

</div>

    

@endsection
