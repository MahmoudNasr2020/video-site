<div class="row" style="display: none" id="setting">
    <div class="col-md-8 ml-auto mr-auto">
      <h2 class="text-center">بياناتك</h2>
      <form class="contact-form" id="form_user_setting" enctype="multipart/form-data">

        @csrf
        <div class="row">
          <div class="col-md-6">
            <label>Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="nc-icon nc-single-02"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Name" name="name" id="name">
            </div>
            <div id="name_error"></div>
          </div>
          <div class="col-md-6">
            <label>Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="nc-icon nc-email-85"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email" name="email" id="email">
            </div>
            <div id="email_error"></div>
          </div>
        </div>
             <div class="row">
          <div class="col-md-6">
            <label>password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-unlock"></i>
                </span>
              </div>
              <input type="password" class="form-control" placeholder="password" name="password" id="password">
            </div>
            <div id="password_error"></div>
          </div>
          <div class="col-md-6">
            <label>confirm password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-unlock"></i>
                </span>
              </div>
              <input type="password" class="form-control" placeholder="password-confirm" name="password_confirmation" id="password-confirm">
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6">
              <label>Your Image</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-images"></i>
                  </span>
                </div>
                <input type="file" class="form-control" placeholder="image" name="image" id="image">
              </div>
              <div id="image_error"></div>
            </div>

            <div class="col-md-6">
                <label>bio</label>
                  <textarea class="form-control" rows="4" style="font-weight: 600;" placeholder="اكتب نبذه عنك للمستخدمين..."  id="bio" name="bio"></textarea>
              </div>
              <div id="bio_error"></div>
          </div>

          <input type="hidden" name="id" id="id" value="">
        <div class="row">
          <div class="col-md-4 ml-auto mr-auto">
            <button class="btn btn-danger btn-lg btn-fill">تعديل</button>
          </div>
        </div>
      </form>
    </div>
  </div>
