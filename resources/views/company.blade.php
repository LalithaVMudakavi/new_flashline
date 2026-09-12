@extends('layouts.app')

@section('title', 'Company | Flashline EMS')

@section('content')

<!-- ══════════ ABOUT / COMPANY ══════════ -->

<section class="section section-alt" id="about">

  <div class="section-head reveal">
    <span class="section-no">01</span>


<h2>Founded by people who<br>have built boards for 40 years.</h2>

<p>
  Flashline EMS was founded by PCB industry pioneers with four decades of
  manufacturing behind them. That experience shows up in the details — a 100,000+ sq ft
  plant, 40+ qualified engineers, and a supply chain with reach into five countries.
</p>


  </div>

  <figure class="band-photo reveal">
    <img
      src="{{ asset('assets/company.png') }}"
      alt="Aerial view of the Flashline EMS manufacturing facility"
    >


<figcaption>
  THE FLASHLINE EMS FACILITY — E-CITY, HYDERABAD
</figcaption>


  </figure>

  <div class="about-grid">


<!-- Global Footprint -->
<div class="about-block reveal">

  <h3>Global footprint</h3>

  <ul class="loc-list">

    <li>
      <b>India</b>
      <span>Headquarters &amp; manufacturing</span>
    </li>

    <li>
      <b>Singapore</b>
      <span>Supply chain office</span>
    </li>

    <li>
      <b>USA</b>
      <span>Supply chain office</span>
    </li>

    <li>
      <b>Taiwan</b>
      <span>Supply chain office</span>
    </li>

    <li>
      <b>Korea</b>
      <span>Supply chain office</span>
    </li>

    <li>
      <b>China</b>
      <span>Supply chain office</span>
    </li>

  </ul>

</div>


<!-- Why Teams Choose Us -->
<div class="about-block reveal">

  <h3>Why teams choose us</h3>

  <ul class="why-list">

    <li>
      One roof from design to box-build — no hand-off risk between vendors.
    </li>

    <li>
      Industry 4.0 digital tracking on every lot.
    </li>

    <li>
      IPC-certified technicians and ISO-driven quality processes.
    </li>

    <li>
      First-article inspection as standard, not an upsell.
    </li>

    <li>
      Prototype-friendly: the same line quality at any volume.
    </li>

  </ul>

</div>


  </div>

</section>

@endsection
