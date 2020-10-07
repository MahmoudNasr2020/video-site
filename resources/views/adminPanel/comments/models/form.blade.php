


<div class="card card-profile">
    <div class="card-avatar">
      <a href="#pablo">
        <img class="img" src="" />
      </a>
    </div>
    <div class="card-body">
      <h4 class="card-category">اضف كومنت للفيديو</h4>
      <form id='forms-add'>
        @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
              <label> </label>
            <input type="text" class="form-control" id="comment" name="comment" value="" placeholder="" >
            <div id="comment_error"></div>
          </div>
        </div>
      <input type="hidden" name="type_comment" id='type_comment' value="">
      <input type="hidden" name="id_comment" id='id_comment' value="{{ $data !=='' ? $data->id:'' }}">
      <button type="submit" class="btn btn-primary pull-right">Add Comment</button>
      <div class="clearfix"></div>
    </form>

    </div>
  </div>
