@extends('layouts.blog.default')

@section('title', 'Home')

@section('breadcrumb')

@endsection

@section('content')

<!-- Main content -->
<div class="content">
	<div class="container pt-3">
		@forelse($posts as $post)
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h1>{{ $post->title }}</h1>
							<p class="card-text">
								{!! htmlspecialchars_decode(stripslashes($post->description)) !!}
							</p>
						</div>
						<div class="card-footer">
							<p>Publication date: {{ $post->publication_date }}</p>
						</div>
					</div>
				</div>
			</div>
			@empty
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								No posts here
							</div>
						</div>
					</div>
				</div>
			@endforelse
			<div class="pagination mt-3">
            	{{ $posts->links() }}
        	</div>
		</div>
	</div>
</div>

@endsection