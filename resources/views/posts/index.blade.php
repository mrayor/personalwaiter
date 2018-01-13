@extends('layouts.master') 

@section('title', 'All Posts') 

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>All Post</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					Monitor all the blog posts on our personal waiter page
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
			<h1>All Post</h1>
		</div>
		<div class="col-md-2">
                {!! Html::linkRoute('posts.create', 'Create New Post', array(), ['class'=>'btn btn-default btn-block', 'style'=>'padding:13px; color:white']) !!}
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
							<th scope="col">Body</th>
							<th scope="col">Created at</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
						<tr>
							<th scope="row">{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body, 0, 50) }} {{strlen($post->body) > 50 ? "..." : ""}}</td>
							<td>{{ date('M j, Y', strtotime($post->created_at))}}</td>
							<td>
                                {!! Html::linkRoute('posts.show', 'View', array($post->id), ['class'=>'btn btn-default btn-sm', 'style'=>'padding:13px; color:white']) !!}
                                {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), ['class'=>'btn btn-success btn-sm', 'style' =>'padding:13px; color:white']) !!} 
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				<div class="text-center">
					{!! $posts->links() !!}
				</div>
			</div>
		</div>
	</div>

</div>




@endsection