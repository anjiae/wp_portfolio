<?php get_header(); ?>
<section id="p-contact" class="section">
  <div class="section__bg">
    <div class="section__title">
      <h2 class="title-lg">Let’s Get in Touch</h2>
    </div>
  </div>

  <div class="containerBox">
    <!-- form -->
    <div class="contact__form">
      <h3 class="title-sm"> Need a Quote?</h3>
      <p class="font-sm">
        Use the form below. All fields are required.
      </p>
      <form action="" method="POST" name="mailform">
        <!-- contact form 확인 후 재 복사하기 -->
        <!-- <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="86">
                <input type="hidden" name="_wpcf7_version" value="5.4.1">
                <input type="hidden" name="_wpcf7_locale" value="en_US">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f86-p9-o1">
                <input type="hidden" name="_wpcf7_container_post" value="9">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
              </div> -->
        <p class="field">
          <label for="username" class="font-sm">Full Name</label>
          <input type="text" id="username" name="" value="" class="font-sm" placeholder="Your Name">
        </p>
        <p class="field">
          <label for="userphone" class="font-sm">Phone Number</label>
          <input type="text" id="userphone" name="" value="" class="font-sm" placeholder="Phone Number">
        </p>
        <p class="field">
          <label for="useremail" class="font-sm">Email Address</label>
          <input type="text" id="useremail" name="" value="" class="font-sm" placeholder="Email Address">
        </p>
        <p class="field">
          <label for="project-type" class="font-sm">Project Type</label>
          <select name="" id="project-type" class="font-sm">
            <option value="" readonly class="font-sm">- Select Type -</option>
            <option value="Hompage" class="font-sm">Website</option>
            <option value="Travel" class="font-sm">Travel</option>
            <option value="Partnership" class="font-sm">Partnership</option>
          </select>
        </p>
        <p class="field">
          <label for="project-desc" class="font-sm">Project Description</label>
          <textarea name="" id="project-desc" cols="30" rows="10" placeholder="Project Description" class="font-sm"></textarea>
        </p>
        <p class="field">
          <label for="budget" class="font-sm">Available Budget</label>
          <input type="number" id="budget" placeholder="$0.00" name="" class="font-sm">
        </p>
        <p class="submit">
          <input type="submit" class="btn-primary" value="give me a quote">
          <span class="ajax-loader"></span>
        </p>
        <!-- <div class="wpcf7-response-output" aria-hidden="true"></div> -->
      </form>
    </div>
  </div>
</section>
<?php get_footer(); ?>