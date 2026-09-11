<?php /* Template Name: Emergency */ get_header(); ?>
<section class="page-head">
  <div class="wrap">
    <h1>In pain? Call now. There's usually a chair today.</h1>
    <a class="big-phone" href="tel:+12043266494">(204) 326-6494</a>
    <p class="lead">Open Monday to Friday, 8:00 to 5:00, and Saturday, 8:00 to 4:00. Outside those hours, call anyway and follow the message.</p>
    <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/book/' ) ); ?>">Book a same-day visit online</a>
  </div>
</section>

<section class="section alt">
  <div class="wrap">
    <h2>What counts as an emergency</h2>
    <div class="bento" style="margin-top:2rem">
      <div class="cell tint-rust c-2 reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>A toothache that keeps you up</h3>
        <p>Rinse with warm salt water and take a regular pain reliever. Avoid very hot or cold food.</p>
      </div>
      <div class="cell tint-olive c-2 reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>A cracked or broken tooth</h3>
        <p>Rinse your mouth with warm water and hold a cold compress on your cheek to keep swelling down.</p>
      </div>
      <div class="cell tint-teal c-2 reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>A knocked-out tooth</h3>
        <p>Handle it by the crown, not the root. Keep it in milk or in your mouth beside your cheek, and call right away.</p>
      </div>
      <div class="cell tint-paper c-2 reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>Swelling or an abscess</h3>
        <p>Apply a cold compress and call us. Do not put heat on the area.</p>
      </div>
      <div class="cell tint-paper c-2 reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>A lost crown or filling</h3>
        <p>Keep the piece if you can find it, and avoid chewing on that side until we see you.</p>
      </div>
      <div class="cell tint-rust c-2 reveal" x-data x-intersect.once="$el.classList.add('in')">
        <h3>A broken brace or wire</h3>
        <p>Cover a poking wire with a small piece of orthodontic wax or a cotton ball, and call us.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>What happens when you call</h2>
    <div class="steps">
      <div class="step reveal" x-data x-intersect.once="$el.classList.add('in')"><h3>Tell us what hurts</h3><p>A quick call, no forms. We'll ask what's going on and how long it's been.</p></div>
      <div class="step reveal" x-data x-intersect.once="$el.classList.add('in')"><h3>We find you a chair</h3><p>Eight dentists means there is usually someone free. We will tell you straight if today is not possible.</p></div>
      <div class="step reveal" x-data x-intersect.once="$el.classList.add('in')"><h3>We fix the pain first</h3><p>We deal with what hurts, then plan anything else once you're comfortable.</p></div>
    </div>
    <div class="callout reveal" x-data x-intersect.once="$el.classList.add('in')" style="margin-top:2rem">
      <p>With eight dentists, there is usually someone free the same day. A permanent crown can often be made in that same visit with CEREC.</p>
    </div>
  </div>
</section>

<section class="section alt">
  <div class="wrap">
    <h2>Same day, for real</h2>
    <div class="quotes" style="margin-top:2rem">
      <figure class="quote reveal" x-data x-intersect.once="$el.classList.add('in')">
        <div class="stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p>"By 12 my tooth was out."</p>
        <figcaption><cite><b>Adi B.</b>, Google review</cite></figcaption>
      </figure>
      <figure class="quote reveal" x-data x-intersect.once="$el.classList.add('in')">
        <div class="stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p>"Always a positive experience. Great care. My fears have gone."</p>
        <figcaption><cite><b>Sylvia A.</b>, Google review</cite></figcaption>
      </figure>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>Questions</h2>
    <div class="faq">
      <details class="reveal" x-data x-intersect.once="$el.classList.add('in')">
        <summary>Do I need to be an existing patient</summary>
        <div class="a"><p>No. Call the number above and we'll get you seen.</p></div>
      </details>
      <details class="reveal" x-data x-intersect.once="$el.classList.add('in')">
        <summary>What if it is after hours</summary>
        <div class="a"><p>Call anyway. Our message will tell you what to do next.</p></div>
      </details>
      <details class="reveal" x-data x-intersect.once="$el.classList.add('in')">
        <summary>Will it cost more for an emergency</summary>
        <div class="a"><p>Fees follow the Manitoba fee guide, the same as any visit.</p></div>
      </details>
      <details class="reveal" x-data x-intersect.once="$el.classList.add('in')">
        <summary>Can you see my child today</summary>
        <div class="a"><p>Yes. Call the number above and tell us what's going on.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="section alt close-cta">
  <div class="wrap grid">
    <h2>Don't wait it out.</h2>
    <div class="cta" style="display:flex;gap:.9rem;flex-wrap:wrap">
      <a class="btn btn-primary btn-lg" href="tel:+12043266494">Call (204) 326-6494</a>
      <a class="btn btn-ghost btn-lg" href="<?php echo esc_url( home_url( '/book/' ) ); ?>">Book online</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
