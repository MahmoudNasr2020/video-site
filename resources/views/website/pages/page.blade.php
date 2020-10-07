
@extends('layouts.app')

@section('title',  '| '. $page->name )

@section('content')

<div class="page-header" data-parallax="true"
style="background-image: url({{ asset('website/frontEnd/assets/img/daniel-olahh.jpg') }}); transform: translate3d(0px, 49.3333px, 0px);">

<div class="filter"></div>
    <div class="container">
      <div class="motto text-center">
        <h1>
            {{ $page->name }}

        </h1>
        <h3>قسم مقارنة الاديان</h3>
        <br>

       <a href="{{ route('/') }}"> <button type="button" class="btn btn-outline-neutral btn-round">الرئيسية</button></a>
      </div>
    </div>
  </div>

    <div class="section text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <h2 class="title">{{ $page->name }}</h2>
          <h4 class="description">{{ $page->desc }}</h4>
          <br>
        </div>
      </div>
      <br>
      <br>
    </div>
  </div>
@endsection

