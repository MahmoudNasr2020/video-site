@extends('layouts.app')

@section('title',  '| '.$user->name )

@section('content')

    @include('website/profile/include-view/header')

    @include('website/profile/include-view/section')

@endsection
