@extends('layouts.app')

@section('title',  '| '. $muslim->name )

@section('content')


<div class="section section-navigation" style="background:rgba(0,0,0,.03);direction:rtl">
    <div class="container tim-container">
      <div class="title">
        <h3  style="text-align: right;">المراجعين |
            {{ $muslim->name }}
        </h3>
        <br
      </div>
    </div>
    <div class="row" style="margin-right: 0px;">
        @foreach ($VideosAll as $VideoAll)
        <a href="{{ route('website.video',$VideoAll->id) }}">
            <div class="col-lg-4 col-md-6">
                <div class="card" style="width: 20rem;margin-bottom: 70px;">
                    <img class="card-img-top" src="{{ asset('uploads/videos/'.$VideoAll->image) }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title" style="text-align: right">{{ $VideoAll->name }}</h4>
                        <br>
                    <a href="{{ route('website.video',$VideoAll->id) }}" class="btn btn-primary">مشاهدة الفيديو</a>
                    </div>
                </div>
            </div>
        </a>
        @endforeach

    </div>
  </div>
</div>

@endsection
