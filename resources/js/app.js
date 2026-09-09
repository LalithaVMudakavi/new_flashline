import '../css/app.css';

// Flashline EMS — interactions

(function () {
    "use strict";

    // ── Mobile nav ──
    var rail = document.getElementById("rail");
    var toggle = document.getElementById("navToggle");
    var railNav = document.getElementById("railNav");

    if (rail && toggle && railNav) {

        toggle.addEventListener("click", function () {

            var open = rail.classList.toggle("open");

            toggle.setAttribute(
                "aria-expanded",
                open ? "true" : "false"
            );

        });

        railNav.addEventListener("click", function (e) {

            if (e.target.closest("a")) {

                rail.classList.remove("open");

                toggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

            }

        });

    }


    // ── Scroll reveal ──
    var reveals = document.querySelectorAll(".reveal");

    if ("IntersectionObserver" in window) {

        var revealObserver = new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("in");

                        revealObserver.unobserve(entry.target);

                    }

                });

            },
            {
                threshold: 0.12,
                rootMargin: "0px 0px -40px 0px"
            }
        );

        reveals.forEach(function (el) {
            revealObserver.observe(el);
        });

    } else {

        reveals.forEach(function (el) {
            el.classList.add("in");
        });

    }


    // ── Animated counters ──
    var counters = document.querySelectorAll("[data-count]");

    var reduceMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches;


    function animateCount(el) {

        var target = parseInt(
            el.getAttribute("data-count"),
            10
        );

        if (reduceMotion) {

            el.textContent =
                target.toLocaleString("en-IN");

            return;
        }

        var duration = 1400;
        var start = null;


        function frame(timestamp) {

            if (!start) {
                start = timestamp;
            }

            var progress = Math.min(
                (timestamp - start) / duration,
                1
            );

            var eased =
                1 - Math.pow(1 - progress, 3);

            el.textContent =
                Math.round(target * eased)
                    .toLocaleString("en-IN");

            if (progress < 1) {
                requestAnimationFrame(frame);
            }

        }

        requestAnimationFrame(frame);

    }


    if ("IntersectionObserver" in window) {

        var countObserver = new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        animateCount(entry.target);

                        countObserver.unobserve(
                            entry.target
                        );

                    }

                });

            },
            {
                threshold: 0.5
            }
        );


        counters.forEach(function (el) {
            countObserver.observe(el);
        });

    }


    // ── Event banner ──
    var eventStatus =
        document.getElementById("eventStatus");

    if (eventStatus) {

        var evStart =
            new Date("2026-09-16T00:00:00+05:30");

        var evEnd =
            new Date("2026-09-19T00:00:00+05:30");

        var evNow = new Date();


        if (evNow < evStart) {

            var evDays = Math.ceil(
                (evStart - evNow) / 864e5
            );

            eventStatus.textContent =
                evDays <= 1
                    ? "STARTS TOMORROW"
                    : "IN " + evDays + " DAYS";

        } else if (evNow < evEnd) {

            eventStatus.textContent = "LIVE NOW";

        } else {

            var evBand =
                document.getElementById("event");

            if (evBand) {
                evBand.style.display = "none";
            }

        }

    }


    // ── Contact form ──
    var contactForm =
        document.getElementById("contactForm");

    if (contactForm) {

        contactForm.addEventListener(
            "submit",
            function (e) {

                e.preventDefault();

                if (!contactForm.checkValidity()) {

                    contactForm.reportValidity();

                    return;
                }

                var status =
                    document.getElementById("formStatus");

                var btn =
                    document.getElementById("contactSubmit");

                if (!status || !btn) return;


                btn.disabled = true;
                btn.textContent = "Sending…";

                status.className = "form-status";
                status.textContent = "";


                fetch(
                    "https://formsubmit.co/ajax/sales@flashlineems.com",
                    {
                        method: "POST",
                        headers: {
                            Accept: "application/json"
                        },
                        body: new FormData(contactForm)
                    }
                )
                    .then(function (response) {

                        if (!response.ok) {
                            throw new Error(
                                "HTTP " + response.status
                            );
                        }

                        return response.json();

                    })
                    .then(function () {

                        status.textContent =
                            "Thanks — your enquiry is on its way. We'll get back to you shortly.";

                        status.className =
                            "form-status ok";

                        contactForm.reset();

                    })
                    .catch(function () {

                        status.innerHTML =
                            "Couldn't send right now — please email us directly at " +
                            '<a href="mailto:sales@flashlineems.com">' +
                            "sales@flashlineems.com</a>.";

                        status.className =
                            "form-status err";

                    })
                    .finally(function () {

                        btn.disabled = false;

                        btn.textContent =
                            "Send Enquiry";

                    });

            }
        );

    }


    // ── Footer year ──
    var year =
        document.getElementById("year");

    if (year) {

        year.textContent =
            new Date().getFullYear();

    }

})();