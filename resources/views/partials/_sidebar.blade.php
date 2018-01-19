<div class="sidebars">
	<div class="sidebars-wrap">
		<div class="sidebar">
			<div class="widget widget_search">
				<h3 class="widget-title">Search</h3>
				<form class="search-form" action="/search/" method="GET">
					<input type="search" class="search-field" name="s" value="{{ Request::query('s')}}" placeholder="Type & Hit Enter...">
					<input type="submit" class="search-submit">
				</form>
			</div>
			<!-- /.widget_search -->

			<div class="widget widget_categories">
				<h3 class="widget-title">Categories</h3>
				@foreach($categories as $category)
					<ul>
						<li>
							<a>{{ $category->name }} ({{ $category->posts()->count() }})</a>
						</li>
					</ul>
				@endforeach
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
					@foreach($tags as $tag)
						<a>{{ $tag->name }}</a>
					@endforeach
				</div>
			</div>
			<!-- /.widget_tag -->
		</div>
		<!-- .sidebar -->
	</div>
	<!-- /.sidebars-wrap -->
</div>
<!-- /.sidebars -->