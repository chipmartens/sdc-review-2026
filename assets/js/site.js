// Steinbach Dental Clinic: nav toggle, scroll reveal, mock booking submit. No dependencies.
(function () {
  var btn = document.querySelector('.menu-btn');
  var nav = document.querySelector('.nav');
  if (btn && nav) {
    btn.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
      btn.textContent = open ? 'Close' : 'Menu';
    });
  }

  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { rootMargin: '0px 0px -40px 0px', threshold: 0.05 });
    document.querySelectorAll('.reveal').forEach(function (el) { io.observe(el); });
  } else {
    document.querySelectorAll('.reveal').forEach(function (el) { el.classList.add('in'); });
  }

  // ponytail: demo booking form. Real build wires this to the clinic's scheduler or CRM.
  var form = document.getElementById('book-form');
  if (form) {
    form.addEventListener('submit', function (ev) {
      ev.preventDefault();
      var name = form.querySelector('[name="name"]').value.trim() || 'there';
      form.hidden = true;
      var ok = document.getElementById('book-ok');
      ok.hidden = false;
      ok.querySelector('[data-name]').textContent = name.split(' ')[0];
      ok.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  }
})();
