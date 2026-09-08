// Flashline EMS — interactions
(function () {
  "use strict";

  // ── Mobile nav toggle ──
  var rail = document.getElementById("rail");
  var toggle = document.getElementById("navToggle");
  var railNav = document.getElementById("railNav");

  toggle.addEventListener("click", function () {
    var open = rail.classList.toggle("open");
    toggle.setAttribute("aria-expanded", open ? "true" : "false");
  });

  railNav.addEventListener("click", function (e) {
    if (e.target.closest("a")) {
      rail.classList.remove("open");
      toggle.setAttribute("aria-expanded", "false");
    }
  });

  // ── Scroll reveal ──
  var reveals = document.querySelectorAll(".reveal");
  var revealObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add("in");
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: "0px 0px -40px 0px" });
  reveals.forEach(function (el) { revealObserver.observe(el); });

  // ── Animated counters ──
  var counters = document.querySelectorAll("[data-count]");
  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  function animateCount(el) {
    var target = parseInt(el.getAttribute("data-count"), 10);
    if (reduceMotion) {
      el.textContent = target.toLocaleString("en-IN");
      return;
    }
    var duration = 1400;
    var start = null;
    function frame(ts) {
      if (!start) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.round(target * eased).toLocaleString("en-IN");
      if (progress < 1) requestAnimationFrame(frame);
    }
    requestAnimationFrame(frame);
  }

  var countObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        animateCount(entry.target);
        countObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  counters.forEach(function (el) { countObserver.observe(el); });

  // ── Active nav highlighting ──
  var navLinks = railNav.querySelectorAll("a[href^='#']");
  var sections = [];
  navLinks.forEach(function (link) {
    var section = document.querySelector(link.getAttribute("href"));
    if (section) sections.push({ link: link, section: section });
  });

  var sectionObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      var match = sections.find(function (s) { return s.section === entry.target; });
      if (match && entry.isIntersecting) {
        navLinks.forEach(function (l) { l.classList.remove("active"); });
        match.link.classList.add("active");
      }
    });
  }, { rootMargin: "-30% 0px -60% 0px" });
  sections.forEach(function (s) { sectionObserver.observe(s.section); });

  // ── Virtual tour: load the Matterport viewer only on demand,
  //    with a fullscreen / in-page toggle ──
  var tourFrame = document.getElementById("tourFrame");
  var tourLaunch = document.getElementById("tourLaunch");

  if (tourFrame && tourLaunch) {
    var ICON_EXPAND = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 9V4h5M15 4h5v5M20 15v5h-5M9 20H4v-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    var ICON_COMPRESS = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 4v5H4M20 9h-5V4M15 20v-5h5M4 15h5v5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    var fsBtn = null;

    function tourIsFullscreen() {
      return document.fullscreenElement === tourFrame ||
        tourFrame.classList.contains("fs-fallback");
    }

    function updateFsBtn() {
      if (!fsBtn) return;
      var fs = tourIsFullscreen();
      fsBtn.innerHTML = fs ? ICON_COMPRESS : ICON_EXPAND;
      fsBtn.setAttribute("aria-label", fs ? "Exit fullscreen" : "View tour fullscreen");
      fsBtn.title = fs ? "Exit fullscreen (Esc)" : "Fullscreen";
    }

    function enterFallbackFs() {
      tourFrame.classList.add("fs-fallback");
      document.body.style.overflow = "hidden";
      updateFsBtn();
    }

    function exitFallbackFs() {
      tourFrame.classList.remove("fs-fallback");
      document.body.style.overflow = "";
      updateFsBtn();
    }

    function toggleTourFs() {
      if (document.fullscreenElement === tourFrame) {
        document.exitFullscreen();
        return;
      }
      if (tourFrame.classList.contains("fs-fallback")) {
        exitFallbackFs();
        return;
      }
      if (tourFrame.requestFullscreen) {
        tourFrame.requestFullscreen().catch(enterFallbackFs);
      } else if (tourFrame.webkitRequestFullscreen) {
        tourFrame.webkitRequestFullscreen();
      } else {
        enterFallbackFs();
      }
    }

    tourLaunch.addEventListener("click", function () {
      var iframe = document.createElement("iframe");
      iframe.src = "https://my.matterport.com/show/?m=VhFFHZLeawr";
      iframe.title = "Flashline EMS facility — 3D virtual tour";
      iframe.setAttribute("allow", "fullscreen; xr-spatial-tracking");
      iframe.setAttribute("allowfullscreen", "");

      fsBtn = document.createElement("button");
      fsBtn.type = "button";
      fsBtn.className = "tour-fs";
      fsBtn.addEventListener("click", toggleTourFs);

      tourFrame.innerHTML = "";
      tourFrame.appendChild(iframe);
      tourFrame.appendChild(fsBtn);
      updateFsBtn();

      // let the visitor know fullscreen is available
      var tip = document.createElement("div");
      tip.className = "tour-tip";
      tip.setAttribute("role", "status");
      tip.innerHTML = "<b>TIP</b> — this tour can go fullscreen.<br>Use the button above.";
      tourFrame.appendChild(tip);

      var tipHidden = false;
      var hideTip = function () {
        if (tipHidden) return;
        tipHidden = true;
        tip.classList.remove("show");
        setTimeout(function () {
          if (tip.parentNode) tip.parentNode.removeChild(tip);
        }, 400);
      };

      setTimeout(function () { if (!tipHidden) tip.classList.add("show"); }, 500);
      setTimeout(hideTip, 8000);
      fsBtn.addEventListener("click", hideTip);
    });

    document.addEventListener("fullscreenchange", updateFsBtn);
    document.addEventListener("webkitfullscreenchange", updateFsBtn);
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && tourFrame.classList.contains("fs-fallback")) {
        exitFallbackFs();
      }
    });
  }

  // ── Event banner status (electronica India 2026 · Sep 16–18, IST) ──
  var eventStatus = document.getElementById("eventStatus");
  if (eventStatus) {
    var evStart = new Date("2026-09-16T00:00:00+05:30");
    var evEnd = new Date("2026-09-19T00:00:00+05:30");
    var evNow = new Date();
    if (evNow < evStart) {
      var evDays = Math.ceil((evStart - evNow) / 864e5);
      eventStatus.textContent = evDays <= 1 ? "STARTS TOMORROW" : "IN " + evDays + " DAYS";
    } else if (evNow < evEnd) {
      eventStatus.textContent = "LIVE NOW";
    } else {
      var evBand = document.getElementById("event");
      if (evBand) evBand.style.display = "none";
    }
  }

  // ── Business enquiry form ──
  var contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();
      if (!contactForm.checkValidity()) {
        contactForm.reportValidity();
        return;
      }
      var status = document.getElementById("formStatus");
      var btn = document.getElementById("contactSubmit");
      btn.disabled = true;
      btn.textContent = "Sending…";
      status.className = "form-status";
      status.textContent = "";

      fetch("https://formsubmit.co/ajax/sales@flashlineems.com", {
        method: "POST",
        headers: { "Accept": "application/json" },
        body: new FormData(contactForm)
      }).then(function (r) {
        if (!r.ok) throw new Error("HTTP " + r.status);
        return r.json();
      }).then(function () {
        status.textContent = "Thanks — your enquiry is on its way. We'll get back to you shortly.";
        status.className = "form-status ok";
        contactForm.reset();
      }).catch(function () {
        status.innerHTML = "Couldn't send right now — please email us directly at " +
          "<a href=\"mailto:sales@flashlineems.com\">sales@flashlineems.com</a>.";
        status.className = "form-status err";
      }).then(function () {
        btn.disabled = false;
        btn.textContent = "Send Enquiry";
      });
    });
  }

  // ── Footer year ──
  document.getElementById("year").textContent = new Date().getFullYear();
})();
