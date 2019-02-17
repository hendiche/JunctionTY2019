@extends('layouts.app')

@push('pageStyle')
<style type="text/css">
	#plx {
		background: url('https://spoonacular.com/recipeImages/Baked-Penne-with-Chicken--Broccoli-and-Smoked-Mozzarella-569634.jpg');
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.wtitle {
		padding: 150px 20px;
	}
	.wtitle h2 {
		font-size: 36px;
		font-weight: bold;
		text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
		color: white;
	}
	.wrd-break-all {
		word-break: break-all;
	}
</style>
@endpush

@section('content')
<section id="plx">
	<div class="container">
		<div class="wtitle text-center">
			<h2>{{ $foodDetails->hits[0]->fields->item_name }}</h2>
		</div>
	</div>
</section>
<div class="mb-5"></div>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-xl-7 col-12">
			<h2 class="font-weight-bold">{{ $foodDetails->hits[0]->fields->item_name }}</h2>
			<h3 class="font-weight-normal mb-5">Brand: {{ $foodDetails->hits[0]->fields->brand_name }}</h3>
			<h4 class="font-weight-bold">Description</h4>
			<div class="mb-5">{{ $foodDetails->hits[0]->fields->item_description }}</div>
			<h4 class="font-weight-bold">Ingredients</h4>
			<div class="mb-5">
				@for ($i = 0; $i < 6; $i++)
					<span class="badge badge-pill badge-secondary">Secondary</span>
				@endfor
			</div>
			<h4 class="font-weight-bold">Nutritions</h4>
			<div class="mb-5">
				<ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Calories
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_calories }}
				    </span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
						Calcium
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_calcium_dv }}
				    </span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
						Iron
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_iron_dv }}
				    </span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
						Protein
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_protein }}
				    </span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
						Sodium
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_sodium }}
				    </span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
						Sugars
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_sugars }}
				    </span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
						Total Carbohydrate
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_total_carbohydrate }}
				    </span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
						Total Fat
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_total_fat }}
				    </span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
						Vitamin A
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_vitamin_a_dv }}
				    </span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
						Vitamin C
				    <span class="badge badge-primary badge-pill">
				    	{{ $foodDetails->hits[0]->fields->nf_vitamin_c_dv }}
				    </span>
				  </li>
				</ul>
			</div>
			<h4 class="font-weight-bold">Related Links</h4>
			<div class="mb-5">
				<ul class="list-group">
					@foreach($relatedLinks as $item)
						<li class="list-group-item d-flex justify-content-between align-items-center wrd-break-all">
							<a href="{{ $item }}">{{ $item }}</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>

<div>{{ $foodDetails->total_hits }}</div>
@endsection
