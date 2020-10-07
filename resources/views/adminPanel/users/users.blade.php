@extends('adminPanel.layouts.app')
@section('title')
    users
@endsection
@php
    $nav_title='Users';
     $activeuser='active';
@endphp
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.3/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('website\admin\assets\css\datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website\admin\assets\css\import.css') }}">

@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
            <h4 class="card-title ">Users</h4>
            <p class="card-category"> Here Showing All Users</p>
            </div>

            <div class="card-body">
            <div class="table-responsive">
                <a href="" class="btn btn-primary btn-round add" style="background-color: #913f9e !important;float:right;border-radius:0">Add user

                    <div class="ripple-container"></div>
                </a>
                {!! $dataTable->table(['class'=>'table']) !!}
            </div>
            </div>
        </div>
        </div>
    </div>
    @include('adminPanel.users.modals.form')
    @include('adminPanel.users.modals.delete')

@endsection
@section('script')
    <script src='{{ asset('website\admin\assets\js\datatables.min.js') }}'></script>
    <script src='https://cdn.datatables.net/buttons/1.6.3/js/dataTables.buttons.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.6.3/js/buttons.bootstrap4.min.js'></script>
    <script src='{{ asset('vendor\datatables\buttons.server-side.js') }}'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

{!! $dataTable->scripts() !!}
@include('adminPanel.users.ajaxaction.script')

@endsection


