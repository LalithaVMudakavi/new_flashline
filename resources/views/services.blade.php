@extends('layouts.app')

@section('title', 'Services | Flashline EMS')

@section('content')

<!-- ══════════ SERVICES ══════════ -->

<section class="section" id="services">
  <div class="section-head reveal">
    <span class="section-no">02</span>
   <h2>End-to-End EMS Solutions.<br>One Trusted Partner.</h2>
    <p>Most products pass through four hands before they ship. Ours pass through one roof —
    which is why they ship on time.</p>
  </div>

  <div class="svc-list">
    <article class="svc reveal">
      <span class="svc-no">S/01</span>
      <h3>Engineering Design</h3>
      <p>Expert CAD,CAM engineers translate your schematics into manufacturable reality —
      PCB layout, stackup design and material selection, DFM/DFA review, and electromechanical design that anticipates the
      production line instead of fighting it.</p>
      <ul class="svc-tags"><li>CAM engineering</li><li>DFM / DFA</li><li>Electromechanical design</li><li>PCB Design</li></ul>
    </article>
    <article class="svc reveal">
      <span class="svc-no">S/02</span>
      <h3>PCB Fabrication</h3>
      <p>Prototype to production runs of rigid, rigid-flex, metal-core and HDI boards —
      up to 60 layers — backed by first-article inspection on every new part number.</p>
      <ul class="svc-tags"><li>60-layer HDI</li><li>Rigid-flex</li><li>Hybrid Boards</li><li>Metal-core</li><li>Prototype → volume</li></ul>
    </article>
    <article class="svc reveal">
      <span class="svc-no">S/03</span>
      <h3>PCB Assembly</h3>
      <p>Two automated Fuji Aimex III SMT lines place components from 01005 chips to
      100&nbsp;mm BGAs at 30-micron accuracy, with SPI 3D optical inspection, 3D-X-ray, and
      nitrogen reflow.</p>
      <ul class="svc-tags"><li>selective soldering </li><li>BGA Re-balling / Re work</li><li>Conformal Coating</li></ul>
    </article>
    <article class="svc reveal">
      <span class="svc-no">S/04</span>
      <h3>Box Build</h3>
      <p>Complete product integration — enclosures, cable harnesses, firmware loading,
      functional and environmental test, and packaging. Your product arrives ready to sell.
      </p>
      <ul class="svc-tags"><li>Full integration</li><li>Functional test</li><li>Turnkey delivery</li></ul>
    </article>
  </div>

  <figure class="band-photo reveal">
    <img src="{{ asset('assets/smt-lines.jpg') }}" alt="Flashline EMS automated SMT assembly lines">
    <figcaption>Automated SMT Lines — 01005 CHIPS TO 75 MM BGAS, ±30 µM PLACEMENT</figcaption>
  </figure>
</section>

@endsection
