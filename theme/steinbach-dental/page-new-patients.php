<?php /* Template Name: New Patients */ get_header(); ?>
<section class="page-head with-img">
  <div class="wrap grid">
    <div>
      <h1>New to town? You have a dentist now.</h1>
      <p class="lead">Here's how the first visit goes, what to bring, and what it costs before you commit.</p>
      <div class="cta">
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( home_url( '/book/' ) ); ?>">Book online</a>
        <a class="btn btn-ghost btn-lg" href="tel:+12043266494">Call (204) 326-6494</a>
      </div>
    </div>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/reception.jpg" alt="The front desk at Steinbach Dental Clinic">
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>Your first visit</h2>
    <div class="steps">
      <div class="step reveal" x-data x-intersect.once="$el.classList.add('in')"><h3>Book online or call</h3><p>Pick a day that works, Saturdays included. Tell us who's coming and what's bothering you, if anything.</p></div>
      <div class="step reveal" x-data x-intersect.once="$el.classList.add('in')"><h3>A proper first look</h3><p>Digital x-rays, a full exam, and a cleaning. We'll show you what we see on the screen as we go.</p></div>
      <div class="step reveal" x-data x-intersect.once="$el.classList.add('in')"><h3>A plan you understand</h3><p>What needs doing now, what can wait, and what it costs before you commit to anything.</p></div>
    </div>
    <div class="callout olive reveal" x-data x-intersect.once="$el.classList.add('in')" style="margin-top:2rem">
      <b>What to bring:</b> your insurance card or plan details, a list of any medications you're on, and any recent x-rays if you have them.
    </div>
  </div>
</section>

<section class="section alt" id="fees">
  <div class="wrap cols">
    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <h2>No surprises on the bill</h2>
      <div class="prose">
        <p>Our fees sit at or below the Manitoba Dental Association fee guide, and they don't change based on whether you're insured. We won't recommend a procedure we don't think you need, and a second opinion is always yours to ask for.</p>
        <p>Payment is expected at the time of service. We accept cash, personal cheque, debit, and major credit cards.</p>
      </div>
    </div>
    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <h3>Insurance</h3>
      <p>We accept most Canadian dental insurance programs, and our staff will prepare the forms for you. You're responsible for knowing what your own plan covers.</p>
      <h3>Canadian Dental Care Plan</h3>
      <p>If you are covered under the Canadian Dental Care Plan, ask us at the desk and we will walk you through what it covers.</p>
    </div>
  </div>
</section>

<section class="section" id="nervous">
  <div class="wrap split">
    <div class="sticky reveal" x-data x-intersect.once="$el.classList.add('in')">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dr-eregie.jpg" alt="Dr. Uyiosa Eregie">
    </div>
    <div>
      <h2>It's been a while? That's fine.</h2>
      <div class="rows">
        <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
          <h3>Tell us you're nervous</h3>
          <p>Say it at booking or the moment you sit down. It changes how we treat you, not whether we treat you.</p>
        </div>
        <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
          <h3>We explain before we do</h3>
          <p>You'll know what's happening before it happens. One patient put it simply: "Always a positive experience. Great care. My fears have gone."</p>
        </div>
        <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
          <h3>You can stop any time</h3>
          <p>A raised hand pauses anything. There's no penalty for needing a break.</p>
        </div>
        <div class="row reveal" x-data x-intersect.once="$el.classList.add('in')">
          <h3>Nobody asks why it's been a while</h3>
          <p>Years away, a bad past experience, no insurance until now: none of it needs explaining before we get started.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section alt" id="kids">
  <div class="wrap cols">
    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <h2>A child's first visit</h2>
      <p>We keep it short and calm, usually over before they've had time to worry. Sealants and fluoride to protect new teeth, and we watch how the jaw is growing so we catch early orthodontic issues while they're still easy to fix.</p>
    </div>
    <div class="reveal" x-data x-intersect.once="$el.classList.add('in')">
      <h3>Languages</h3>
      <p>English and French are spoken here, plus conversational Spanish (Dr. Catherine Carroll). Our team includes dentists who trained in Manitoba, Saskatchewan, California, and Nigeria.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>Questions new patients ask</h2>
    <div class="faq" style="margin-top:1.5rem">
      <details>
        <summary>Are you taking new patients?</summary>
        <div class="a"><p>Yes. Steinbach and the surrounding area keep growing, and we're set up to take on new families.</p></div>
      </details>
      <details>
        <summary>Do you see the whole family?</summary>
        <div class="a"><p>Yes, from a child's first visit through braces, implants, and dentures. Eight dentists means most of what a family needs stays under one roof.</p></div>
      </details>
      <details>
        <summary>How do I book?</summary>
        <div class="a"><p>Book online or call (204) 326-6494. Let us know if anything is bothering you now so we can plan the visit around it.</p></div>
      </details>
      <details>
        <summary>What are your hours?</summary>
        <div class="a"><p>Monday to Friday, 8:00 to 5:00. Saturday, 8:00 to 4:00. Closed Sunday.</p></div>
      </details>
      <details>
        <summary>How is my information handled?</summary>
        <div class="a"><p>We use your details to book, confirm, and carry out your care and to file insurance claims. The full policy is at <a href="https://steinbachdentalclinic.com/privacy-policy/">steinbachdentalclinic.com/privacy-policy</a>.</p></div>
      </details>
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
