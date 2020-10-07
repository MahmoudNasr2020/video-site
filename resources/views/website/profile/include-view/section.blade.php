<div class="section profile-content">
    <div class="container">
      <div class="owner">
        <div class="avatar">
          <img src="{{ asset('uploads/videos/'.$user->image) }}" alt="Circle Image" class="img-circle img-no-padding img-responsive" id="img_user">
        </div>
        <div class="name">
          <h4 class="title" id="title">
            {{ $user->name}}
            <br>
          </h4>
          <h6 class="description" id="description">{{$user->bio }}</h6>
        </div>
      </div>

      <!-- Tab panes -->

    </div>
  </div>
