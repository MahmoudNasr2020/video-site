
@extends('layouts.app')
@php
    $file = asset('website/frontEnd/assets');
@endphp
@section('content')

  @include('website.home.sider')
  @include('website.home.leatest')
  @include('website.home.number')
  @include('website.home.contact')
@endsection

@section('script')
    @include('website.home.ajax.contact')
@endsection
