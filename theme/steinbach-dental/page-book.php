<?php /* Template Name: Book */ get_header(); ?>
<section class="page-head">
  <div class="wrap">
    <h1>Book a visit.</h1>
    <p class="lead">Pick who's coming and when suits you. We'll call or text to confirm your time.</p>
    <div class="notice">
      <p>In pain right now? Don't fill this in, call <a href="tel:+12043266494">(204) 326-6494</a> and we'll do everything we can to see you today.</p>
    </div>
  </div>
</section>

<section class="section tight">
  <div class="wrap cols" x-data="{submitted:false, firstName:'there'}">
    <?php sdc_booking_form(); ?>

    <div id="book-ok" class="notice" x-ref="bookOk" x-show="submitted">
      <h3>Thanks, <span data-name x-text="firstName">there</span>. We've got it.</h3>
      <p>Someone from the desk will call or text to confirm your time. If it's urgent, call <a href="tel:+12043266494">(204) 326-6494</a>.</p>
    </div>

    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <h3>Prefer to call?</h3>
      <p><a class="big-phone" href="tel:+12043266494">(204) 326-6494</a></p>

      <h3>Hours</h3>
      <ul>
        <li>Mon to Fri 8:00 to 5:00</li>
        <li>Saturday 8:00 to 4:00</li>
        <li>Sunday closed</li>
      </ul>

      <h3>Where</h3>
      <p>462 Main Street, Steinbach, MB R5G 1Z5</p>
      <p><a class="link-arrow" href="https://maps.google.com/?q=462+Main+Street+Steinbach+MB">Directions</a></p>

      <div class="callout olive" style="margin-top:1.5rem">
        <p>New here? Read what the first visit looks like. <a class="link-arrow" href="<?php echo esc_url( home_url( '/new-patients/' ) ); ?>">See what to expect</a></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
