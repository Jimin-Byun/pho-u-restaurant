    <!-- Contact Section -->
    <div id="contact" class="text-center">
      <div class="container">
        <div class="section-title text-center">
          <h2>Contact Form</h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div id="success"></div>
            <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
          </form>
        </div>
      </div>
    </div>    
    
    <div id="footer">
      <div class="container text-center">
        <div class="col-md-4">
          <h3>Address</h3>
          <div class="contact-item">
            <p>456D Gorge Rd E, </p>
            <p>Victoria, BC V8T 2W4</p>
          </div>
        </div>
        <div class="col-md-4">
          <h3>Opening Hours</h3>
          <div class="contact-item">
            <p>Mon-Sats: 11:00 AM - 09:00 PM</p>
            <p>Suns & Holidays: Closed</p>
          </div>
        </div>
        <div class="col-md-4">
          <h3>Contact Info</h3>
          <div class="contact-item">
            <p>Phone: +1 (778) 433-4646</p>
            <p>Email: phou1711@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="container-fluid text-center copyrights">
        <div class="col-md-8 col-md-offset-2">
          <div class="social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
          <p>&copy; 2020 Pho U. All rights reserved. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>