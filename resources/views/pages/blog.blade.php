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
						<article class="post">
								<div class="header-post">
									<h2 class="title-post">
										<a href=" {{ url('blog/'.$post->slug) }} ">{{ $post->title }}</a>
									</h2>
									<p class="time-post">On {{ date('M j, Y', strtotime($post->created_at))}}
										<a href="#">3 comments</a>
									</p>
								</div>
								<!-- /.header-post -->
		
								<div class="feature-post">
									<a href="{{ url('blog/'.$post->slug) }}">
										<img src="/img/blog_img/blog-img.jpg" alt="image">
									</a>
								</div>
								<!-- /.feature-post -->
		
								<div class="content-post">
									<p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : ""}}</p>
		
									<div class="readmore">
										<a href="{{ url('blog/'.$post->slug) }}">Continue reading...</a>
									</div>
		
									<div class="meta-post clearfix">
										<div class="by-author">
											<a href="#">By Admin </a>
										</div>
		
										<div class="social-links">
											<a href="#">
												<i class="fa fa-twitter"></i>
											</a>
											<a href="#">
												<i class="fa fa-facebook"></i>
											</a>
											<a href="#">
												<i class="fa fa-instagram"></i>
											</a>
										</div>
									</div>
								</div>
								<!-- /.content-post -->
						
						</article>
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