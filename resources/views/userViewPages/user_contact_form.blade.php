<div class="row">
    @if (session('locale') == 'fa')
    <form data-parsley-validate method="POST" enctype="multipart/form-data" action="{{ url('user-contact-us') }}">
        {{csrf_field()}}
    <div class="col-md-12" style="text-align: right">
        <div class="keo_contact_form">
           <center><h4>ارسال پیام</h4></center><br>
           <div class="col-md-3">
            <div class="keo_contact_field contact_mrgn_btm">
                <input style="text-align: right" type="text" name="subject" placeholder="موضوع ">
                </div>
           </div>
            <div class="col-md-3">
                <div class="keo_contact_field contact_mrgn_btm">
                    <input style="text-align: right" type="text" name="phone" placeholder=" * تیلفون ">
                </div>
            </div>
           <div class="col-md-3">
            <div class="keo_contact_field contact_mrgn_btm">
                <input style="text-align: right"type="text" name="email" placeholder=" * ایمل آدرس">
            </div>
           </div>
           <div class="col-md-3">
            <div class="keo_contact_field contact_mrgn_btm">
                <input style="text-align: right" type="text" name="name" placeholder=" * اسم ">
            </div>
           </div>
           <div class="col-md-12">
                <div class="keo_contact_field contact_mrgn_btm">
                    <textarea style="text-align: right"placeholder="پیام " name="user_message"></textarea>
                </div>
           </div>
            <div class="keo_contact_field">
                <input type="submit" name="submit" value="ارسال">
            </div>
        </div>
    </div>
    </form>
    @else
    <div class="col-md-12">
        
        <form data-parsley-validate method="POST" enctype="multipart/form-data" action="{{ url('user-contact-us') }}">
            {{csrf_field()}}
        <div class="keo_contact_form">
             <center>  <h4>Sag etwas</h4></center>
           <div class="col-md-3">
            <div class="keo_contact_field contact_mrgn_btm ">
                <input type="text" name="name" placeholder="Dein Name *">
            </div>
           </div>
           <div class="col-md-3">
            <div class="keo_contact_field contact_mrgn_btm">
                <input type="text" name="email" placeholder="Deine E-Mail *">
            </div>
           </div>
          <div class="col-md-3">
            <div class="keo_contact_field contact_mrgn_btm">
                <input type="text" name="phone" placeholder="Deine phone *">
            </div>
          </div>
           <div class="col-md-3">
            <div class="keo_contact_field contact_mrgn_btm">
                <input type="text" name="subject" placeholder="Deine subject *">
            </div>
           </div>
           <div class="col-md-12">
            <div class="keo_contact_field contact_mrgn_btm">
                <textarea name="user_message" placeholder="Deine Nachricht"></textarea>
            </div>
           </div>
            <div class="keo_contact_field">
                <input type="submit" name="submit" value="Senden Sie uns jetzt">
            </div>
        </div>
    </form>
    </div>

    @endif
  
</div>