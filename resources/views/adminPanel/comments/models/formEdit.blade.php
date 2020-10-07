<div class="modal fade" id="formEditComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
  <div class="modal-dialog modal-notify modal-warning" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center" style="background:linear-gradient(60deg, #7b1fa2, #913f9e)">
        <h4 class="modal-title white-text w-100 font-weight-bold py-2 h4-subscribe"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <div class="card-header card-header-primary">

      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="card">

    <div class="card-body">

          <form id='forms-edit_comment'>
              @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="commentEdit" name="commentEdit" value="" placeholder="Enter comment">
                  <div id="commentEdit_error"></div>
                </div>
              </div>

            </div>
            <input type="hidden" name="type_commentEdit" id='type_commentEdit' value="">
            <input type="hidden" name="id_commentEdit" id='id_commentEdit' value="">
            <button type="submit" class="btn btn-primary pull-right">Edit</button>
            <div class="clearfix"></div>
          </form>

            </div>
          </div>

    </div>
    <!--/.Content-->
  </div>
</div>


