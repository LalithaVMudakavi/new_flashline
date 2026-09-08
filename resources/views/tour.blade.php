@extends('layouts.app')

@section('title', 'Virtual Tour | Flashline EMS')

@section('content')

<!-- ══════════ VIRTUAL TOUR ══════════ -->

<section class="section" id="tour">

  <div class="section-head reveal">
    <span class="section-no">05</span>


<h2>Walk the floor,<br>from wherever you are.</h2>

<p>
  A full 3D scan of the facility — step through the SMT lines, inspection bays
  and box-build area exactly as they stand today. No appointment needed.
</p>


  </div>

  <!-- ══════════ MATTERPORT TOUR ══════════ -->

  <div class="tour-frame reveal" id="tourFrame">


<button
  type="button"
  class="tour-launch"
  id="tourLaunch"
  aria-label="Launch the 3D virtual factory tour"
>

  <span class="tour-ring">
    <svg
      viewBox="0 0 24 24"
      width="26"
      height="26"
      aria-hidden="true"
    >
      <path
        d="M8 5v14l11-7z"
        fill="currentColor"
      />
    </svg>
  </span>

  <span class="tour-label">
    Launch 3D Factory Tour
  </span>

  <span class="tour-sub">
    MATTERPORT · INTERACTIVE WALKTHROUGH
  </span>

</button>


  </div>

  <p class="tour-note reveal">


Drag to look around, click the floor to walk — use the ⛶ button to go fullscreen.

Prefer an in-person visit?

<a
  href="mailto:sales@flashlineems.com?subject=Factory%20Tour%20Request"
>
  Book a tour →
</a>

  </p>

</section>

@endsection
