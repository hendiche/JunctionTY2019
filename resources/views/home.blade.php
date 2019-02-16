@extends('layouts.app')
@include("layouts.modals.upload_modal")
@include("layouts.modals.search_modal")
@section('content')
<div class="header">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-xl-7 col-12">
        <center><img src="{{ asset('images/saifood.png') }}" width="100" height="100"></center>
      </div>
    </div>  
    <div class="btn">
      <div class="row">
        <div class="col-6">
          <button class="btn btn-outline-warning" id="upload-picture" data-toggle="modal" data-target="#upload-picture-modal" data-mode="Add">
            <i class="fa fa-upload"></i>
            <div>Upload Image</div>
          </button>
        </div>

        <div class="col-6">
          <button class="btn btn-outline-warning" id="search-picture" data-toggle="modal" data-target="#search-modal" data-mode="Add">
          <i class="fa fa-search"></i>
          <div>Search</div>
        </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('pageStyle')
<style type="text/css">
  .header {
    background-color: #FECB6E;
    height: 100px;
  }
  .btn.btn-outline-warning {
    color: #FD9941; 
    border-color: #FD9941;
    width:110px;
    height: 110px;
    border-radius: 20px;
  }
</style>
@endpush

@push('pageScripts')
  <script type="text/javascript">
    $('#upload-picture').on('click', function() {
      $('#upload-picture-modal').show();
    });

    $('#search-picture').on('click', function() {
      $('#search-modal').show();
    });
  </script>
@endpush
