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