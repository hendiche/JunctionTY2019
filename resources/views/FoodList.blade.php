@extends('layouts.app')

@push('pageStyle')
<style type="text/css">
	.card-img {
		height: 100%;
		max-height: 200px;
		object-fit: cover;
		object-position: center;
	}
	.JTY-card-link > a {
		color: black;
	}
	.card.JTY-card-link > a:hover {
		color: black;
		text-decoration: none;
	}
	.card.JTY-card-link:hover {
		border: 1px solid green;
	}
</style>
@endpush

@section('content')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-xl-7 col-12" id="foodLists">
			@foreach ($foodLists as $item)
				
				<div class="card mb-3 JTY-card-link">
					<a href="{{ route('foodDetails', ['food_id' => $item['recipe']->id]) }}">
						<div class="row">
						    <div class="col-md-4">
						        <img src="{{ sizeof($item['recipe']->imageUrls) > 0 ? $item['baseURL'].$item['recipe']->image : 'http://www.mkanez-qs.com/public/41646D696E6973747261746F72Images/noImage.png' }}" class="card-img" alt="...">
						    </div>
						    <div class="col-md-8">
						    	<div class="card-body">
						    		<h5 class="card-title">{{ $item['recipe']->title }}</h5>
						    		<p class="card-text">Ready in minutes: {{ $item['recipe']->readyInMinutes }} Mins</p>
						    		<p class="card-text">
						    			<span class="badge badge-warning">New</span>
						    		</p>
						    	</div>
						    </div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
