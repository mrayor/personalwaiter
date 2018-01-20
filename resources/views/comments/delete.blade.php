@extends('layouts.master')

@section('title', 'Delete Comment')

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Delete Comment</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
                    Delete This Comment?
					<br />
				</p>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.row -->
</div>

<div class="container">
        <div class="row" style="margin:20px">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <strong>Name:</strong> {{ $comment->name }}<br>
                <strong>Email:</strong> {{ $comment->email }}<br>
                <strong>Comment:</strong> {{ $comment->comment }}
            </p>

                {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE'])  }}
                    {{ Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-default']) }}
                {{ Form::close() }} 
        </div>

    </div>

</div>


@endsection