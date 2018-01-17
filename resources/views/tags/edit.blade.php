@extends('layouts.master')

@section('title', 'Edit Tag')

@section('content')

<div class="page-hero" style="background-image: url('/img/subheader_4000_1200.jpg');">
	<h2>Edit Tags</h2>
</div>
<div class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<p>
					Edit Tags in blog posts for great, happy, hungry and beautiful customers
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
	<div class="row" style="margin:20px">
            <div>
                    {{ Form::model($tag, ['route'=> ['tags.update', $tag->id], 'method' => 'PUT']) }}

                        {{ Form::label('name', 'Title:') }}
                        {{ Form::text('name', null, ['class'=>'form-control'] ) }}
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-default']) }}

                     {{ Form::close() }}
            </div>
        </div>
    </div>
</div>


@endsection