@extends('layouts.app')

@push('pageStyle')
<style type="text/css">
	#plx {
		background: url('https://bluewater.co.uk/sites/bluewater/files/styles/image_spotlight_large/public/images/spotlights/burger-cropped.jpg?itok=SeFYMFP6');
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
</style>
@endpush

@section('content')
<section id="plx">
	<div class="container">
		<div class="wtitle text-center">
			<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
		</div>
	</div>
</section>
<div class="mb-5"></div>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-xl-7 col-12">
			<h2 class="font-weight-bold mb-5">Crispy Fried Calamari</h2>
			<h4 class="font-weight-bold">Description</h4>
			<div class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae justo elementum magna placerat placerat ac at enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin eget eleifend enim.</div>
			<h4 class="font-weight-bold">Ingredients</h4>
			<div class="mb-5">
				@for ($i = 0; $i < 6; $i++)
					<span class="badge badge-pill badge-secondary">Secondary</span>
				@endfor
			</div>
			<h4 class="font-weight-bold">Nutritions</h4>
			<div class="mb-5">
				<ul class="list-group">
					@for($i = 0; $i < 6; $i++)
						<li class="list-group-item d-flex justify-content-between align-items-center">
						    Cras justo odiolkja
						    <span class="badge badge-primary badge-pill">14 kcal</span>
						  </li>
					@endfor
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
