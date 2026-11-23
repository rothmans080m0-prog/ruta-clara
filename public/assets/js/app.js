(function () {
  'use strict';

  /* Menú móvil */
  var toggle = document.querySelector('.nav-toggle');
  var nav = document.getElementById('nav-principal');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  /* Consentimiento de cookies + carga condicional de Google Analytics 4 */
  var KEY = 'rc_consent';
  var banner = document.getElementById('cookie-banner');
  var gaId = document.body.getAttribute('data-ga') || '';

  function getConsent() { try { return localStorage.getItem(KEY); } catch (e) { return null; } }
  function setConsent(v) { try { localStorage.setItem(KEY, v); } catch (e) {} }

  function loadGA() {
    if (!gaId || !/^G-[A-Z0-9]+$/.test(gaId) || window.__gaLoaded) return;
    window.__gaLoaded = true;
    window.dataLayer = window.dataLayer || [];
    window.gtag = function () { window.dataLayer.push(arguments); };
    window.gtag('js', new Date());
    window.gtag('config', gaId, { anonymize_ip: true, allow_google_signals: false, allow_ad_personalization_signals: false });
    var s = document.createElement('script');
    s.async = true;
    s.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(gaId);
    document.head.appendChild(s);
  }

  function track(name, params) { if (window.gtag && getConsent() === 'all') { window.gtag('event', name, params || {}); } }

  var c = getConsent();
  if (c === 'all') { loadGA(); }
  if (!c && banner) { banner.hidden = false; }

  document.addEventListener('click', function (ev) {
    var t = ev.target.closest('[data-consent]');
    if (t) {
      var v = t.getAttribute('data-consent');
      setConsent(v);
      if (banner) banner.hidden = true;
      if (v === 'all') loadGA();
      return;
    }
    if (ev.target.closest('[data-cookie-settings]') && banner) { banner.hidden = false; return; }

    /* Medición de clics en enlaces a fuentes oficiales (solo con consentimiento; sin datos personales) */
    var a = ev.target.closest('a[href^="http"]');
    if (a && a.hostname !== location.hostname) {
      track('click_fuente_oficial', { destino: a.hostname });
    }
  });

  /* Calculadora de tarifas de referencia */
  var dataEl = document.getElementById('tarifas-data');
  if (dataEl) {
    var data = JSON.parse(dataEl.textContent);
    var g = document.getElementById('t-grupo');
    var ct = document.getElementById('t-cat');
    var out = document.getElementById('t-valor');
    var fmt = new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', maximumFractionDigits: 0 });
    data.forEach(function (x, i) { var o = document.createElement('option'); o.value = i; o.textContent = x.g; g.appendChild(o); });
    function fillCats() {
      ct.innerHTML = '';
      data[g.value].f.forEach(function (r, i) { var o = document.createElement('option'); o.value = i; o.textContent = r.d; ct.appendChild(o); });
      show();
    }
    function show() { out.textContent = fmt.format(data[g.value].f[ct.value].v); }
    g.addEventListener('change', fillCats);
    ct.addEventListener('change', function () { show(); track('uso_herramienta_tarifas'); });
    fillCats();
  }

  /* Aparición discreta de bloques al hacer scroll */
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    var els = document.querySelectorAll('.card, .sources-box, .faq');
    els.forEach(function (el) { el.classList.add('reveal'); });
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) { if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); } });
    }, { rootMargin: '0px 0px -8% 0px' });
    els.forEach(function (el) { io.observe(el); });
  }
})();
