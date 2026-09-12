@extends('layouts.app')

@section('title', 'Process | Flashline EMS')

@section('content')

<!-- ══════════ PROCESS ══════════ -->

<section class="section section-alt" id="process">

  <div class="section-head reveal">
    <span class="section-no">04</span>
    <h2>Industry 4.0,<br>on an actual factory floor.</h2>
    <p>Every board is digitally tracked from kit to crate.</p>
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
  <p> Every Part passes FAI with X-ray and 3D optical inspection before volume begins.</p>
</li>

<li class="reveal">
  <b>04 — Production</b>
  <p>Automated SMT lines with digital lot tracking — full traceability, zero guesswork.</p>
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
    </div>

    <svg
      viewBox="0 0 1180 355"
      role="img"
      aria-label="Two SMT production lines followed by offline process stations"
    >
      <g fill="var(--panel)" stroke="var(--line)">
        <rect x="20" y="28" width="122" height="48" rx="8"/>
        <rect x="165" y="28" width="122" height="48" rx="8"/>
        <rect x="310" y="28" width="122" height="48" rx="8"/>
        <rect x="455" y="28" width="122" height="48" rx="8"/>
        <rect x="600" y="28" width="122" height="48" rx="8"/>
        <rect x="745" y="28" width="122" height="48" rx="8" stroke="var(--copper)"/>
        <rect x="890" y="28" width="122" height="48" rx="8"/>
        <rect x="1035" y="28" width="122" height="48" rx="8"/>

        <rect x="20" y="112" width="122" height="48" rx="8"/>
        <rect x="165" y="112" width="122" height="48" rx="8"/>
        <rect x="310" y="112" width="122" height="48" rx="8"/>
        <rect x="455" y="112" width="122" height="48" rx="8"/>
        <rect x="600" y="112" width="122" height="48" rx="8"/>
        <rect x="745" y="112" width="122" height="48" rx="8" stroke="var(--copper)"/>
        <rect x="890" y="112" width="122" height="48" rx="8"/>
        <rect x="1035" y="112" width="122" height="48" rx="8"/>
      </g>

      <g fill="var(--text)" font-size="10.5" text-anchor="middle">
        <text x="81" y="51"><tspan x="81">AUTO</tspan><tspan x="81" dy="13">LOADER</tspan></text>
        <text x="226" y="51"><tspan x="226">PASTE</tspan><tspan x="226" dy="13">PRINT</tspan></text>
        <text x="371" y="57">SPI</text>
        <text x="516" y="57">PICK &amp; PLACE 1</text>
        <text x="661" y="57">PICK &amp; PLACE 2</text>
        <text x="806" y="57">REFLOW · N₂</text>
        <text x="951" y="57">3D AOI</text>
        <text x="1096" y="51"><tspan x="1096">AUTO</tspan><tspan x="1096" dy="13">UNLOADER</tspan></text>

        <text x="81" y="135"><tspan x="81">AUTO</tspan><tspan x="81" dy="13">LOADER</tspan></text>
        <text x="226" y="135"><tspan x="226">PASTE</tspan><tspan x="226" dy="13">PRINT</tspan></text>
        <text x="371" y="141">SPI</text>
        <text x="516" y="141">PICK &amp; PLACE 1</text>
        <text x="661" y="141">PICK &amp; PLACE 2</text>
        <text x="806" y="141">REFLOW · N₂</text>
        <text x="951" y="141">3D AOI</text>
        <text x="1096" y="135"><tspan x="1096">AUTO</tspan><tspan x="1096" dy="13">UNLOADER</tspan></text>
      </g>

      <g stroke="var(--muted)" stroke-width="1.5" fill="var(--muted)">
        <path d="M142 52 H158 L158 48 L165 52 L158 56 L158 52"/>
        <path d="M287 52 H303 L303 48 L310 52 L303 56 L303 52"/>
        <path d="M432 52 H448 L448 48 L455 52 L448 56 L448 52"/>
        <path d="M577 52 H593 L593 48 L600 52 L593 56 L593 52"/>
        <path d="M722 52 H738 L738 48 L745 52 L738 56 L738 52"/>
        <path d="M867 52 H883 L883 48 L890 52 L883 56 L883 52"/>
        <path d="M1012 52 H1028 L1028 48 L1035 52 L1028 56 L1028 52"/>

        <path d="M142 136 H158 L158 132 L165 136 L158 140 L158 136"/>
        <path d="M287 136 H303 L303 132 L310 136 L303 140 L303 136"/>
        <path d="M432 136 H448 L448 132 L455 136 L448 140 L448 136"/>
        <path d="M577 136 H593 L593 132 L600 136 L593 140 L593 136"/>
        <path d="M722 136 H738 L738 132 L745 136 L738 140 L738 136"/>
        <path d="M867 136 H883 L883 132 L890 136 L883 140 L883 136"/>
        <path d="M1012 136 H1028 L1028 132 L1035 136 L1028 140 L1028 136"/>
      </g>

    <!-- OFFLINE PROCESS -->
<rect x="20" y="190" width="1137" height="82" rx="8"
      fill="var(--bg-alt)"
      stroke="var(--line)"
      stroke-dasharray="4 4"/>

<text x="225" y="239"
      fill="var(--text)"
      font-size="14"
      font-weight="600"
      text-anchor="middle">
  OFFLINE PROCESS
</text>

<line x1="380" y1="202" x2="380" y2="260" stroke="var(--line)"/>

<g fill="var(--panel)" stroke="var(--copper)">
  <rect x="415" y="208" width="220" height="48" rx="8"/>
  <rect x="680" y="208" width="220" height="48" rx="8"/>
  <rect x="945" y="208" width="180" height="48" rx="8"/>
</g>

<g fill="var(--text)"
   font-size="13"
   font-weight="600"
   text-anchor="middle">
  <text x="525" y="238">X-RAY</text>
  <text x="790" y="238">FCT / ICT</text>
  <text x="1035" y="238">CONFORMAL COATING</text>
</g>

<g fill="var(--muted)"
   font-size="20"
   text-anchor="middle">
  <text x="657" y="238">→</text>
  <text x="922" y="238">→</text>
</g>
    </svg>
  </div>

</section>

@endsection
