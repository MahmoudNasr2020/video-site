
<form style="direction: rtl" id="formeditCommment">
    @csrf
    <div class="form-group">
        <label style="text-align: right;float:right">ادخل التعليق</label>
    <textarea type="text" name="commentUser" id="commentUser" placeholder="" class="form-control" style="text-align:right"></textarea>
    <div id="commentUser_error"></div>
    </div>
    <input type="hidden" id="idComment" name="idComment" value=''>
    <input type="hidden" id="idvideo" name="idvideo" value='{{ $video->id }}'>
    <button class="btn btn-success btn-round" type="submit"> تعديل</button>
</form>
