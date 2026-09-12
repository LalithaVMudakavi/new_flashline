@extends('layouts.app')

@section('title', 'Virtual Tour | Flashline EMS')

@section('content')

<!-- ══════════ VIRTUAL TOUR ══════════ -->
<section class="section" id="tour">

    <div class="section-head reveal">
        <span class="section-no">06</span>

        <h2>
            Walk the floor,<br>
            from wherever you are.
        </h2>

        <p>
            A full 3D scan of the facility — 
            step through the SMT Lines,Through Hole Lines, inspection bays exactly as they stand today.
            No appointment needed.
        </p>
    </div>


    <!-- TOUR FRAME -->
    <div class="tour-frame reveal" id="tourFrame">

        <!-- Launch Button -->
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

        Drag to look around, click the floor to walk — use the ⛶ button
        to go fullscreen.

        Prefer an in-person visit?

        <a
            href="mailto:sales@flashlineems.com?subject=Factory%20Tour%20Request"
        >
            Book a tour →
        </a>

    </p>

</section>


@endsection


@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const tourFrame = document.getElementById('tourFrame');
    const tourLaunch = document.getElementById('tourLaunch');

    if (!tourFrame || !tourLaunch) return;


    tourLaunch.addEventListener('click', function () {

        /*
        ==================================================
        IMPORTANT:
        Replace the URL below with your ACTUAL Matterport
        tour URL.
        ==================================================
        */

        const tourUrl = 'https://my.matterport.com/show/?m=VhFFHZLeawr';


        const iframe = document.createElement('iframe');

        iframe.src = tourUrl;

        iframe.title = 'Flashline EMS 3D Factory Tour';

        iframe.allow =
            'fullscreen; xr-spatial-tracking; autoplay';

        iframe.allowFullscreen = true;

        iframe.loading = 'lazy';

        iframe.style.width = '100%';

        iframe.style.height = '100%';

        iframe.style.border = '0';


        tourFrame.innerHTML = '';

        tourFrame.appendChild(iframe);

        tourFrame.classList.add('tour-active');

    });

});

</script>

@endpush