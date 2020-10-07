@extends('layouts.app')

@section('style')
    <style>
        #like_button.active
        {
            border: none;
            background: none
        }
    </style>
@endsection
@section('title',  '| '. $video->name )
@php
    $url = getYoutubeId($video->url);
    $month = substr($video->month,0,3);
@endphp
@section('content')

<div class="section section-navigation" id="videos" data-id="{{ $video->id }}" style="background:rgba(0,0,0,.03);direction:rtl">
    <div class="container tim-container">
      <div class="title">
        <h3  style="text-align: right;">{{ $video->muslim->name }} |
            {{ $video->name }}
        </h3>
        <br>
      </div>

    <div class="row" style="margin-right: 0px;">

        @if ($url)
        <div class="col-md-12">
            <iframe width="100%" height="500px"
            src="https://www.youtube.com/embed/{{ $url }}" frameborder="0"  allowfullscreen></iframe><br>

        </div>
        @endif
      </div>
      @php
          $count=0;
          $style='';
      @endphp
      @foreach ($video->likes as $like)
        @php
            $count ++ ;
        @endphp

        @if(Auth::check() && Auth::user()->id === $like->user_id )
            @php
                $style = 'rgb(243, 62, 88)';
            @endphp
        @endif
      @endforeach


      <div  class="row" style="margin-right: 0px;">
        <div class="col-md-12" style="direction: ltr;">
            <p>
                <span style="background:none;border:none;margin-top: 12px;cursor:pointer;margin-right:6px;float:right;color:{{ $style }}"
                id="like_button" data-videoid="{{ $video->id }}">
                    <i class="fa fa-heart" aria-hidden="true" style="font-size: 23px;"></i>
                </span>
                <span data-count={{ $count }} style="float: right; margin: 13px 6px -2px -6px;font-weight: 600;font-size: 13px;" id="count">{{ $count }}</span>
            </p>
        </div>
          <div class="col-md-12" style="direction: ltr;">

                <p  style="text-align: right;color: black; font-size: 23px;margin-top: 3px;">
                  {{ $video->desc }}
                </p>


                <p style="text-align: right;margin-top:7px;"> : نشر بواسطة </p>
                <div style="float: right;margin: -25px 68px  0 0;">

                        <span style="text-align: right;color: black;margin-top: 50px;"> {{ $video->muslim->name }}</span>
                </div>

                <p style="text-align: right;margin-top:7px;">نشر في </p>

                <div style="float: right;margin: -25px 46px  0 0;">
                  <span style="text-align: right;color: black;margin-top: 50px;">{{ $month }}</span>
                  <span style="text-align: right;color: black;margin-top: 50px;">{{ $video->day }}</span>
                  <span style="text-align: right;color: black;margin-top: 50px;"> , {{ $video->year }}</span>
            </div>

                 <p style="text-align: right;margin-top:7px;font-weight: 600;"> : المشاهدات  </p>

                <div style="float: right;margin: -25px 67px 0 0;">
                  <span style="text-align: right;color: black;margin-top: 50px;font-weight: 500;">{{ $video->views }}</span>
            </div>



            <div style="margin-top:-164px;direction:rtl;width: 40%">

                <a href="{{ route('website.muslims', $video->muslim->id) }}">
                    <button type="button" class="btn btn-primary" style="margin-bottom:15px">{{ $video->muslim->name }}</button></a>
                <a href="{{ route('website.category', $video->cat->id) }}">
                        <button type="button" class="btn btn-info"  style="margin-bottom:15px">{{  $video->cat->name }}</button>
                </a>
              @foreach ($video->tags as $tag)
                <a href="{{ route('website.tags',$tag->id) }}">
                    <button type="button" class="btn btn-success"  style="margin-bottom:15px">{{ $tag->name }}</button>
                </a>
              @endforeach

          </div>
          </div>
      </div>
      @include('website.comments.comment')

  </div>
</div>
@endsection
@section('script')
@include('website.video.ajax.like')
@include('website.comments.ajax.ajax')
@endsection
