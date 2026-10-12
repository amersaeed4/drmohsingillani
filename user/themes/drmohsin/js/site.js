(function () {
  'use strict';

  var header = document.getElementById('site-header');
  var toggle = document.getElementById('nav-toggle');
  var menu = document.getElementById('mobile-menu');

  // Shadow under the sticky header once the page scrolls
  function onScroll() {
    if (header) header.classList.toggle('is-scrolled', window.scrollY > 8);
  }
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  // Mobile menu open / close
  function setOpen(open) {
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    if (open) menu.removeAttribute('hidden'); else menu.setAttribute('hidden', '');
    document.documentElement.style.overflow = open ? 'hidden' : '';
  }
  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      setOpen(toggle.getAttribute('aria-expanded') !== 'true');
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
        setOpen(false);
        toggle.focus();
      }
    });
    window.addEventListener('resize', function () {
      if (window.innerWidth > 1180) setOpen(false);
    });
  }

  // Mobile accordion sub-menus
  document.querySelectorAll('.m-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.closest('.m-item');
      var open = !item.classList.contains('open');
      item.classList.toggle('open', open);
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });
})();

// ---------- Site search (live results in the header panel) ----------
(function () {
  'use strict';
  var toggle = document.getElementById('search-toggle');
  var panel = document.getElementById('search-panel');
  if (!toggle || !panel) return;

  var input = panel.querySelector('input[type="search"]');
  var box = document.getElementById('sp-results');
  var endpoint = panel.getAttribute('data-endpoint');
  var timer = null, seq = 0, active = -1;

  function setOpen(open) {
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    if (open) {
      panel.removeAttribute('hidden');
      // close the mobile menu if it is open
      var burger = document.getElementById('nav-toggle');
      if (burger && burger.getAttribute('aria-expanded') === 'true') burger.click();
      setTimeout(function () { input.focus(); input.select(); }, 20);
    } else {
      panel.setAttribute('hidden', '');
    }
  }
  function isOpen() { return !panel.hasAttribute('hidden'); }

  toggle.addEventListener('click', function () { setOpen(!isOpen()); });

  document.addEventListener('keydown', function (e) {
    var tag = (document.activeElement && document.activeElement.tagName) || '';
    var typing = /INPUT|TEXTAREA|SELECT/.test(tag) || (document.activeElement && document.activeElement.isContentEditable);
    if (e.key === '/' && !typing && !e.metaKey && !e.ctrlKey) { e.preventDefault(); setOpen(true); }
    if (e.key === 'Escape' && isOpen()) { setOpen(false); toggle.focus(); }
  });
  document.addEventListener('click', function (e) {
    if (isOpen() && !panel.contains(e.target) && !toggle.contains(e.target)) setOpen(false);
  });

  function render(data, q) {
    active = -1;
    if (!data.results.length) {
      box.innerHTML = '<p class="sp-empty">No pages found for “' + q.replace(/[<>&]/g, '') + '”. Try different words.</p>';
      return;
    }
    var html = data.results.map(function (r) {
      return '<a class="sp-item" href="' + r.url + '">' +
        (r.section ? '<span class="sp-sec">' + r.section + '</span>' : '') +
        '<span class="sp-title">' + r.title_html + '</span>' +
        '<span class="sp-snip">' + r.snippet + '</span></a>';
    }).join('');
    html += '<a class="sp-all" href="' + panel.querySelector('form').getAttribute('action') + '?q=' + encodeURIComponent(q) + '">See all results →</a>';
    box.innerHTML = html;
  }

  function run() {
    var q = input.value.trim();
    if (q.length < 2) { box.innerHTML = ''; return; }
    var mine = ++seq;
    fetch(endpoint + '?q=' + encodeURIComponent(q), { headers: { 'Accept': 'application/json' } })
      .then(function (r) { return r.json(); })
      .then(function (data) { if (mine === seq) render(data, q); })
      .catch(function () { /* the form still works without JS: it submits to /search */ });
  }
  input.addEventListener('input', function () { clearTimeout(timer); timer = setTimeout(run, 180); });

  // Arrow-key navigation through results
  input.addEventListener('keydown', function (e) {
    var items = box.querySelectorAll('.sp-item');
    if (!items.length || (e.key !== 'ArrowDown' && e.key !== 'ArrowUp')) return;
    e.preventDefault();
    active = e.key === 'ArrowDown' ? Math.min(items.length - 1, active + 1) : Math.max(-1, active - 1);
    items.forEach(function (el, i) { el.classList.toggle('is-active', i === active); });
    if (active >= 0) items[active].scrollIntoView({ block: 'nearest' });
  });
  input.form.addEventListener('submit', function (e) {
    var cur = box.querySelector('.sp-item.is-active');
    if (cur) { e.preventDefault(); window.location.href = cur.getAttribute('href'); }
  });
})();
