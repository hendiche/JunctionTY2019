@extends('layouts.app')

@section('content')
<form class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST" action="{{ route('upload') }}">
	@csrf
	
	<input type="file" id="input_img" name="input_img">
	<button id="send" type="submit" class="btn btn-success">Save</button>
</form>
@endsection