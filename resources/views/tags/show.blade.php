@extends('layouts.master')

@section('title', "$tag->name Tag")

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Tags</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					Manage all tags on blog posts
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
			<div class="col-md-10">
				<h1>{{ $tag->name }} Tag <small> {{ $tag->posts()->count() }} Posts</small> </h1>
			</div>
			<div class="col-md-2">
					<a href=" {{ route('tags.edit', $tag->id) }} " class='btn btn-success btn-block', style='padding:13px; color:white; margin-bottom: 10px'>Edit Tags</a>
			</div>
			<div class="col-md-2">
				{{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
					{{ Form::submit('Delete', ['class' => 'btn btn-default btn-block']) }}
				{{ Form::close() }}

			</div>
	
			<div class="col-md-12">
				<hr>
			</div>
	
			<hr>
		</div>
		<!--end of .row-->
		<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Title</th>
									<th scope="col">Tags</th>
									<th><th>
								</tr>
							</thead>
							<tbody>
									@foreach($tag->posts as $post)
									<tr>
										<th scope="row">{{ $post->id }}</th>
										<td>{{ $post->title }}</td>
										<td>@foreach ($post->tags as $tag)
											<span class="label"> {{ $tag->name }} </span>
											@endforeach
										</td>
										<td>
											<a href=" {{ route('posts.show', $post->id) }} " class='btn btn-default btn-sm', style='padding:13px; color:white'>View</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							
						</div>
					</div>
				</div>
			
			</div>



 
@endsection