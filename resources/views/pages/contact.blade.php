@extends('layouts.master') 

@section('title', 'Contact')

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Get in touch</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					It's food lovers like yourself who inspire us to do what we do. Your comments, ideas and questions push us to go that extra
					mile, every time. So drop us a line!
					<br />
				</p>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.row -->
</div>

<div class="whitebg-container">
	<div class="container">
		@include('partials._messages')
		<article role="article" id="post_13" class="post-13 page type-page status-publish hentry">
			<div class="col-12 col-md-6">
				<form class="form-horizontal" method="POST" action="{{ url('contact') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="Name" style="color: black;">Name: </label>
						<input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
					</div>

					<div class="form-group">
						<label for="email" style="color: black;">Email: </label>
						<input type="email" class="form-control" id="email" placeholder="john@example.com" name="email" required>
					</div>

					<div class="form-group">
						<label for="message" style="color: black;">Message: </label>
						<textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" rows="10" cols="50"
						 name="message" required></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-default" value="Send">Send Message</button>
					</div>
					<p>&nbsp;</p>
					<p style="color: black;">Our Location:
						<br /> 25, Atinuke Ayorinde Street
						<br /> Oba Lipede Estate
						<br /> Onikoko, Abeokuta, Ogun State
						<br /> Call Us: 08035250492</p>
		</article>
    	</form>
	</div>
</div>
	<!-- /container -->
	
@endsection