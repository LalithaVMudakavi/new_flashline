@extends('layouts.app')

@section('title', 'Services | Flashline EMS')

@section('content')

<!-- ══════════ SERVICES ══════════ -->

<section class="section" id="services">
  <div class="section-head reveal">
    <span class="section-no">01</span>
    <h2>Four services.<br>One accountable partner.</h2>
    <p>Most products pass through four hands before they ship. Ours pass through one roof —
    which is why they ship on time.</p>
  </div>

  <div class="svc-list">
    <article class="svc reveal">
      <span class="svc-no">S/01</span>
      <h3>Engineering Design</h3>
      <p>Expert CAM engineers translate your schematics into manufacturable reality —
      PCB layout, DFM/DFA review, and electromechanical design that anticipates the
      production line instead of fighting it.</p>
      <ul class="svc-tags"><li>CAM engineering</li><li>DFM / DFA</li><li>Electromechanical design</li></ul>
    </article>
    <article class="svc reveal">
      <span class="svc-no">S/02</span>
      <h3>PCB Fabrication</h3>
      <p>Prototype to production runs of rigid, rigid-flex, metal-core and HDI boards —
      up to 60 layers — backed by first-article inspection on every new part number.</p>
      <ul class="svc-tags"><li>60-layer HDI</li><li>Rigid-flex</li><li>Metal-core</li><li>Prototype → volume</li></ul>
    </article>
    <article class="svc reveal">
      <span class="svc-no">S/03</span>
      <h3>PCB Assembly</h3>
      <p>Two automated Fuji Aimex II SMT lines place components from 01005 chips to
      75&nbsp;mm BGAs at 30-micron accuracy, with 3D optical inspection, X-ray, and
      nitrogen reflow in-house.</p>
      <ul class="svc-tags"><li>01005 → 75 mm BGA</li><li>SMD + mixed technology</li><li>3D AOI + X-ray</li></ul>
    </article>
    <article class="svc reveal">
      <span class="svc-no">S/04</span>
      <h3>Box Build</h3>
      <p>Complete product integration — enclosures, cable harnesses, firmware loading,
      functional and environmental test, and packaging. Your product arrives ready to sell,
      not ready to assemble.</p>
      <ul class="svc-tags"><li>Full integration</li><li>Functional test</li><li>Turnkey delivery</li></ul>
    </article>
  </div>

  <figure class="band-photo reveal">
    <img src="{{ asset('assets/smt-lines.jpg') }}" alt="Flashline EMS automated SMT assembly lines">
    <figcaption>OUR SMT LINES — 01005 CHIPS TO 75 MM BGAS, ±30 µM PLACEMENT</figcaption>
  </figure>
</section>

@endsection
