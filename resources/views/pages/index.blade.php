@extends('layouts.master') 

@section('title', 'Home') 

@section('content')

<!-- Intro Header -->
<header class="intro">
	<div class="intro-body">
		<div id="home-header-carousel" class="carousel slide" data-ride="carousel" data-interval="6000" data-pause="hover">
			<div class="carousel-inner" role="listbox">
				<div class="item active" style="background-image: url('/img/slider_4000_2000.jpg');">
					<div class="container item-tagline-container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h1 class="brand-heading">Order Delicious Food Online</h1>
								<a href="http://order.personalwaiter.test" rel="noopener noreferrer" target="_blank">
									<button class="btn btn-default">Order Now</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item" style="background-image: url('/img/slider_4000_2000.jpg');">
					<div class="container item-tagline-container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h1 class="brand-heading">We Deliver Good Food for You</h1>
								<a href="http://order.personalwaiter.test" rel="noopener noreferrer" target="_blank">
									<button class="btn btn-default">Order Now</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</header>
</div>
</div>
<!-- About Section -->
<section id="about" class="container full-section text-center parallax" data-parallax="scroll" data-image-src="">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>About us</h2>
					<p>For us, We don't only bring good food from your favourite restautants. We ensure we make a connection, which is why
						we make sure that your meals will arrive fresh, secured and full of flavour. Try us!</p>
					<a href="/about">
						<button class="btn btn-default">Learn more</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Careers Section -->
<section id="careers" class="container full-section text-center parallax dark-bg" data-parallax="scroll" data-image-src="/img/slider_4000_2000.jpg">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Careers</h2>
					<p>Hungry to make a difference? There's always room at our table. Pull up a seat.</p>
					<a href="/career">
						<button class="btn btn-default">JOIN US</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Blog Section -->
<section id="press" class="container full-section text-center parallax dark-bg" data-parallax="scroll" data-image-src="/img/slider_4000_2000.jpg">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Blog</h2>
					<p>Stay Updated and current with all of our works and activities through our blog posts, learn new skills and follow interesting
						trends
						<p>
							<a href="/blog">
								<button class="btn btn-default">SEE THE LATEST</button>
							</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact Section -->
<section id="contact" class="container full-section text-center featurebg-container" data-parallax="scroll" data-image-src="/img/slider_4000_2000.jpg">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Contact</h2>
					<p>We do what we do because of You. Our customers are the heroes of our story. Your comments, ideas and questions push
						us to go that extra mile, every time. So drop us a line!</p>
					<a href="/contact">
						<button type="button" class="btn btn-white">Get in touch</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection