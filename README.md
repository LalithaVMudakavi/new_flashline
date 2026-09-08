# Flashline EMS — Website

Website for Flashline EMS (electronics manufacturing services — PCB design, fabrication, assembly, and box-build).

Design direction (selected from a four-variant exploration): **warm light theme, horizontal top-bar navigation, full-bleed PCB photo hero** with technical engineering graphics throughout.

A static site with no build step: plain HTML, CSS, and vanilla JS.

## Structure

```
index.html      Single-page site — hero, services, capabilities, industries, process, company, contact
css/style.css   All styling — light palette, top bar, PCB photo hero, technical diagrams
js/main.js      Mobile nav, scroll-reveal, animated counters, active-section highlighting
```

Notable elements:

- Hero: PCB macro photo banner, solder-mask spec chips, representative line-telemetry panel, gold edge-connector "fingers" strip
- Capabilities: engineer-grade spec cards + HDI stack-up cross-section SVG diagram
- Process: SMT line station-flow SVG diagram with reflow temperature profile
- Virtual tour: Matterport 3D walkthrough of the facility, loaded on demand (click-to-load facade keeps the page fast)
- Photo bands in services / capabilities / company sections

`assets/` holds real company photos (SMT lines, X-ray, drone views, equipment, booth render, logo) pulled from the company's MMI Connect exhibitor profile; the section photo bands use these. Only the hero background PCB macro is still an Unsplash hotlink.

The homepage event band (electronica India / productronica India 2026, Sep 16–18, BIEC Bengaluru, Hall 4 Booth H4.F122) shows a live days-to-go chip and hides itself automatically after Sep 18, 2026 (see the event block in `js/main.js` — update dates there for future shows).

## Contact form

The enquiry form posts to [FormSubmit](https://formsubmit.co) (`formsubmit.co/ajax/sales@flashlineems.com`) — a free relay for static sites, no account needed. **One-time activation:** the first submission sends a confirmation email to sales@flashlineems.com; click the link in it, after which submissions arrive as emails. Includes a honeypot field for spam. To use a different backend (Formspree, Getform, your own API), change the `action` in `index.html` and the fetch URL in `js/main.js`.

## Run locally

Open `index.html` directly in a browser, or serve the folder:

```
python -m http.server 8000
```

## Deploy

Works as-is on GitHub Pages, Netlify, or any static host.
