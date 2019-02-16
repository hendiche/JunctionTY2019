<div id="search-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
        	{!! Form::open(['url' => '', 'id' => 'reset_confirmation']) !!}
        	<div class="modal-header">
        		<h4 class="modal-title text-center" id="custom-width-modalLabel">Search Food</h4>
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
            </div>
            <div class="modal-body">
            	<div class="form-group">
	            	<label>Allergens</label>
	            	{!! Form::select('size', [], null, ['placeholder' => 'Select a Allergen', 'class' => 'form-control']) !!}
            	</div>
            	<div class="form-group">
	            	<label>Type the name of food that you want to know about</label>
	            	{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'calamary', 'id' => 'food_title']) !!}
            	</div>
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-danger waves-effect remove-data-from-delete-form" data-dismiss="modal">Cancel</button>
            	<button type="submit" class="btn btn-primary waves-effect remove-data-from-delete-form">Search</button>
            </div>
        	{!! Form::close() !!}
        </div>
    </div>
</div>
