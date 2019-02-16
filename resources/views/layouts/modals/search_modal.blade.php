<div id="search-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST" id="reset_confirmation">
            <div class="modal-header">
              <h4 class="modal-title text-center" id="custom-width-modalLabel">Search Food</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
            </div>
            <div class="modal-body">
              <label>Allergens</label>
              <select class="form-control">
                <option>Default select</option>
              </select>
              <label>Type the name of food that you want to know about</label>
              <input type="text" class="form-control" id="food_title" placeholder="calamary">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary waves-effect remove-data-from-delete-form" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-warning waves-effect remove-data-from-delete-form">Search</button>
            </div>
            </form>
        </div>
    </div>
</div>
