<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Name</label>
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="col-md-3 control-label">Email</label>
                      <div class="col-md-6">
                          <input type="email" id="email" name="email" class="form-control" required>
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="photo" class="col-md-3 control-label">Photo</label>
                      <div class="col-md-6">
                          <input type="file" id="photo" name="photo" class="form-control">
                          <span class="help-block with-errors"></span>
                      </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal" id="modal-exim" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" action="{{ route('import.contact') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title">Import/Export Contact</h3>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="export" class="col-md-3 control-label">Export</label>
                        <div class="col-md-6">
                            <a href="{{ route('export.contact')}}" class="btn btn-success">Export</a>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="file" class="col-md-3 control-label">Import</label>
                        <div class="col-md-6">
                            <input type="file" id="file" name="file" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>