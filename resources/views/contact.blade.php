@extends('layouts.app')

@section('title', 'Contact | Flashline EMS')

@section('content')

<!-- ══════════ CONTACT ══════════ -->

<section class="section section-contact" id="contact">

    <!-- SECTION HEADER -->
    <div class="section-head reveal">

        <span class="section-no">07</span>

        <h2>
            Have a board to build?
        </h2>

        <p>
            Tell us about your project — we'll come back with a DFM review
            and a quote. You can email Gerbers and BOM once we reply.
        </p>

    </div>


    <!-- CONTACT CONTENT -->
    <div class="contact-grid">

        <!-- CONTACT FORM -->
        <form
            class="contact-form reveal"
            id="contactForm"
            action="https://formsubmit.co/sales@flashlineems.com"
            method="POST"
            novalidate
        >

            <input
                type="hidden"
                name="_subject"
                value="Business enquiry — flashlineems.com"
            >

            <!-- Honeypot -->
            <input
                type="text"
                name="_honey"
                class="hp"
                tabindex="-1"
                autocomplete="off"
                aria-hidden="true"
            >


            <!-- NAME + COMPANY -->
            <div class="ff-row">

                <label class="ff">

                    <span>Name *</span>

                    <input
                        type="text"
                        name="name"
                        required
                        autocomplete="name"
                        placeholder="Your name"
                    >

                </label>


                <label class="ff">

                    <span>Company *</span>

                    <input
                        type="text"
                        name="company"
                        required
                        autocomplete="organization"
                        placeholder="Company name"
                    >

                </label>

            </div>


            <!-- EMAIL + PHONE -->
            <div class="ff-row">

                <label class="ff">

                    <span>Business email *</span>

                    <input
                        type="email"
                        name="email"
                        required
                        autocomplete="email"
                        placeholder="you@company.com"
                    >

                </label>


                <label class="ff">

                    <span>Phone</span>

                    <input
                        type="tel"
                        name="phone"
                        autocomplete="tel"
                        placeholder="+91 ..."
                    >

                </label>

            </div>


            <!-- ENQUIRY TYPE + VOLUME -->
            <div class="ff-row">

                <label class="ff">

                    <span>Enquiry type *</span>

                    <select
                        name="enquiry_type"
                        required
                    >
                        <option value="" disabled selected>
                            Select...
                        </option>

                        <option>PCB Assembly</option>
                        <option>PCB Fabrication</option>
                        <option>Box Build / Turnkey</option>
                        <option>Engineering Design / DFM</option>
                        <option>Factory tour / Meeting</option>
                        <option>Other</option>

                    </select>

                </label>


                <label class="ff">

                    <span>Estimated volume</span>

                    <select name="estimated_volume">

                        <option value="" selected>
                            Not sure yet
                        </option>

                        <option>Prototype (&lt; 50)</option>
                        <option>50 – 1,000</option>
                        <option>1,000 – 10,000</option>
                        <option>10,000+</option>

                    </select>

                </label>

            </div>


            <!-- PROJECT DETAILS -->
            <label class="ff ff-full">

                <span>Project details *</span>

                <textarea
                    name="message"
                    rows="5"
                    required
                    placeholder="Board type, layer count, quantities, timeline — whatever you have."
                ></textarea>

            </label>


            <!-- SUBMIT -->
            <button
                type="submit"
                class="btn btn-solid"
                id="contactSubmit"
            >
                Send Enquiry
            </button>


            <!-- FORM STATUS -->
            <p
                class="form-status"
                id="formStatus"
                role="status"
            ></p>

        </form>


        <aside class="contact-aside reveal">

            <div class="contact-info-block">

                <h3>Direct lines</h3>

                <a
                    class="contact-link"
                    href="mailto:sales@flashlineems.com"
                >
                    sales@flashlineems.com
                </a>

                <a
                    class="contact-link"
                    href="tel:+918121020371"
                >
                    +91 81210 20371
                </a>

            </div>


            <div class="contact-info-block">

                <h3>Visit us</h3>

                <p class="addr">

                    Flashline EMS Private Limited<br>

                    Sy No 78 &amp; 81, Plot S58–S59, E-City,<br>

                    Raviryala, Maheswaram Industrial Area,<br>

                    Rangareddy — 501359,<br>

                    Telangana, India

                </p>

            </div>


            <div class="aside-links">

                <a href="{{ route('tour') }}">
                    Take the 3D virtual tour →
                </a>

                <a href="{{ url('/') }}#event">
                    Meet us at electronica India 2026 →
                </a>

            </div>

        </aside>

    </div>

</section>

@endsection