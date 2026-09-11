# Steinbach Dental Clinic: WordPress theme

`theme/steinbach-dental/` (zipped as `theme/steinbach-dental.zip`) is a classic WordPress
theme built from the same source as the static export in this folder. It has no build
step for a WordPress user: the compiled `assets/css/site.css` and vendored Alpine.js
files are copied in as-is.

## Install on a basic WordPress site

1. Upload `theme/steinbach-dental.zip` in wp-admin under Appearance -> Themes -> Add New -> Upload Theme, or unzip it into `wp-content/themes/`.
2. Activate the theme.
3. Create eight pages with these slugs and assign each its page template (Appearance -> Themes doesn't do this for you; do it per page in the block editor's Page Attributes panel):
   - `home` (no template needed, `front-page.php` is used automatically once it's set as the front page)
   - `services` -> Services
   - `orthodontics` -> Orthodontics
   - `new-patients` -> New Patients
   - `team` -> Team
   - `about` -> About
   - `emergency` -> Emergency
   - `book` -> Book
4. Settings -> Reading: set "Your homepage displays" to the `home` page.
5. Settings -> Permalinks: set the structure to "Post name" (`/%postname%/`).
6. Appearance -> Menus: optional. If you don't create a "primary" menu, the theme's built-in fallback prints the same six nav links the static site ships.

## WPForms setup (the booking form)

The book page calls `sdc_booking_form()` (in `functions.php`). If the WPForms plugin
is active, it renders `[wpforms id="..."]`; otherwise it falls back to the same static
mock form the static export uses (front-end only, Alpine.js swaps in a "thanks" message,
nothing is actually submitted anywhere).

To wire up a real form:

1. Install and activate WPForms (Lite is enough).
2. Build a form with the fields on the book page (name, phone, email, who the visit is for, new patient, reason, days, time of day, notes).
3. Note the form's ID (shown in the WPForms admin list, or in the shortcode WPForms gives you).
4. Set it as an option: `update_option('sdc_wpforms_id', <id>);` (via WP-CLI, a snippet, or `wp option update sdc_wpforms_id <id>`), or just hardcode it by editing the `get_option('sdc_wpforms_id', 1)` default in `functions.php`.

## Try it in WordPress Playground

Playground boots a full in-browser WordPress from a blueprint, no server needed:

```
https://playground.wordpress.net/?blueprint-url=<raw URL of playground-blueprint.json>
```

`playground-blueprint.json` installs WPForms Lite, installs and activates this theme
from a hosted copy of `theme/steinbach-dental.zip`, creates all eight pages with their
templates, sets the homepage, and sets pretty permalinks. Host the zip and the blueprint
JSON somewhere with a public raw URL (this repo's `playground-blueprint.json` points at
a GitHub raw URL as a placeholder; update it to wherever the zip actually lives before
sharing the Playground link).

## Note

The static export in this folder (`index.html`, `services.html`, etc.) is what the
review URL actually serves. The WordPress theme is a separate, parallel deliverable
for handing the site to a WordPress-hosted client; it is not built by `npm run build`
being reflected live anywhere until someone installs it on a real (or Playground) WP
instance.
