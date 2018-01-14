@extends('layouts.master')

@section('title', 'Blog') 

@section('content')

@section('stylesheets')
<!-- <link rel='stylesheet' href="{{asset('css/blog_css/bootstrap.css')}}" type='text/css' media='all' /> -->
<link rel='stylesheet' href="{{asset('css/blog_css/blog-style.css')}}" type='text/css' media='all' /> 
@endsection

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Blog</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>Find out what we have to offer by following our amazing and interesting food blog</p>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.row -->
</div>

<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="content-wrap">
						@foreach($posts as $post)
							@include('partials._post')
						@endforeach
						<div class="clearfix"></div>
						<nav class="navigation paging-navigation pager" role="navigation">
							<div class="pagination loop-pagination text-center">
								{!! $posts->links() !!}
							</div>
						</nav>
					</div>
					<!-- /.content-wrap -->
				</div>
				<!-- /.col-md-9 -->
				<div class="col-md-4">
					@include('partials._sidebar')
				</div>
				<!-- /.col-md-3 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!--main-content -->

@endsection