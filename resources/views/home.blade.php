@extends('layouts.app')

@section('title', 'Flashline EMS — Electronics Manufacturing Services | PCB Fabrication to Box Build')

@section('content')

    <!-- ══════════ HERO — PCB PRODUCTION LINE ══════════ -->
    <section class="hero hero-line" aria-label="Intro">
      <div class="hero-bg" aria-hidden="true"></div>

      <div class="hero-inner">
        <p class="kicker reveal"><span class="tick"></span>Electronics Manufacturing Services · India</p>
        <h1 class="reveal">Design. Fabricate.<br>Assemble. <span class="accent">Ship.</span></h1>
        <p class="hero-sub reveal">A single production line from Gerber files to boxed product —
        60-layer HDI fabrication, 01005-capable SMT assembly, and turnkey box-build
        inside one 100,000+ sq ft Industry 4.0 facility.</p>
        <div class="hero-actions reveal">
          <a class="btn btn-solid" href="{{ route('contact') }}"> Request a Quote </a>
          <a class="btn btn-ghost" href="{{ route('capabilities') }}"> View Capabilities </a>
        </div>
        <ul class="chip-row reveal" aria-label="Highlights">
          <li>TURNKEY EMS</li>
          <li>60-LAYER HDI</li>
          <li>01005 SMT</li>
          <li>AS9100D-ALIGNED</li>
          <li>IPC CERTIFIED</li>
        </ul>

        <aside class="telemetry reveal" aria-label="Representative line telemetry">
          <div class="tele-head"><span class="tick"></span>LINE TELEMETRY</div>
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
        <img src="assets/event-booth.jpg" alt="Flashline EMS exhibition booth — from concept to production">
        <figcaption>OUR BOOTH — HALL 4 · H4.F122 · BIEC</figcaption>
      </figure>
    </aside>

 @endsection
