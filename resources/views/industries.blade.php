@extends('layouts.app')

@section('title', 'Industries | Flashline EMS')

@section('content')

<style>
  /* Only increase the icon size */
  #industries .ind-grid .ind .ind-icon {
      font-size: 36px !important;
  }
</style>

<!-- ══════════ INDUSTRIES ══════════ -->

<section class="section" id="industries">
  <div class="section-head reveal">
    <span class="section-no">05</span>
    <h2>Built for industries<br>where failure isn't an option.</h2>
    <p>Six sectors, one common demand: boards that work the first time, every time.</p>
  </div>

 <div class="ind-grid">

  <!-- Medical -->
  <a class="ind reveal" href="{{ route('contact') }}">
    <i class="fa-solid fa-heart-pulse ind-icon" aria-hidden="true"></i>

    <h3>Medical</h3>

    <p>
      Reliable, repeatable electronics for medical devices and healthcare
      equipment where precision and consistency matter.
    </p>
  </a>


  <!-- Semiconductor Equipment -->
  <a class="ind reveal" href="{{ route('contact') }}">
    <i class="fa-solid fa-microchip ind-icon" aria-hidden="true"></i>

    <h3>Semiconductor Equipment</h3>

    <p>
      High-precision assemblies built for semiconductor manufacturing
      equipment, with process control and dependable performance.
    </p>
  </a>


  <!-- Defence & Aerospace -->
  <a class="ind reveal" href="{{ route('contact') }}">
    <i class="fa-solid fa-plane-up ind-icon" aria-hidden="true"></i>

    <h3>Defence &amp; Aerospace</h3>

    <p>
      Traceable, dependable electronics for demanding aerospace and
      defence applications where reliability is critical.
    </p>
  </a>


  <!-- Industrial & Automation -->
  <a class="ind reveal" href="{{ route('contact') }}">
    <i class="fa-solid fa-gears ind-icon" aria-hidden="true"></i>

    <h3>Industrial &amp; Automation</h3>

    <p>
      Robust electronics for industrial control, automation systems,
      machinery, and high-reliability applications.
    </p>
  </a>


  <!-- Networking & Telecom -->
  <a class="ind reveal" href="{{ route('contact') }}">
    <i class="fa-solid fa-tower-cell ind-icon" aria-hidden="true"></i>

    <h3>Networking &amp; Telecom</h3>

    <p>
      High-density, high-performance PCB assemblies for networking,
      telecommunications, connectivity, and compute infrastructure.
    </p>
  </a>


  <!-- Energy / Power Electronics -->
  <a class="ind reveal" href="{{ route('contact') }}">
    <i class="fa-solid fa-bolt ind-icon" aria-hidden="true"></i>

    <h3>Energy / Power Electronics</h3>

    <p>
      Power electronics assemblies designed for high-current,
      high-temperature, and demanding energy applications.
    </p>
  </a>

</div>
</section>

@endsection
