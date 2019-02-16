<div id="upload-picture-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST" id="reset_confirmation">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="custom-width-modalLabel">Upload Image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
            </div>
            <div class="modal-body">
              <label>Choose image to upload</label>
              <input type="file" class="form-control-fileupload col-xl-7 col-12" name="file" id="file" required="required" onchange="loadFile(event)">
              <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12"><span class="required"></label>
              <img id="image" width="250px" height="200px"></img>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary waves-effect remove-data-from-delete-form" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">Search</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
  var loadFile = function(event) {
    var image = document.getElementById('image');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>