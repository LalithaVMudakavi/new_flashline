@extends('layouts.app')

@section('title', 'Capabilities | Flashline EMS')

@section('content')

<!-- ══════════ CAPABILITIES / SPEC SHEET ══════════ -->

<section class="section section-alt" id="capabilities">
  <div class="section-head reveal">
    <span class="section-no">02</span>
    <h2>The spec sheet,<br>not the sales pitch.</h2>
    <p>Engineers choose partners on numbers. Here are ours.</p>
  </div>

  <div class="spec-grid">
    <div class="spec-card reveal">
      <h3>// Placement</h3>
      <dl>
        <div><dt>Smallest component</dt><dd>01005 (0402 metric)</dd></div>
        <div><dt>Largest component</dt><dd>74 × 74 mm, height ≤ 25.4 mm</dd></div>
        <div><dt>Chip accuracy</dt><dd>±50 µm</dd></div>
        <div><dt>IC accuracy</dt><dd>±30 µm</dd></div>
        <div><dt>BGA range</dt><dd>0.15 mm ball → 75 × 75 mm</dd></div>
      </dl>
    </div>


<div class="spec-card reveal">
  <h3>// Board handling</h3>
  <dl>
    <div><dt>Minimum PCB</dt><dd>48 × 48 mm</dd></div>
    <div><dt>Maximum PCB</dt><dd>774 × 686 mm</dd></div>
    <div><dt>Thin boards</dt><dd>&lt; 0.3 mm supported</dd></div>
    <div><dt>Fabrication</dt><dd>HDI to 60 layers, rigid-flex, metal-core</dd></div>
  </dl>
</div>

<div class="spec-card reveal">
  <h3>// Line equipment</h3>
  <dl>
    <div><dt>SMT lines</dt><dd>2 × Fuji Aimex II (automated)</dd></div>
    <div><dt>Inspection</dt><dd>Koh Young 3D Zenith Alpha HS+</dd></div>
    <div><dt>Reflow</dt><dd>Nitrogen-capable oven</dd></div>
    <div><dt>Feeder capacity</dt><dd>222 × 8 mm feeders + 10 tray positions</dd></div>
  </dl>
</div>

<div class="spec-card reveal">
  <h3>// Test &amp; finish</h3>
  <dl>
    <div><dt>Inspection</dt><dd>X-ray, 3D AOI, FAI on new parts</dd></div>
    <div><dt>Test</dt><dd>Functional, burn-in, environmental</dd></div>
    <div><dt>Rework</dt><dd>BGA rework &amp; re-balling</dd></div>
    <div><dt>Coating</dt><dd>In-house conformal coating</dd></div>
  </dl>
</div>


  </div>

  <div class="stackup reveal" role="img" aria-label="Cross-section diagram of a 60-layer HDI PCB stack-up">
    <div class="stackup-head">
      <h3>// HDI stack-up — cross-section</h3>
      <span>UP TO 60 COPPER LAYERS · BLIND, BURIED &amp; THROUGH VIAS</span>
    </div>


<svg viewBox="0 0 960 216" aria-hidden="true">
  <g fill="var(--muted)" font-size="11" text-anchor="end">
    <text x="58" y="31">L1</text>
    <text x="58" y="53">L2</text>
    <text x="58" y="78">L3</text>
    <text x="58" y="147">L58</text>
    <text x="58" y="172">L59</text>
    <text x="58" y="192">L60</text>
  </g>

  <g>
    <rect x="70" y="18" width="820" height="5" fill="var(--green)" opacity=".75"/>
    <rect x="70" y="23" width="820" height="9" fill="var(--copper)"/>
    <rect x="70" y="32" width="820" height="12" fill="var(--trace)"/>
    <rect x="70" y="44" width="820" height="7" fill="var(--copper)" opacity=".85"/>
    <rect x="70" y="51" width="820" height="18" fill="var(--line)"/>
    <rect x="70" y="69" width="820" height="7" fill="var(--copper)" opacity=".85"/>
    <rect x="70" y="76" width="820" height="12" fill="var(--trace)"/>
    <rect x="70" y="126" width="820" height="12" fill="var(--trace)"/>
    <rect x="70" y="138" width="820" height="7" fill="var(--copper)" opacity=".85"/>
    <rect x="70" y="145" width="820" height="18" fill="var(--line)"/>
    <rect x="70" y="163" width="820" height="7" fill="var(--copper)" opacity=".85"/>
    <rect x="70" y="170" width="820" height="12" fill="var(--trace)"/>
    <rect x="70" y="182" width="820" height="9" fill="var(--copper)"/>
    <rect x="70" y="191" width="820" height="5" fill="var(--green)" opacity=".75"/>
  </g>

  <rect x="70" y="88" width="820" height="38" fill="none" stroke="var(--line)" stroke-dasharray="5 6"/>

  <text x="480" y="111" fill="var(--muted)" font-size="11" letter-spacing="2" text-anchor="middle">
    · · · L4 — L57 · 54 MORE COPPER LAYERS · · ·
  </text>

  <path d="M193 23 L207 23 L203 51 L197 51 Z" fill="var(--copper-2)"/>

  <rect x="465" y="69" width="10" height="76" fill="var(--copper-2)"/>
  <rect x="459" y="66" width="22" height="5" fill="var(--copper-2)"/>
  <rect x="459" y="143" width="22" height="5" fill="var(--copper-2)"/>

  <rect x="725" y="23" width="12" height="173" fill="var(--copper-2)" opacity=".9"/>
  <rect x="718" y="20" width="26" height="6" fill="var(--copper-2)"/>
  <rect x="718" y="193" width="26" height="6" fill="var(--copper-2)"/>

  <g fill="var(--muted)" font-size="10.5">
    <text x="216" y="14">μVIA L1→L2 · LASER ⌀0.10 MM</text>
    <text x="488" y="85">BURIED VIA L3→L58</text>
    <text x="748" y="212">PTH ⌀0.15 MM MIN</text>
  </g>
</svg>

<ul class="stackup-legend">
  <li><i class="sw sw-cu"></i>Copper layer</li>
  <li><i class="sw sw-pp"></i>Prepreg</li>
  <li><i class="sw sw-core"></i>Core</li>
  <li><i class="sw sw-via"></i>Via structure</li>
  <li><i class="sw sw-mask"></i>Solder mask</li>
</ul>


  </div>

  <p class="spec-note reveal">
    Quality system: ISO 9001:2015 &amp; AS9100D:2016 · IPC-certified technicians on every line.
  </p>

  <figure class="band-photo reveal">
    <img
      src="{{ asset('assets/xray-inspection.jpg') }}"
      alt="Shimadzu X-ray inspection system on the Flashline EMS line"
    >
    <figcaption>SHIMADZU X-RAY INSPECTION — BGA VERIFICATION &amp; FAI IN-HOUSE</figcaption>
  </figure>
</section>

@endsection
