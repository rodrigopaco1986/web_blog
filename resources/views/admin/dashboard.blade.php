@extends('layouts.admin.default')

@section('title', 'Home')

@section('content')

<div class="row">
	<div class="col-lg-3 col-6">
		<div class="small-box bg-success">
			<div class="inner">
				<h3>{{ $nPost }}</h3>
				<p>{{ getPlural('Post', $nPost)}}</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="{{ route('posts.index') }}" class="small-box-footer">
				Go to Post List&nbsp;&nbsp;
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<div class="small-box">
			<div class="inner">
				<p class="text-center">
					<br>
					<a href="{{ route('posts.create') }}" class="btn btn-block btn-outline-default btn-lg">
						Add new Post
					</a>
				</p>
			</div>
			<a href="{{ route('posts.create') }}" class="small-box-footer">
				<i class="fas fa-plus"></i>
			</a>
		</div>
	</div>
</div>

@endsection