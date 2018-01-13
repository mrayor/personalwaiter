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
					<div class="sidebars">
						<div class="sidebars-wrap">
							<div class="sidebar">
								<div class="widget widget_search">
									<h3 class="widget-title">Search</h3>
									<form class="search-form">
										<input type="search" class="search-field" placeholder="Type & Hit Enter...">
										<input type="submit" class="search-submit">
									</form>
								</div>
								<!-- /.widget_search -->
	
								<div class="widget widget_categories">
									<h3 class="widget-title">Categories</h3>
									<ul>
										<li>
											<a href="#">Chicken Tinga Nachos (9)</a>
										</li>
										<li>
											<a href="#">Sweet and Sour Pork Chops (9)</a>
										</li>
										<li>
											<a href="#">Green Chile And Chicken Stew (9)</a>
										</li>
										<li>
											<a href="#">Pecan Pie Macarons (9)</a>
										</li>
										<li>
											<a href="#">Brazilian Burger With Egg (9)</a>
										</li>
										<li>
											<a href="#">Sweet and Sour Pork Chops (9)</a>
										</li>
									</ul>
								</div>
								<!-- /.widget_categories -->
	
								<div class="widget widget_recent_entries clearfix">
									<h3 class="widget-title">Recent Post</h3>
									<ul class="recent-post clearfix">
										<li>
											<div class="thumb">
												<img src="/img/blog_img/blog-thumbnail.jpg" alt="image">
											</div>
											<div class="text">
												<h4>
													<a href="#">Post with couple photos inside</a>
												</h4>
												<p>On 13 Nov 2015</p>
											</div>
										</li>
	
										<li>
											<div class="thumb">
												<img src="/img/blog_img/blog-thumbnail.jpg" alt="image">
											</div>
											<div class="text">
												<h4>
													<a href="#">Post with couple photos inside</a>
												</h4>
												<p>On 13 Nov 2015</p>
											</div>
										</li>
	
										<li>
											<div class="thumb">
												<img src="/img/blog_img/blog-thumbnail.jpg" alt="image">
											</div>
											<div class="text">
												<h4>
													<a href="#">Post with couple photos inside</a>
												</h4>
												<p>On 13 Nov 2015</p>
											</div>
										</li>
									</ul>
								</div>
								<!-- /.widget_recent_entries -->
	
								<div class="widget widget_latest_tweets">
									<h3 class="widget-title">Latest Tweets</h3>
									<ul>
										<li>
											<p>Portfolio Page Creation: </p>
											<p>
												<a href="#">https://t.co/TN773odoa</a>@YouTube</p>
											<p>5 days ago</p>
										</li>
	
										<li>
											<p>Portfolio Page Creation: </p>
											<p>
												<a href="#">https://t.co/TN773odoa</a> @YouTube</p>
											<p>5 days ago</p>
										</li>
	
										<li>
											<p>Portfolio Page Creation: </p>
											<p>
												<a href="#">https://t.co/TN773odoa</a> @YouTube</p>
											<p>5 days ago</p>
										</li>
	
	
									</ul>
								</div>
								<!-- /.widget_latest_tweets -->
	
								<div class="widget widget_tag">
									<h3 class="widget-title">Popular Tags</h3>
									<div class="tag-list">
										<a class="active" href="#">example, </a>
										<a href="#">Gallery, </a>
										<a href="#">Image, </a>
										<a href="#">quote, </a>
										<a href="#">tag, </a>
										<a href="#">Video,</a>
										<a href="#">PSD Teplates,</a>
										<a href="#">Business, </a>
										<a href="#">Portfolio, </a>
										<a href="#">Construction, </a>
										<a href="#">One Page, </a>
									</div>
								</div>
								<!-- /.widget_tag -->
							</div>
							<!-- .sidebar -->
						</div>
						<!-- /.sidebars-wrap -->
					</div>
					<!-- /.sidebars -->
				</div>
				<!-- /.col-md-3 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!--main-content -->

@endsection