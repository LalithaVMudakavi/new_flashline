@extends('layouts.app')

@section('title', 'Process | Flashline EMS')

@section('content')

<!-- ══════════ PROCESS ══════════ -->

<section class="section section-alt" id="process">

  <div class="section-head reveal">
    <span class="section-no">04</span>
    <h2>Industry 4.0,<br>on an actual factory floor.</h2>
    <p>Every board is digitally tracked from kit to crate. You see what we see.</p>
  </div>

  <ol class="steps">
    <li class="reveal">
      <b>01 — Quote &amp; DFM</b>
      <p>Send your files; our CAM team returns a manufacturability review with the quote — before you commit.</p>
    </li>


<li class="reveal">
  <b>02 — Sourcing</b>
  <p>A global supply chain spanning Singapore, USA, Taiwan, Korea and China keeps components moving even when markets don't.</p>
</li>

<li class="reveal">
  <b>03 — First article</b>
  <p>Every new part number passes FAI with X-ray and 3D optical inspection before volume begins.</p>
</li>

<li class="reveal">
  <b>04 — Production</b>
  <p>Automated SMT lines with digital lot tracking — live status, full traceability, zero guesswork.</p>
</li>

<li class="reveal">
  <b>05 — Test &amp; ship</b>
  <p>Functional, burn-in, and environmental testing, then box-build and packaging. Product ships market-ready.</p>
</li>


  </ol>

  <!-- ══════════ SMT LINE FLOW ══════════ -->

  <div class="lineflow reveal">


<div class="lineflow-head">
  <h3>// SMT line — station flow</h3>
  <span>DIGITAL LOT TRACKING AT EVERY STATION</span>
</div>

<svg
  viewBox="0 0 1180 168"
  role="img"
  aria-label="SMT production line stations from paste print to functional test"
>

  <path
    d="M606 54 C 626 50, 638 26, 661 22 S 700 44, 716 54"
    fill="none"
    stroke="var(--copper)"
    stroke-width="2"
  />

  <circle cx="661" cy="22" r="3" fill="var(--copper)"/>

  <text
    x="661"
    y="12"
    fill="var(--copper)"
    font-size="10"
    text-anchor="middle"
  >
    245 °C PEAK
  </text>


  <!-- Station boxes -->
  <g fill="var(--panel)" stroke="var(--line)">

    <rect x="20" y="60" width="122" height="44" rx="8"/>

    <rect x="165" y="60" width="122" height="44" rx="8"/>

    <rect x="310" y="60" width="122" height="44" rx="8"/>

    <rect x="455" y="60" width="122" height="44" rx="8"/>

    <rect
      x="600"
      y="60"
      width="122"
      height="44"
      rx="8"
      stroke="var(--copper)"
    />

    <rect x="745" y="60" width="122" height="44" rx="8"/>

    <rect x="890" y="60" width="122" height="44" rx="8"/>

    <rect x="1035" y="60" width="122" height="44" rx="8"/>

  </g>


  <!-- Station names -->
  <g
    fill="var(--text)"
    font-size="10.5"
    text-anchor="middle"
  >

    <text x="81" y="86">PASTE PRINT</text>

    <text x="226" y="86">SPI</text>

    <text x="371" y="86">PICK &amp; PLACE 1</text>

    <text x="516" y="86">PICK &amp; PLACE 2</text>

    <text x="661" y="86">REFLOW · N₂</text>

    <text x="806" y="86">3D AOI</text>

    <text x="951" y="86">X-RAY</text>

    <text x="1096" y="86">FCT / ICT</text>

  </g>


  <!-- Connecting lines -->
  <g
    stroke="var(--muted)"
    stroke-width="1.5"
  >

    <line x1="142" y1="82" x2="158" y2="82"/>

    <line x1="287" y1="82" x2="303" y2="82"/>

    <line x1="432" y1="82" x2="448" y2="82"/>

    <line x1="577" y1="82" x2="593" y2="82"/>

    <line x1="722" y1="82" x2="738" y2="82"/>

    <line x1="867" y1="82" x2="883" y2="82"/>

    <line x1="1012" y1="82" x2="1028" y2="82"/>

  </g>


  <!-- Arrows -->
  <g fill="var(--muted)">

    <path d="M158 78 L165 82 L158 86 Z"/>

    <path d="M303 78 L310 82 L303 86 Z"/>

    <path d="M448 78 L455 82 L448 86 Z"/>

    <path d="M593 78 L600 82 L593 86 Z"/>

    <path d="M738 78 L745 82 L738 86 Z"/>

    <path d="M883 78 L890 82 L883 86 Z"/>

    <path d="M1028 78 L1035 82 L1028 86 Z"/>

  </g>


  <!-- Digital tracking lines -->
  <g
    stroke="var(--muted)"
    stroke-width="1"
    stroke-dasharray="3 4"
    opacity=".55"
  >

    <line x1="81" y1="104" x2="81" y2="132"/>

    <line x1="226" y1="104" x2="226" y2="132"/>

    <line x1="371" y1="104" x2="371" y2="132"/>

    <line x1="516" y1="104" x2="516" y2="132"/>

    <line x1="661" y1="104" x2="661" y2="132"/>

    <line x1="806" y1="104" x2="806" y2="132"/>

    <line x1="951" y1="104" x2="951" y2="132"/>

    <line x1="1096" y1="104" x2="1096" y2="132"/>

  </g>


  <!-- Bottom production line -->
  <line
    x1="20"
    y1="132"
    x2="1157"
    y2="132"
    stroke="var(--line)"
    stroke-width="2"
  />


  <text
    x="1157"
    y="156"
    fill="var(--muted)"
    font-size="10"
    text-anchor="end"
  >
    → BOX-BUILD &amp; PACK
  </text>

</svg>


  </div>

</section>

@endsection
