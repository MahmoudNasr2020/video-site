<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">ارسال رساله</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="send_email">
          @csrf
      <div class="modal-body mx-3">

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="email" name="email" class="form-control validate" value="" style="color: black;" placeholder="Enter Your email">
        </div>
        <div id="email_error"></div>

        <div class="md-form">
            <i class="fas fa-envelope-open  prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4" name="message" id="message" style="color: black;font-weight: 900;" placeholder="Enter Your message"></textarea>

        </div>
        <div id="message_error"></div>

      </div>
      <input type="hidden" id="id" name="id" value="">
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>

    </form>
    </div>
  </div>
</div>


