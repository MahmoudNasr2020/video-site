<div class="section section-navigation" style="background:rgba(0,0,0,.03);direction:rtl">
    <div class="container tim-container">
      <div class="title">
        <h3  style="text-align: right;">
            اخر الفيديوهات
        </h3>
        <br
      </div>
    </div>
    <div class="row" style="margin-right: 0px;">

        @foreach ($videosWelcome as $video)
        <a href="{{ route('website.video',$video->id) }}">
            <div class="col-lg-4 col-md-6">
                <div class="card" style="width: 20rem;margin-bottom: 70px;">
                    <img class="card-img-top" src="{{ asset('uploads/videos/'.$video->image) }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title" style="text-align: right">{{ $video->name }}</h4>
                        <br>
                    <a href="{{ route('website.video',$video->id) }}" class="btn btn-primary">مشاهدة الفيديو</a>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        <a href="{{ route('showAllVideos') }}" class="btn btn-danger btn-round ml-auto mr-auto"> كل الفيديوهات</a>
    </div>
  </div>
</div>
