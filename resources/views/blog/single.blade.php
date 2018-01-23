@extends('layouts.master') 
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "$titleTag") 

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

<div class="main-content blog-single">
	<div class="container">
		<div class="container" style="margin: 20px">
			@include('partials._messages')
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="content-wrap">
					<article class="post">
						<div class="header-post">
							<h2 class="title-post">
								<a href="#">{{ $post->title }}</a>
							</h2>
							<p class="time-post">On {{ date('M j, Y', strtotime($post->created_at))}}
								<a href="#">{{ $post->comments()->count() }} comments</a>
							</p>
						</div>
						<!-- /.header-post -->
						<div class="feature-post">
							<a href="blog-single.html">
								<img src="/img/blog_img/blog-img.jpg" alt="image">
							</a>
						</div>
						<!-- /.feature-post -->
						<div class="content-post">			
							<p>{!! $post->body !!}</p>
						</div>
						<!-- /.content-post -->

						<div class="direction clearfix">				
							<div class="social-links">
								<span>Share :</span>
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="#">
									<i class="fa fa-google-plus"></i>
								</a>
								<a href="#">
									<i class="fa fa-linkedin"></i>
								</a>
								
							</div>
						</div>
						<!-- /.direction -->

						<div class="comment-post">
							<div class="comment-list-wrap">
								<h4 class="title comment-title">Comment: {{ $post->comments()->count() }} </h4>
								<ul class="comment-list">
									@foreach($post->comments as $comment)
										<li>
											<article class="comment">
												<div class="comment-avatar">
													<img src="{{ "https://www.gravatar.com/avatar/" .md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" alt="image">
												</div>
												<div class="comment-detail">
													<div class="comment-meta">
														<span class="comment-author">
															<a>{{ $comment->name }}</a>
														</span>
														<span class="comment-date">
															<a> {{ date('M j, Y - g:iA', strtotime($comment->created_at))}}</a> 
														</span>
													</div>
													<p class="comment-body">{{ $comment->comment }}</p>
													<a href="#respond" class="comment-reply">Reply</a>
												</div>
													<!-- /.comment-detail -->
											</article>
												<!-- /.comment -->
										</li>
									@endforeach
								</ul>
									<!-- /.comment-list -->
								</div>
								<!-- /.comment-list-wrap -->
								<div id="respond" class="comment-respond">
								<h4 class="title comment-title style1">Leave a comment</h4>
								{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST', 'class' => 'comment-form', 'id' => 'commentform']) }}
									<fieldset class="name-container">
										{{ Form::text('name', null, ['class' => 'tb-my-input', 'placeholder' => 'Name', 'required' => '', 'maxlength' => '255']) }}
									</fieldset>
									<fieldset class="email-container">
										{{ Form::email('email', null, ['class' => 'tb-my-input', 'placeholder' => 'Email','required' => '', 'maxlength' => '255']) }}
									</fieldset>
									<fieldset class="message">
										{{ Form::textarea('comment', null, ['id' => 'comment-message', 'placeholder' => 'Comment', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}
									</fieldset>
									<div class="form-submit">
										{{ Form::submit('Post Comment', ['class' => 'submit', 'id' => 'comment-reply']) }}
									</div>
								{{ Form::close() }}
							</div>
							<!-- /#respond -->
						</div>
						<!-- /.comment-post -->

					</article>
				</div>
				<!-- /.content-post -->
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