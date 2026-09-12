@extends('layouts.app')

@section('title', 'Flashline EMS — Electronics Manufacturing Services | PCB Fabrication to Box Build')

@section('content')

    <!-- ══════════ HERO — PCB PRODUCTION LINE ══════════ -->
    <section class="hero hero-line" aria-label="Intro">
      <div class="hero-bg" aria-hidden="true"></div>

      <div class="hero-inner">
        <p class="kicker reveal"><span class="tick"></span>Electronics Manufacturing Services · India</p>
        <h1 class="reveal">Design. Fabricate.<br>Assemble. <span class="accent">Ship.</span></h1>
        <p class="hero-sub reveal">One integrated production partner from Gerber files to boxed product —
        60-layer HDI fabrication, 01005-capable SMT assembly, and turnkey box-build
        inside one 100,000+ sq ft Industry 4.0 facility.</p>
        <div class="hero-actions reveal">
          <a class="btn btn-solid" href="{{ route('contact') }}"> Request a Quote </a>
          <a class="btn btn-ghost" href="{{ route('capabilities') }}"> View Capabilities </a>
        </div>
        <ul class="chip-row reveal" aria-label="Highlights">
          <li>FULL TURNKEY SOLUTION</li>
          <li>60-LAYER HDI</li>
          <li>AS9100D-ALIGNED</li>
          <li>IPC CERTIFIED</li>
        </ul>

        <aside class="telemetry reveal" aria-label="Representative line telemetry">
          <div class="tele-head"><span class="tick"></span>CAPABILITES OF LINE 1 & 2</div>
          <dl>
            <div><dt>LINE-01 · AIMEX II</dt><dd class="ok">RUNNING</dd></div>
            <div><dt>LINE-02 · AIMEX II</dt><dd class="ok">RUNNING</dd></div>
            <div><dt>REFLOW ZONE-7</dt><dd>245.3 °C</dd></div>
            <div><dt>PLACEMENT RATE</dt><dd>42,300 CPH</dd></div>
            <div><dt>AOI YIELD · 24 H</dt><dd>99.82 %</dd></div>
            <div><dt>ACTIVE LOTS</dt><dd>17</dd></div>
          </dl>
          <p class="tele-note">REPRESENTATIVE LINE DATA</p>
        </aside>

        <div class="hero-strip reveal" role="list" aria-label="Key figures">
          <div role="listitem"><b data-count="100000">0</b><span>sq ft facility</span></div>
          <div role="listitem"><b data-count="60">0</b><span>layer HDI fabrication</span></div>
          <div role="listitem"><b data-count="40">0</b><span>qualified engineers</span></div>
          <div role="listitem"><b data-count="25">0</b><span>years of expertise</span></div>
        </div>
      </div>

      <div class="fingers" aria-hidden="true"></div>
    </section>



    <!-- ══════════ LIVE NEWS SLIDER ══════════ -->
    <section class="fl-home-news" aria-label="Latest Flashline EMS news">
      <div class="fl-home-news-label">
        <span class="fl-home-news-live"></span>
        <span>FLASHLINE<br>NEWS</span>
      </div>

      <div class="fl-home-news-track">
        <div class="fl-home-news-set">
          <a class="fl-home-news-slide" href="{{ route('event-news') }}">
            <span class="fl-home-news-type">UPCOMING EVENT</span>
            <strong>Meet us at electronica India &amp; productronica India 2026</strong>
            <span class="fl-home-news-meta">SEP 16–18, 2026 &nbsp;·&nbsp; BIEC, BENGALURU &nbsp;·&nbsp; HALL 4 / H4.F122</span>
            <span class="fl-home-news-arrow">VIEW NEWS&nbsp; ↗</span>
          </a>
        </div>
        <div class="fl-home-news-set" aria-hidden="true">
          <a class="fl-home-news-slide" href="{{ route('event-news') }}" tabindex="-1">
            <span class="fl-home-news-type">UPCOMING EVENT</span>
            <strong>Meet us at electronica India &amp; productronica India 2026</strong>
            <span class="fl-home-news-meta">SEP 16–18, 2026 &nbsp;·&nbsp; BIEC, BENGALURU &nbsp;·&nbsp; HALL 4 / H4.F122</span>
            <span class="fl-home-news-arrow">VIEW NEWS&nbsp; ↗</span>
          </a>
        </div>
      </div>
    </section>

    <!-- ══════════ EVENT — ELECTRONICA INDIA 2026 ══════════ -->
    <aside class="event-band reveal" id="event" aria-label="Upcoming exhibition">


      <div class="event-body">
        <p class="event-kicker"><span class="tick"></span>UPCOMING EVENT <span class="event-status" id="eventStatus"></span></p>
        <h2>Meet us at electronica India &amp;<br>productronica India 2026</h2>
        <p class="event-where">
          <span><b>SEP 16–18, 2026</b></span>
          <span>BIEC · BENGALURU</span>
          <span><b>HALL 4 · BOOTH H4.F122</b></span>
        </p>
        <p class="event-copy">Come see how we take a product from bare board to box build —
        live demos, our engineering team on the floor, and a first look at our latest
        line capabilities. Drop by, or lock in a time that suits you.</p>
        <div class="event-actions">
          <a class="btn btn-solid" href="https://mmiconnect.in/app/catalogue/exhibitor-detail/ep-blr-2026/123/87a1093b-3367-4a1f-8e1d-cd2f6efb81dd" target="_blank" rel="noopener">View Exhibitor Profile ↗</a>
          <a class="btn btn-ghost" href="mailto:sales@flashlineems.com?subject=Meeting%20at%20electronica%20India%202026%20(Booth%20H4.F122)">Book a Booth Meeting</a>
        </div>
      </div>
      <figure class="event-photo">
        <img 
    src="{{ asset('assets/event-booth.jpg') }}" 
    alt="Flashline EMS exhibition booth — from concept to production"
>
        <figcaption>OUR BOOTH — HALL 4 · H4.F122 · BIEC</figcaption>
      </figure>
    </aside>

 @endsection

@push('styles')
<style>
    .fl-home-news {
        display: flex;
        position: relative;
        min-height: 112px;
        overflow: hidden;
        background: #111519;
        border-top: 1px solid #30373d;
        border-bottom: 1px solid #30373d;
    }
    .fl-home-news::after {
        position: absolute;
        inset: 0;
        z-index: 1;
        content: "";
        pointer-events: none;
        background: linear-gradient(90deg, rgba(17,21,25,.95), transparent 8%, transparent 92%, rgba(17,21,25,.95));
    }
    .fl-home-news-label {
        z-index: 3;
        display: flex;
        align-items: center;
        gap: 12px;
        flex: 0 0 150px;
        padding: 0 28px;
        color: #f2efe9;
        background: #191f24;
        border-right: 1px solid #3a4249;
        font: 600 11px/1.35 "IBM Plex Mono", monospace;
        letter-spacing: .14em;
    }
    .fl-home-news-live {
        width: 9px;
        height: 9px;
        flex: 0 0 9px;
        background: #e8853d;
        border-radius: 50%;
        box-shadow: 0 0 0 5px rgba(232,133,61,.16);
    }
    .fl-home-news-track {
        display: flex;
        width: max-content;
        animation: flHomeNewsMove 13s linear infinite;
        will-change: transform;
    }
    .fl-home-news:hover .fl-home-news-track {
        animation-play-state: paused;
    }
    .fl-home-news-slide {
        display: flex;
        align-items: center;
        gap: 22px;
        min-width: min(860px, 82vw);
        padding: 22px 42px;
        color: #f2efe9;
        text-decoration: none;
        border-right: 1px solid #30373d;
    }
    .fl-home-news-set {
        display: flex;
        flex: 0 0 auto;
    }
    .fl-home-news-type {
        color: #e8853d;
        font: 10px "IBM Plex Mono", monospace;
        letter-spacing: .12em;
        white-space: nowrap;
    }
    .fl-home-news-slide strong {
        max-width: 340px;
        font: 600 21px/1.15 "Space Grotesk", sans-serif;
    }
    .fl-home-news-meta {
        color: #9da7af;
        font: 10px "IBM Plex Mono", monospace;
        letter-spacing: .06em;
        white-space: nowrap;
    }
    .fl-home-news-arrow {
        margin-left: auto;
        color: #e8853d;
        font: 10px "IBM Plex Mono", monospace;
        letter-spacing: .1em;
        white-space: nowrap;
    }
    @keyframes flHomeNewsMove {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }
    @media (prefers-reduced-motion: reduce) {
        .fl-home-news-track { animation: none; }
    }
    @media (max-width: 760px) {
        .fl-home-news { min-height: 132px; }
        .fl-home-news-label { flex-basis: 112px; padding: 0 16px; }
        .fl-home-news-slide { display: grid; gap: 8px; min-width: 92vw; padding: 20px; }
        .fl-home-news-slide strong { font-size: 18px; }
        .fl-home-news-arrow { margin-left: 0; }
    }
</style>
@endpush
