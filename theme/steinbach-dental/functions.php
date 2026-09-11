<?php
// Steinbach Dental Clinic theme setup.

add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    register_nav_menus( array( 'primary' => __( 'Primary Menu', 'steinbach-dental' ) ) );
} );

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'sdc-site', get_template_directory_uri() . '/assets/css/site.css', array(), '1.0.0' );
    wp_enqueue_script( 'sdc-alpine-intersect', get_template_directory_uri() . '/assets/js/alpine-intersect.min.js', array(), '3.14.9', false );
    wp_enqueue_script( 'sdc-alpine', get_template_directory_uri() . '/assets/js/alpine.min.js', array( 'sdc-alpine-intersect' ), '3.14.9', false );
} );

// Alpine core and the intersect plugin both need `defer`, core loaded after the plugin.
add_filter( 'script_loader_tag', function ( $tag, $handle ) {
    if ( in_array( $handle, array( 'sdc-alpine', 'sdc-alpine-intersect' ), true ) ) {
        return str_replace( ' src', ' defer src', $tag );
    }
    return $tag;
}, 10, 2 );

// Same six links as the static build, marked with the nav's own current-page style.
function sdc_nav_fallback() {
    echo '<nav class="nav" aria-label="Main">';
    printf('<a href="%s"%s>%s</a>', esc_url( home_url( '/services/' ) ), is_page( 'services' ) ? ' aria-current="page"' : '', 'Services');
    printf('<a href="%s"%s>%s</a>', esc_url( home_url( '/orthodontics/' ) ), is_page( 'orthodontics' ) ? ' aria-current="page"' : '', 'Orthodontics');
    printf('<a href="%s"%s>%s</a>', esc_url( home_url( '/new-patients/' ) ), is_page( 'new-patients' ) ? ' aria-current="page"' : '', 'New patients');
    printf('<a href="%s"%s>%s</a>', esc_url( home_url( '/team/' ) ), is_page( 'team' ) ? ' aria-current="page"' : '', 'Our dentists');
    printf('<a href="%s"%s>%s</a>', esc_url( home_url( '/about/' ) ), is_page( 'about' ) ? ' aria-current="page"' : '', 'Our story');
    printf('<a href="%s"%s>%s</a>', esc_url( home_url( '/emergency/' ) ), is_page( 'emergency' ) ? ' aria-current="page"' : '', 'Emergency');
    echo '</nav>';
}

// Real booking form when WPForms is active (set the form id in sdc_wpforms_id),
// otherwise the same static/Alpine mock form the static export ships.
function sdc_booking_form() {
    $form_id = (int) get_option( 'sdc_wpforms_id', 0 );
    if ( $form_id && shortcode_exists( 'wpforms' ) && 'wpforms' === get_post_type( $form_id ) ) {
        echo do_shortcode( '[wpforms id="' . $form_id . '"]' );
        return;
    }
    ?>
<form id="book-form" class="form reveal" x-data x-intersect.once="$el.classList.add('in')" novalidate x-show="!submitted" x-on:submit.prevent="firstName = ($refs.name.value.trim().split(' ')[0]) || 'there'; submitted = true; $nextTick(() => $refs.bookOk.scrollIntoView({behavior:'smooth', block:'center'}))">
      <div class="field">
        <label for="name">Your name</label>
        <input type="text" id="name" name="name" x-ref="name" placeholder="First and last name" required>
      </div>

      <div class="two">
        <div class="field">
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone">
        </div>
        <div class="field">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
          <span class="help">For the confirmation only</span>
        </div>
      </div>

      <div class="field">
        <label>Who is the visit for?</label>
        <div class="chips">
          <label class="chip"><input type="checkbox" name="who" value="Me"><span>Me</span></label>
          <label class="chip"><input type="checkbox" name="who" value="My child"><span>My child</span></label>
          <label class="chip"><input type="checkbox" name="who" value="My partner"><span>My partner</span></label>
          <label class="chip"><input type="checkbox" name="who" value="A parent"><span>A parent</span></label>
          <label class="chip"><input type="checkbox" name="who" value="The whole family"><span>The whole family</span></label>
        </div>
      </div>

      <div class="field">
        <label>New patient?</label>
        <div class="chips">
          <label class="chip"><input type="radio" name="new-patient" value="Yes, first visit"><span>Yes, first visit</span></label>
          <label class="chip"><input type="radio" name="new-patient" value="No, I've been before"><span>No, I've been before</span></label>
        </div>
      </div>

      <div class="field">
        <label for="about">What's it about?</label>
        <select id="about" name="about">
          <option>Checkup and cleaning</option>
          <option>Something hurts</option>
          <option>Braces or aligners consultation</option>
          <option>Implant or denture consultation</option>
          <option>Crown, filling, or a broken tooth</option>
          <option>Kids' first visit</option>
          <option>Not sure yet</option>
        </select>
      </div>

      <div class="field">
        <label>Days that work</label>
        <div class="chips">
          <label class="chip"><input type="checkbox" name="days" value="Mon"><span>Mon</span></label>
          <label class="chip"><input type="checkbox" name="days" value="Tue"><span>Tue</span></label>
          <label class="chip"><input type="checkbox" name="days" value="Wed"><span>Wed</span></label>
          <label class="chip"><input type="checkbox" name="days" value="Thu"><span>Thu</span></label>
          <label class="chip"><input type="checkbox" name="days" value="Fri"><span>Fri</span></label>
          <label class="chip"><input type="checkbox" name="days" value="Sat"><span>Sat</span></label>
        </div>
      </div>

      <div class="field">
        <label>Time of day</label>
        <div class="chips">
          <label class="chip"><input type="radio" name="time-of-day" value="Morning"><span>Morning</span></label>
          <label class="chip"><input type="radio" name="time-of-day" value="Afternoon"><span>Afternoon</span></label>
          <label class="chip"><input type="radio" name="time-of-day" value="Either"><span>Either</span></label>
        </div>
      </div>

      <div class="field">
        <label for="notes">Anything we should know?</label>
        <textarea id="notes" name="notes" rows="4"></textarea>
        <span class="help">Nervous? Insurance questions? Tell us here.</span>
      </div>

      <button class="btn btn-primary btn-lg" type="submit">Request a visit</button>
      <p class="small">No account needed. We only use these details to book and confirm your visit.</p>
    </form>
    <?php
}
