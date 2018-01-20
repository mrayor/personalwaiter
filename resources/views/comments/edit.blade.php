@extends('layouts.master')

@section('title', 'Edit Comment')

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Edit Comment</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					Edit Comment posts
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
        {!! Form::model($comment, ['route'=> ['comments.update', $comment->id], 'method' => 'PUT']) !!}
			<div class="col-md-8 ">
                {{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'disabled' => '']) }}
				
				{{ Form::label('email', 'Email:') }}
                {{ Form::text('email', null, ['class' => 'form-control', 'disabled' => '']) }}
				
                {{ Form::label('comment', 'Commment:') }}
                {{ Form::textarea('comment', null, ['class' => 'form-control']) }}
                
                {{ Form::submit('Update Comment', ['class' => 'btn btn-default btn-block']) }}
            </div>
        {!! Form::close() !!}
	</div>
</div>
@endsection

