
  <!-- Full Height Modal Right -->
  <div class="modal fade top" id="fullHeightModalTop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-top" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">ادخال فيديو</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    <form id='forms-user' enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" value="" placeholder="ادخل اسم للفيديو" style="color: black">
                            <div id="name_error"></div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="url" class="form-control" id="url" name="url" value="" placeholder="ادخل لينك للفيديو" style="color: black">
                            <div id="url_error"></div>
                          </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group">
                             <select name="cat" class="browser-default custom-select">
                                <option selected>اختار القسم</option>
                                 @foreach ($cats as $cat)
                                     <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                 @endforeach
                             </select>
                              <div id="cat_error"></div>
                            </div>
                          </div>
                          <hr>
                          <div class="col-md-12">
                            <div class="form-group">
                             <select name="muslims" class="browser-default custom-select">
                                <option selected>اختار الشيخ</option>
                                 @foreach ($muslims as $muslim)
                                     <option value="{{ $muslim->id }}">{{ $muslim->name }}</option>
                                 @endforeach
                             </select>
                              <div id="muslims_error"></div>
                            </div>
                          </div>
                          <hr>

                          <div class="col-md-12">
                            <div class="form-group">
                             <select name="tags[]" class="browser-default custom-select" multiple>
                                <option selected >اختار الموضوع</option>
                                 @foreach ($tags as $tag)
                                     <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                 @endforeach
                             </select>
                              <div id="muslims_error"></div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control rounded-0" id="desc" name="desc" value="" rows="4" placeholder="ادخل وصف للفيديو" style="color: black"></textarea>
                              <div id="desc_error"></div>
                            </div>
                          </div>


                          <div class="col-md-12">
                            <div class="form-group">
                             <select name="status" class="browser-default custom-select">
                                <option selected>اختار حالة الفيديو</option>
                                 <option value="1">معروض</option>
                                 <option value="0">مخفي</option>

                             </select>
                              <div id="cat_error"></div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01" name="image" id="image">
                                      <label class="custom-file-label" for="inputGroupFile01">رفع الصورة</label>
                                    </div>
                                  </div>
                              <div id="image_error"></div>
                            </div>
                          </div>
                        <div class="col-md-12">
                          <div class="form-group">

                            <input type="text" class="form-control" id="meta_key" name="meta_key" value=""  placeholder="Enter meta key" style="color: black">
                            <div id="meta_key_error"></div>
                          </div>
                        </div>

                          <div class="col-md-12">
                          <div class="form-group">
                            <textarea class="form-control" name="meta_desc" id='meta_desc' placeholder="Enter meta description" style="color: black"></textarea>
                            <div id="meta_desc_error"></div>
                          </div>
                        </div>

                      </div>
                      <input type="hidden" name="type" id='type' value="">
                      <button type="submit" class="btn btn-primary pull-right">Add</button>
                      <div class="clearfix"></div>
                    </form>

                </div>
            </div>

        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Full Height Modal Right -->
