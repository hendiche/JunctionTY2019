@extends('layouts.app')
@include("modals.upload_modal")
@include("modals.search_modal")

@push('pageStyle')
<style type="text/css">
    .btn.btn-outline-warning {
        color: #FD9941;
        border-color: #FD9941;
        width:110px;
        height: 110px;
        border-radius: 20px;
    }
    .btn.btn-outline-warning > i.fa {
        font-size: 24px;
    }
</style>
@endpush

@section('content')
<div class="container mt-3">
    <div class="row justify-content-md-center">
        <div class="col-xl-7 col-12 d-flex justify-content-around">
            <div>
                <button class="btn btn-outline-warning" id="upload-picture" data-toggle="modal" data-target="#upload-picture-modal" data-model="Add">
                    <i class="fa fa-upload"></i>
                    <div>Upload Image</div>
                </button>
            </div>
            <div>
                <button class="btn btn-outline-warning" id="search-picture" data-toggle="modal" data-target="#search-modal" data-model="Add">
                    <i class="fa fa-search"></i>
                    <div>Search</div>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

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
