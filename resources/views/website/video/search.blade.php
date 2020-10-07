@extends('layouts.app')
@section('title',  '| الفيديوهات')
@section('style')
    <style>
        .loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 90px;
  height: 90px;
  margin: 18px auto;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

    </style>
@endsection
@section('content')
<div class="section section-navigation" style="background:rgba(0,0,0,.03);direction:rtl">
    <div class="container tim-container">
      <div class="title">
        <h3 style="text-align: right;">
             بحثت عن |
            @if (request()->has('search') && request()->get('search') != '')
                {{  request()->get('search') }}
                @php
                    $segment = request()->get('search');
                @endphp
            @endif
        </h3>
        <br <="" div="">
    </div>
    @php
        $last_id = '';
    @endphp
    <div class="row" style="margin-right: 0px;" id="loadDataSearch">
        @if (isset($videos)&&$videos->count() >0)
            @foreach ($videos as $video)
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('website.video',$video->id) }}">
                </a>
                <div class="card" style="width: 20rem;margin-bottom: 70px;">
                <a href="{{ route('website.video',$video->id) }}">
                <img class="card-img-top" src={{ asset("uploads/videos/".$video->image) }} alt="Card image cap">
                </a>
                <div class="card-body"><a href="{{ route('website.video',$video->id) }}">
                <h4 class="card-title" style="text-align: right">{{  $video->name }}</h4>
                    <br>
                </a>
                <a href="{{ route('website.video',$video->id) }}" class="btn btn-primary">مشاهدة الفيديو</a>
                </div>
            </div>
        </div>
             @php
                 $last_id = $video->id;
             @endphp
            @endforeach

            <div class="col-sm-12">
                <button type="button" style="float:right"
                class="btn btn-danger btn-round ml-auto mr-auto"
                 data-search="{{  $segment }}" id="load_more_data_search" data-id="{{ $last_id}}">مشاهده المزيد</button>
            </div>

        @endif



    </div>
    <div class="col-md-12" style="display: none" id="dataMoreSearch">
        <button type="button" style="float:right" class="btn btn-danger btn-round ml-auto mr-auto" >لا توجد فيديوهات اخري</button>
    </div>
  </div>
  <div class="loader" style="display: none"></div>
</div>
@if (isset($videos)&&$videos->count() <= 0)
<div class="section text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto">
          <h2 class="title">لا توجد نتائج</h2>
          <h5 class="description">تعذر الحصول علي نتائج للبيانات المدخله</h5>
          <br>
          <a href="{{ route('/') }}" class="btn btn-danger btn-round">الرئيسية</a>
        </div>
      </div>
      <br>
      <br>

    </div>
  </div>
@endif
@endsection

@section('script')
    @include('website.video.ajax.loadsearch')
@endsection
