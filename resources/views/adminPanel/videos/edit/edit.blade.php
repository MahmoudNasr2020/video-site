@extends('adminPanel.layouts.app')
@section('title')
    Edit Video
@endsection
@php
    $nav_title='Edit Video';


@endphp
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.3/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('website\admin\assets\css\datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website\admin\assets\css\import.css') }}">

@endsection
@section('content')

      <div class="row">
        <div class="col-md-8">

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit video</h4>
              <p class="card-category">edit This Video</p>
            </div>
            <div class="card-body">
                <form id='forms-user'>
                    @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" value="{{  $data !=='' ? $data->name:'' }}" placeholder="ادخل اسم للفيديو" >
                        <div id="name_error"></div>
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">

                          <input type="text" class="form-control" id="meta_key" name="meta_key" value="{{  $data !=='' ? $data->meta_key:'' }}"  placeholder="Enter meta key" >
                          <div id="meta_key_error"></div>
                        </div>
                      </div>




                      <hr>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="url" class="form-control" id="url" name="url" value="{{  $data !=='' ? $data->url:'' }}" placeholder="ادخل لينك للفيديو" >
                          <div id="url_error"></div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                         <select name="muslim_id" class="browser-default custom-select">
                            <option value='' >اختار الشيخ</option>
                             @foreach ($muslims as $muslim)
                                 <option value="{{ $muslim->id }}"
                                    @if ($data->muslim->id == $muslim->id)
                                    selected
                                @else
                                ''
                            @endif
                                    >{{ $muslim->name }}</option>
                             @endforeach
                         </select>
                          <div id="muslim_id_error"></div>
                        </div>
                      </div>
                      <hr>

                      <div class="col-md-12">
                        <div class="form-group">
                         <select name="tags[]" class="browser-default custom-select" multiple>
                            <option>اختر الموضوع</option>
                             @foreach ($tags as $tag)
                                 <option value="{{ $tag->id }}" {{ in_array($tag->id,$selectTags) ?'selected':'' }}>{{ $tag->name }}</option>
                             @endforeach
                         </select>
                          <div id="tags_error"></div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control rounded-0" id="desc" name="desc" value="" rows="5" placeholder="ادخل وصف للفيديو" >{{  $data !=='' ? $data->desc:'' }}</textarea>
                          <div id="desc_error"></div>
                        </div>
                      </div>

                      <div class="col-md-12">
                      <div class="form-group">
                        <select name="cat_id" class="browser-default custom-select">
                           <option value='' >اختار القسم</option>
                            @foreach ($cats as $cat)
                                <option value="{{ $cat->id }}"

                                    @if ($data->cat->id == $cat->id)
                                        selected
                                    @else
                                    ''
                                @endif>
                                {{ $cat->name }}</option>
                            @endforeach
                        </select>
                         <div id="cat_id_error"></div>
                       </div>
                     </div>

                     <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01" name="image" id="image">
                                  <label class="custom-file-label" for="inputGroupFile01">رفع الصورة</label>
                                </div>
                              </div>
                          <div id="image_error"></div>
                        </div>
                      </div>

                      <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" name="meta_desc" id='meta_desc' placeholder="Enter meta description" >{{  $data !=='' ? $data->meta_desc:'' }}</textarea>
                        <div id="meta_desc_error"></div>
                      </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                         <select name="status" class="browser-default custom-select">
                            <option >اختار حالة الفيديو</option>
                            @if ($data->status == 'publish')
                            <option value="1" selected>معروض</option>
                            <option value="0">مخفي</option>
                            @else
                                <option value="0" selected>مخفي</option>
                                <option value="1">معروض</option>
                            @endif


                         </select>
                          <div id="cat_error"></div>
                        </div>
                      </div>

                  </div>
                  <input type="hidden" name="type" id='type' value="">
                  <input type="hidden" name="id" id='id' value="{{ $data !=='' ? $data->id:'' }}">
                  <button type="submit" class="btn btn-primary pull-right">Edit</button>
                  <div class="clearfix"></div>
                </form>
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-body">
                @php
                    $url = getYoutubeId($data->url);

                @endphp
                @if ($url)
                    <iframe width="260" height="315" src="https://www.youtube.com/embed/{{ $url }}" frameborder="0"  allowfullscreen></iframe>
                @endif

            </div>
          </div>

          <div class="card card-profile">
            <div class="card-avatar">
              <a href="#pablo">
                <img class="img" src="" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category">picture</h6>
              <img src="{{asset('uploads/videos/'.$data->image)}}" id='image_get' style="width:150px">
            </div>
          </div>

          @include('adminPanel.comments.models.form')
        </div>

        </div>

        @include('adminPanel.comments.comment')

        @include('adminPanel.comments.models.formEdit')

@endsection
@section('script')

<script src='{{ asset('website\admin\assets\js\datatables.min.js') }}'></script>
<script src='https://cdn.datatables.net/buttons/1.6.3/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.6.3/js/buttons.bootstrap4.min.js'></script>
<script src='{{ asset('vendor\datatables\buttons.server-side.js') }}'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

{!! $dataTable->scripts() !!}

@include('adminPanel.videos.ajaxaction.update')


@include('adminPanel.comments.ajaxaction.script')


@endsection
