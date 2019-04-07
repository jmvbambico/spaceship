<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
?><section id="contact" class="home-section text-center">
  <div class="heading-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
            <div class="section-heading">
              <h2>Apply for Eligibility</h2>
              <i class="fa fa-2x fa-angle-down"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-lg-offset-5">
        <hr class="marginbot-50">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="boxed-grey">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form id="contact-form" action="" method="post" role="form" class="contactForm" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <div class="form-group">
                    <input type="text" class="form-control" name="age" id="age" placeholder="Your Age" data-rule="required" data-msg="Please enter your age" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender" id="gender" data-rule="required" data-msg="Please select your gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" id="description" rows="5" data-rule="required" data-msg="Please tell us more about yourself" placeholder="Please tell us more about yourself"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label for="photo">Photo</label>
                  <input type="file" name="photo" id="fileupload" data-rule="required" data-msg="Please enter your age" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="widget-contact">
          <h5>Main Office</h5>
          <address>
            <strong>Vader Travel &amp; Tours</strong><br>
            R2D2 Millenium Falcon Hyperdrive, Mos Eisley<br>
            Tatooine, Outer Rim THX 1138<br>
            <abbr title="Phone">P:</abbr> (1977) 1980-1983
          </address>
          <address>
            <strong>Email</strong><br>
            <a href="mailto:#">come.to@darkside.com</a>
          </address>
          <address>
            <strong>We're on social networks</strong><br>
            <ul class="company-social">
              <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
              <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </address>
        </div>
      </div>
    </div>
  </div>
</section>