<header class="rail" id="rail">

    <a class="rail-logo" href="{{ route('home') }}" aria-label="Flashline EMS home">
        <svg viewBox="0 0 32 32" width="34" height="34" aria-hidden="true">
            <rect width="32" height="32" rx="6" fill="none" stroke="var(--copper)" stroke-width="1.5"/>
            <path d="M8 22 L14 10 L18 10 L12 22 Z M15 22 L21 10 L24 10 L18 22 Z"
                  fill="var(--copper)"/>
        </svg>

        <span class="rail-logo-text">
            FLASHLINE<em>EMS</em>
        </span>
    </a>

    <button
        type="button"
        class="rail-toggle"
        id="navToggle"
        aria-label="Toggle menu"
        aria-expanded="false"
    >
        <span></span>
        <span></span>
        <span></span>
    </button>

    <nav class="rail-nav" id="railNav" aria-label="Main">
         <a href="{{ route('company') }}"
           class="{{ request()->routeIs('company') ? 'active' : '' }}">
            <i>01</i>Company
        </a>

        <a href="{{ route('services') }}"
           class="{{ request()->routeIs('services') ? 'active' : '' }}">
            <i>02</i>Services
        </a>

        <a href="{{ route('capabilities') }}"
           class="{{ request()->routeIs('capabilities') ? 'active' : '' }}">
            <i>03</i>Capabilities
        </a>

         <a href="{{ route('process') }}"
           class="{{ request()->routeIs('process') ? 'active' : '' }}">
            <i>04</i>Process
        </a>

        <a href="{{ route('industries') }}"
           class="{{ request()->routeIs('industries') ? 'active' : '' }}">
            <i>05</i>Industries
        </a>


        <a href="{{ route('tour') }}"
           class="{{ request()->routeIs('tour') ? 'active' : '' }}">
            <i>06</i>Virtual Tour
        </a>

        <a href="{{ route('contact') }}"
           class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            <i>07</i>Contact
        </a>

        <a href="{{ route('event-news') }}"
           class="{{ request()->routeIs('event-news') ? 'active' : '' }}">
            <i>08</i>News
        </a>

         <a href="{{ route('downloads') }}"
           class="{{ request()->routeIs('downloads') ? 'active' : '' }}">
            <i>09</i>Downloads
        </a>

    </nav>

    <div class="rail-foot">
        <a class="rail-cta" href="{{ route('contact') }}">
            Get a Quote
        </a>

        <p class="rail-meta">
            ISO 9001 · AS9100D<br>
            IPC-certified technicians
        </p>
    </div>

</header>
