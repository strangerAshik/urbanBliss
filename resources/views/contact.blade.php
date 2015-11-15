@section('contact')
  <div id="contact" class="section-content">
 
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Contact Us</h2>
                        </div> <!-- /.section-title -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
         <div class="row contact-form">
                    <div class="col-md-4">
                        <label for="name-id" class="required">Name:</label>
                        <input name="name-id" type="text" id="name-id" maxlength="40">
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <label for="email-id" class="required">Email:</label>
                        <input name="email-id" type="text" id="email-id" maxlength="40">
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <label for="subject-id">Subject:</label>
                        <input name="subject-id" type="text" id="subject-id" maxlength="60">
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-12">
                        <label for="message-id" class="required">Message:</label>
                        <textarea name="message-id" id="message-id" rows="6"></textarea>
                    </div> <!-- /.col-md-12 -->
                    <div class="col-md-12">
                        <div class="submit-btn">
                            <a href="#" class="largeButton contactBgColor">Send Message</a>
                        </div> <!-- /.submit-btn -->
                    </div> <!-- /.col-md-12 -->
                    </div><br>
                    <div class="row">
                    <div class="col-md-9">
                        <div class="map-holder">
                            <div class="google-map-canvas" id="map-canvas">
                            </div>
                        </div> <!-- /.map-holder -->
                    </div> <!-- /.col-md-12 -->
          
                    <div class="col-md-3">
                       <address>
                          <strong>Uraban Bliss, Bangladesh</strong><br>
                          1355 Market Street, Suite 900<br>
                          DOHS,Baridhara<br>
                          Dhaka,Bangladesh<br>
                          <abbr title="Phone">Phone:</abbr> (+8801) 722240864
                          
                        </address>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
           
               
            </div> <!-- /#contact -->
@stop