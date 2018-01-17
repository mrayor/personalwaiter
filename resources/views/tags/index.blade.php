@extends('layouts.master')

@section('title', 'Tags')

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Tags</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					Monitor all the Tags on blog posts on our personal waiter page
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
	<div class="row">
        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route'=>'tags.store', 'method' => 'POST']) !!}
                    <h4>New Tag</h4>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
        
                    {{ Form::submit('Create New Tag', ['class' => 'btn btn-default btn-block'])}}
                            
                {!! Form::close() !!}
            </div>
        </div>
		<div class="col-md-10">
			<h1>All Categories</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <th>{{ $tag->id }}</td>
                    <td><a href=" {{ route('tags.show', $tag->id) }} ">{{ $tag->name }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>     
    </div>
</div>

@endsection