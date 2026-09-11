<?php /* Template Name: About */ get_header(); ?>
<section class="page-head with-img">
  <div class="wrap grid">
    <div>
      <h1>Seventy-five years in Steinbach.</h1>
      <p class="lead">On this Main Street corner since at least 1972, through a fire and a lot of first visits.</p>
    </div>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exterior-1972.jpg" alt="Steinbach Dental Clinic at 462 Main Street in 1972">
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>One corner, since at least 1972</h2>
    <p class="lead">The clinic your parents went to, rebuilt for your kids. Same corner the whole way through.</p>
    <div class="timeline">
      <div class="tl reveal" x-data x-intersect.once="$el.classList.add('in')"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exterior-1972.jpg" alt="Steinbach Dental Clinic in 1972" width="1200" height="900"><b>1972</b><p>The clinic at 462 Main Street in 1972, the same address as today.</p></div>
      <div class="tl reveal" x-data x-intersect.once="$el.classList.add('in')"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exterior-2012.jpg" alt="Steinbach Dental Clinic in 2012" width="1200" height="900"><b>2012</b><p>The clinic in 2012, a decade before the fire.</p></div>
      <div class="tl reveal" x-data x-intersect.once="$el.classList.add('in')"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exterior-2026.jpg" alt="Steinbach Dental Clinic today" width="1200" height="900"><b>Today</b><p>Rebuilt after the 2022 fire with clean-air exchange and 3D imaging. Eight dentists, one file, one address.</p></div>
    </div>
  </div>
</section>

<section class="section alt">
  <div class="wrap cols">
    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <h2>The fire</h2>
      <p>Someone set a fire at the rear of the building early on Sunday, April 3, 2022. The fire department was called before 8am. Nobody was hurt.</p>
      <p>Dr. Kevin Friesen, that morning: "I am devastated, our staff is devastated and right now, our priority, we are thinking about the patients, especially ones in active treatment ..."</p>
      <p>The clinic rebuilt on the same corner. Same address, same commitment to the patients mid-treatment when it happened.</p>
    </div>
    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <div class="callout">
        <h3>What the rebuild added</h3>
        <p>Medical-grade clean-air exchange and sub-micron water filtration throughout the building. Treatment rooms designed around the equipment instead of retrofitted for it. 3D imaging on site for implants, wisdom teeth, and root canals.</p>
      </div>
      <p class="small muted" style="margin-top:1rem">Dr. Kevin Friesen, to SteinbachOnline, April 2022.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>What we believe</h2>
    <div class="rows">
      <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>Fees people can afford</h3>
        <p>"We want to make sure fees are low enough so that dental treatment is accessible to the population," says Dr. Friesen. Our fees sit at or below the Manitoba fee guide, insured or not, and a second opinion is always yours to ask for.</p>
      </div>
      <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>Prevention over repair</h3>
        <p>Cleanings, education, and catching small things early. We'd rather see you twice a year than once in an emergency.</p>
      </div>
      <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>Keep learning</h3>
        <p>Continuing education, mentoring new dentists as they join the practice, and time given to Manitoba Dental Association committee work.</p>
      </div>
      <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>Be here on Saturday</h3>
        <p>Weekdays don't work for every family. We're open Saturdays for the things that can't wait until Monday.</p>
      </div>
    </div>
  </div>
</section>

<section class="section alt">
  <div class="wrap cols">
    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <h2>Part of the town</h2>
      <p>The clinic has been a Pistons season-ticket holder for three seasons, tickets shared with staff and the community, not locked in a drawer. "It's a good idea, no reason not to," says Dr. Friesen.</p>
    </div>
    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <h2>Eight dentists, one town</h2>
      <p>Some of us grew up here. Dr. Friesen was born and raised in Steinbach. Others moved here to practise: Dr. Hover from Lethbridge, Dr. Pham from Regina, Dr. Eregie from Nigeria. Different roads to the same corner.</p>
      <p class="small muted">Manitoba Dental Association. Canadian Dental Association. International Association for Orthodontics.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="fullbleed reveal" x-data x-intersect.once="$el.classList.add('in')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-2023.jpg" alt="The Steinbach Dental Clinic team in front of the clinic wall">
      <div class="over">
        <h2>The team at 462 Main Street</h2>
        <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/team/' ) ); ?>">Our dentists</a>
      </div>
    </div>
  </div>
</section>

<section class="section alt close-cta">
  <div class="wrap grid">
    <h2>Ready when you are. Saturdays too.</h2>
    <div class="cta" style="display:flex;gap:.9rem;flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="<?php echo esc_url( home_url( '/book/' ) ); ?>">Book online</a>
      <a class="btn btn-ghost btn-lg" href="tel:+12043266494">Call (204) 326-6494</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
