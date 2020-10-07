@extends('layouts.app')
@section('title',  '| الفيديوهات')
@section('content')
<div class="section section-navigation" style="background:rgba(0,0,0,.03);direction:rtl">
    <div class="container tim-container">
      <div class="title">
        <h3 style="text-align: right;">الفيديوهات

        </h3>
        <br <="" div="">
    </div>

    <div class="row" style="margin-right: 0px;" id="loadData">




    </div>
    <div class="col-md-12" style="display: none" id="dataMore">
        <button type="button" style="float:right" class="btn btn-danger btn-round ml-auto mr-auto" >لا توجد فيديوهات اخري</button>
    </div>
  </div>
</div>
@endsection
@section('script')
    @include('website.video.ajax.loadData')
@endsection
