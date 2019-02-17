<div id="upload-picture-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['url' => route('upload'), 'enctype' => 'multipart/form-data']) !!}
            <div class="modal-header">
                <h4 class="modal-title text-center" id="custom-width-modalLabel">Upload Image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label">Choose file: 
                            <span id="file-name"></span>
                        </label>
                        {!! Form::file('input_img', ['class' => 'custom-file-input', 'onchange' => 'loadFile(event)']) !!}
                    </div>
                </div>
                <div class="item form-group">
                    <img id="image" height="200px"></img>
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
<script type="text/javascript">
  var loadFile = function(event) {
    var image = document.getElementById('image');
    var file = event.target.files[0];

    image.src = URL.createObjectURL(file);
    document.getElementById('file-name').innerHTML = file.name;
  };
</script>