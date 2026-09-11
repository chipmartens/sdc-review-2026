<?php get_header(); ?>
<section class="hero">
  <div class="wrap grid">
    <div>
      <h1>Everything your family's smile needs. Right here on Main Street.</h1>
      <p class="lead">Eight dentists, braces, implants, and same-day crowns under one roof in Steinbach. Open Saturdays.</p>
      <div class="cta">
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( home_url( '/book/' ) ); ?>">Book online</a>
        <a class="btn btn-ghost btn-lg" href="tel:+12043266494">Call (204) 326-6494</a>
      </div>
    </div>
    <div class="ring">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exterior-2026.jpg" alt="Steinbach Dental Clinic at 462 Main Street" width="1200" height="1200">
      <span class="cap">462 Main Street, Steinbach</span>
    </div>
  </div>
</section>

<section class="proof">
  <div class="wrap">
    <div><b>8</b><span>dentists under one roof</span></div>
    <div><b>75+</b><span>years in Steinbach</span></div>
    <div><b>4.5</b><span>stars on 200+ Google reviews</span></div>
    <div><b>Sat</b><span>open 8:00 to 4:00</span></div>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div class="sticky reveal" x-data x-intersect.once="$el.classList.add('in')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/reception.jpg" alt="The front desk at Steinbach Dental Clinic" width="1200" height="1500">
    </div>
    <div>
      <h2>One clinic. Every stage of every smile.</h2>
      <p class="lead">Plenty of families in southeastern Manitoba end up with a dentist in town and a specialist in Winnipeg. You don't have to.</p>
      <div class="rows">
        <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
          <h3>Everything under one roof</h3>
          <p>Braces and aligners, implants, wisdom teeth, dentures, kids' first visits, and a permanent crown in a single appointment. Eight dentists, one file, one address.</p>
          <a class="link-arrow" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">See every service</a>
        </div>
        <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
          <h3>Seen fast when it hurts</h3>
          <p>With eight dentists, there is usually a chair the same day. Open Saturdays for the things that can't wait for Monday.</p>
          <a class="link-arrow" href="<?php echo esc_url( home_url( '/emergency/' ) ); ?>">Emergency care</a>
        </div>
        <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
          <h3>No surprises on the bill</h3>
          <p>Our fees sit at or below the Manitoba Dental Association fee guide, and they're the same whether or not you're insured. We won't recommend a procedure you don't need, and a second opinion is always yours to ask for.</p>
          <a class="link-arrow" href="<?php echo esc_url( home_url( '/new-patients/#fees' ) ); ?>">Fees and insurance</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section alt">
  <div class="wrap">
    <h2>Who are we looking after?</h2>
    <p class="lead">Pick the person. We'll take it from there.</p>
    <div class="bento" style="margin-top:2rem">
      <a class="cell photo c-3 r-2 reveal" x-data x-intersect.once="$el.classList.add('in')" href="<?php echo esc_url( home_url( '/team/' ) ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-2023.jpg" alt="The Steinbach Dental Clinic team in front of the clinic wall">
        <div class="over"><h3>The team at 462 Main Street</h3><p>Eight dentists, one born and raised here, trained in Winnipeg, Saskatoon, California, and Nigeria. English and French spoken, plus conversational Spanish.</p></div>
      </a>
      <a class="cell tint-olive c-3 reveal" x-data x-intersect.once="$el.classList.add('in')" href="<?php echo esc_url( home_url( '/services/#kids' ) ); ?>">
        <h3>A child's first visit</h3>
        <p>Short, calm, and over before they've had time to worry. Sealants, fluoride, and a sticker.</p>
      </a>
      <a class="cell tint-rust c-3 reveal" x-data x-intersect.once="$el.classList.add('in')" href="<?php echo esc_url( home_url( '/orthodontics/' ) ); ?>">
        <h3>A teen who might need braces</h3>
        <p>Braces, Invisalign, SureSmile, and early treatment that can prevent extractions later. No drive to Winnipeg.</p>
      </a>
      <a class="cell tint-teal c-2 reveal" x-data x-intersect.once="$el.classList.add('in')" href="<?php echo esc_url( home_url( '/services/#adults' ) ); ?>">
        <h3>You</h3>
        <p>Cleanings, fillings, a crown in one visit, wisdom teeth, and honest advice.</p>
      </a>
      <a class="cell tint-paper c-2 reveal" x-data x-intersect.once="$el.classList.add('in')" href="<?php echo esc_url( home_url( '/services/#implants' ) ); ?>">
        <h3>A parent who needs dentures or an implant</h3>
        <p>Implants, partial and full dentures, and the surgery to support them, all in-house.</p>
      </a>
      <a class="cell tint-paper c-2 reveal" x-data x-intersect.once="$el.classList.add('in')" href="<?php echo esc_url( home_url( '/emergency/' ) ); ?>">
        <h3>Someone in pain right now</h3>
        <p>Call (204) 326-6494. There's usually a chair today.</p>
      </a>
    </div>
  </div>
</section>

<section class="section dark band">
  <div class="wrap grid">
    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <h2>A permanent crown in one visit.</h2>
      <p class="lead">No temporary crown, no second appointment, no impression tray. We scan your tooth, design the crown, and mill it here while you wait.</p>
      <p style="margin-top:1.75rem"><a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/services/#technology' ) ); ?>">How it works</a></p>
    </div>
    <div class="how reveal" x-data x-intersect.once="$el.classList.add('in')">
      <div><b>Scan</b><p>A small camera maps the tooth in a couple of minutes. No putty, no gagging.</p></div>
      <div><b>Design</b><p>Your dentist shapes the crown on screen to fit your bite exactly.</p></div>
      <div><b>Mill</b><p>A porcelain block is cut to that design here in the clinic while you wait.</p></div>
      <div><b>Fit</b><p>The finished crown is bonded the same day. You leave done.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>Seventy-five years in Steinbach.</h2>
    <p class="lead">The clinic your parents went to, rebuilt for your kids. On this Main Street corner since at least 1972, through a fire and a lot of first visits.</p>
    <div class="timeline">
      <div class="tl reveal" x-data x-intersect.once="$el.classList.add('in')"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exterior-1972.jpg" alt="Steinbach Dental Clinic in 1972" width="1200" height="900"><b>1972</b><p>The clinic at 462 Main Street in 1972.</p></div>
      <div class="tl reveal" x-data x-intersect.once="$el.classList.add('in')"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exterior-2012.jpg" alt="Steinbach Dental Clinic in 2012" width="1200" height="900"><b>2012</b><p>The clinic in 2012.</p></div>
      <div class="tl reveal" x-data x-intersect.once="$el.classList.add('in')"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exterior-2026.jpg" alt="Steinbach Dental Clinic today" width="1200" height="900"><b>Today</b><p>Rebuilt after the 2022 fire. Clean-air exchange, 3D imaging, eight dentists.</p></div>
    </div>
    <p style="margin-top:2rem"><a class="link-arrow" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Read our story</a></p>
  </div>
</section>

<section class="section alt">
  <div class="wrap">
    <h2>What patients say</h2>
    <div class="quotes" style="margin-top:2rem">
      <figure class="quote reveal" x-data x-intersect.once="$el.classList.add('in')">
        <div class="stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p>"Dr Shayne took his time with me because I get super nervous ... by 12 my tooth was out."</p>
        <figcaption><cite><b>Adi B.</b>, Google review</cite></figcaption>
      </figure>
      <figure class="quote reveal" x-data x-intersect.once="$el.classList.add('in')">
        <div class="stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p>"Always a positive experience. Great care. My fears have gone."</p>
        <figcaption><cite><b>Sylvia A.</b>, Google review</cite></figcaption>
      </figure>
      <figure class="quote reveal" x-data x-intersect.once="$el.classList.add('in')">
        <div class="stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p>"Such a friendly, well-educated staff. Don't go anywhere else."</p>
        <figcaption><cite><b>Kimberley F.</b>, Google review</cite></figcaption>
      </figure>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="cols">
      <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h2>New to town? You have a dentist now.</h2>
        <p class="lead">Steinbach grows by hundreds of people every year, and plenty arrive without a dentist. Here is how the first visit goes.</p>
      </div>
      <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h2>It's been a while? That's fine.</h2>
        <p class="lead">Nobody here will ask why. Tell us you're nervous and we'll go at your pace, explain everything, and stop whenever you need.</p>
      </div>
    </div>
    <div class="steps">
      <div class="step reveal" x-data x-intersect.once="$el.classList.add('in')"><h3>Book online or call</h3><p>Pick a day that works. Saturdays included. Tell us who's coming and what's bothering you, if anything.</p></div>
      <div class="step reveal" x-data x-intersect.once="$el.classList.add('in')"><h3>A proper first look</h3><p>Digital x-rays, a full exam, and a cleaning. We'll show you what we see on the screen and answer every question.</p></div>
      <div class="step reveal" x-data x-intersect.once="$el.classList.add('in')"><h3>A plan you understand</h3><p>What needs doing now, what can wait, and what it costs before you commit. Insurance forms handled at the desk.</p></div>
    </div>
    <p style="margin-top:2rem"><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/new-patients/' ) ); ?>">Everything for new patients</a></p>
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
