<div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
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

          <form id='forms-user'>
              @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter name">
                  <div id="name_error"></div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">

                  <input type="text" class="form-control" id="meta_key" name="meta_key" value=""  placeholder="Enter meta key">
                  <div id="meta_key_error"></div>
                </div>
              </div>

                <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" name="meta_desc" id='meta_desc' placeholder="Enter meta description"></textarea>
                  <div id="meta_desc_error"></div>
                </div>
              </div>
            </div>
            <input type="hidden" name="type" id='type' value="">
            <input type="hidden" name="id" id='id' value="">
            <button type="submit" class="btn btn-primary pull-right">Add</button>
            <div class="clearfix"></div>
          </form>

            </div>
          </div>

    </div>
    <!--/.Content-->
  </div>
</div>


