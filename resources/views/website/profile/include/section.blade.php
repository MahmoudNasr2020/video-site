<div class="section profile-content">
    <div class="container">
      <div class="owner">
        <div class="avatar">
          <img src="{{ asset('uploads/videos/'.$user->image) }}" alt="Circle Image" class="img-circle img-no-padding img-responsive" id="img_user">
        </div>
        <div class="name">
          <h4 class="title" id="title">
              {{ Auth::user()->name }}
            <br>
          </h4>
          <h6 class="description" id="description">{{ Auth::user()->bio }}</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">

          <br>
          <btn class="btn btn-outline-default btn-round"  id="btn-setting" data-id="{{ Auth::user()->id }}" ><i class="fa fa-cog"></i> Settings</btn>
        </div>
      </div>
      @include('website/profile/include/information')
      <br>

      <!-- Tab panes -->

    </div>
  </div>
