@extends('layouts.app')

@section('title', 'Industries | Flashline EMS')

@section('content')

<!-- ══════════ INDUSTRIES ══════════ -->

<section class="section" id="industries">
  <div class="section-head reveal">
    <span class="section-no">03</span>
    <h2>Built for industries<br>where failure isn't an option.</h2>
    <p>Six sectors, one common demand: boards that work the first time, every time.</p>
  </div>

  <div class="ind-grid">


<a class="ind reveal" href="{{ route('contact') }}">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 15l-8-4V4.5a1.5 1.5 0 00-3 0V11l-8 4v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-4.5l8 2.5v-2z"/></svg>
  <h3>Aerospace &amp; Defence</h3>
  <p>AS9100D-aligned processes with full lot traceability for flight-critical hardware.</p>
</a>

<a class="ind reveal" href="{{ route('contact') }}">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7-4.6-9.5-9A5.5 5.5 0 0112 6.3 5.5 5.5 0 0121.5 12C19 16.4 12 21 12 21z" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="M4 12h4l2-3 3 6 2-3h5" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
  <h3>Healthcare &amp; Medical</h3>
  <p>Cleanliness, documentation, and repeatability for devices people depend on.</p>
</a>

<a class="ind reveal" href="{{ route('contact') }}">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M2 20h20M4 20V9l8-5 8 5v11M9 20v-6h6v6" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
  <h3>IT &amp; Telecom</h3>
  <p>High-layer-count, high-density boards for network and compute infrastructure.</p>
</a>

<a class="ind reveal" href="{{ route('contact') }}">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 16l2-6a2 2 0 012-1.4h10A2 2 0 0119 10l2 6M5 16h14a1 1 0 011 1v2h-2.5a1.5 1.5 0 01-3 0h-5a1.5 1.5 0 01-3 0H4v-2a1 1 0 011-1z" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
  <h3>Automotive</h3>
  <p>Vibration-hardened assemblies with conformal coating and environmental test.</p>
</a>

<a class="ind reveal" href="{{ route('contact') }}">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 15V7a2 2 0 012-2h12a2 2 0 012 2v8M2 15h20l-2 4H4l-2-4z" fill="none" stroke="currentColor" stroke-width="1.8"/></svg>
  <h3>Transportation</h3>
  <p>Long-lifecycle electronics for rail, fleet, and logistics platforms.</p>
</a>

<a class="ind reveal" href="{{ route('contact') }}">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
  <h3>Power &amp; Energy</h3>
  <p>Metal-core and heavy-copper builds for high-current, high-heat applications.</p>
</a>


  </div>
</section>

@endsection
