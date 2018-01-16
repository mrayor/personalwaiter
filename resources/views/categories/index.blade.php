@extends('layouts.master')

@section('title', 'Categories')

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Categories</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					Monitor all the Categories on blog posts on our personal waiter page
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
                {!! Form::open(['route'=>'categories.store', 'method' => 'POST']) !!}
                    <h4>New Category</h4>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
        
                    {{ Form::submit('Create New Category', ['class' => 'btn btn-default btn-block'])}}
                            
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
                @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>     
    </div>
</div>

@endsection