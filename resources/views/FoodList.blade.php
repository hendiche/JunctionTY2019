@extends('layouts.app')

@push('pageStyle')
<style type="text/css">
	.card-img {
		height: 100%;
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
		<div class="col-xl-7 col-12">
			@for ($i = 0; $i < 3; $i++)
				<div class="card mb-3 JTY-card-link">
					<a href="{{ route('foodDetails', ['food_id' => '1']) }}">
						<div class="row">
						    <div class="col-md-4">
						        <img src="http://www.mkanez-qs.com/public/41646D696E6973747261746F72Images/noImage.png" class="card-img" alt="...">
						    </div>
						    <div class="col-md-8">
						    	<div class="card-body">
						    		<h5 class="card-title">Card title</h5>
						    		<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						    		<p class="card-text">
						    			<span class="badge badge-warning">New</span>
						    		</p>
						    	</div>
						    </div>
						</div>
					</a>
				</div>
			@endfor
		</div>
	</div>
</div>
@endsection
