
<style>

body {
    background:
}

.no-box-shadow {
    box-shadow: none
}

.no-box-shadow:focus {
    box-shadow: none
}

.day {
    font-size: 9px
}

.heart {
    border: 1px soild green !important;
    border-color: green !important;
    border-radius: 22px
}



.comment-text {
    font-size: 12px
}

.delete {
    font-size: 13px;
    cursor: pointer
}
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
@php
    if(Auth::check())
    {
        $src = asset('uploads/videos/'.Auth::user()->image);

    }
    else{
        $src ='https://bashmarkterah.com/images/default/user.jpg';
    }
@endphp
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-12">


                        <div class="d-flex flex-row align-items-start">
                            <img class="rounded-circle" src="{{ $src }}" width="40" style="margin: -5px 0px 0 4px;">

                            <form id="addCommentUser" style="width: 100%;" >
                                @csrf
                                <textarea class="form-control ml-1 shadow-none textarea"
                                placeholder="ادخل تعليقك" style="height: 119px; padding-right: 10px !important;font-weight: 600;" name="addComment" id="addComment"></textarea>
                                <div id="addCommnt_error"></div>
                                <input type="hidden" id="video_id" name="video_id" value="{{ $video->id }}">


                            </div>

                            <div class="mt-2 text-left" style="margin-bottom: 28px;">
                                <button class="btn btn-primary btn-sm shadow-none" type="submit" style="margin-left: 10px;">تعليق</button>
                            </div>
                        </form>




                <div id='comments-ajax'>

            </div>
            <div class="loader" style="display: none"></div>
        </div>
    </div>
</div>
@include('website.comments.models.model')


