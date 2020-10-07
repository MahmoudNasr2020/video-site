@extends('layouts.app')

@section('title',  '| '.$user->name )

@section('content')

    @include('website/profile/include/header')

    @include('website/profile/include/section')

@endsection

@section('script')
    @include('website/profile/ajax/script')
@endsection
