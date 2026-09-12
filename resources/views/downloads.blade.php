@extends('layouts.app')

@section('title', 'Downloads | Flashline EMS')

<!-- ===============================================================
     DOWNLOADS PAGE CSS
     Kept unchanged; moved before @section('content') so the layout
     can render it inside <head> and prevent the unstyled flash.
================================================================ -->
@push('styles')

<style>

/* ================================================================
   DOWNLOADS PAGE
================================================================ */

.downloads-page {
    position: relative;

    max-width: 1440px;

    margin: 0 auto;
}


/* ================================================================
   PAGE INTRO
================================================================ */

.downloads-intro {
    display: grid;

    grid-template-columns: minmax(0, 1fr) 300px;

    gap: 70px;

    align-items: end;

    margin-bottom: 54px;
}


.downloads-intro-copy {
    max-width: 820px;
}


.downloads-intro-copy h1 {
    margin: 0 0 18px;

    font-family: var(--font-display);

    font-size: clamp(38px, 5vw, 62px);

    font-weight: 700;

    line-height: 1.04;

    letter-spacing: -.035em;

    color: var(--text);
}


.downloads-intro-copy h1 .accent {
    color: var(--copper);
}


.downloads-intro-copy p {
    max-width: 620px;

    margin: 0;

    color: var(--muted);

    font-size: 16px;

    line-height: 1.7;
}


/* ================================================================
   RESOURCE INDEX
================================================================ */

.downloads-index {
    min-height: 205px;

    padding: 18px 20px;

    display: flex;

    flex-direction: column;

    justify-content: space-between;

    background:
        linear-gradient(var(--grid) 1px, transparent 1px),
        linear-gradient(90deg, var(--grid) 1px, transparent 1px);

    background-size: 25px 25px;

    border: 1px solid var(--line);

    border-radius: 10px;

    box-shadow:
        0 2px 8px rgba(25,28,32,.04);
}


.downloads-index-top,
.downloads-index-bottom {
    display: flex;

    justify-content: space-between;

    align-items: center;

    font-family: var(--font-mono);

    font-size: 9px;

    letter-spacing: .10em;

    color: var(--muted);
}


.downloads-index-top span:first-child {
    color: var(--copper);

    font-weight: 600;
}


.downloads-index strong {
    display: block;

    font-family: var(--font-display);

    font-size: 76px;

    font-weight: 700;

    line-height: .8;

    letter-spacing: -.08em;

    color: var(--text);
}


.downloads-index-bottom {
    justify-content: flex-start;

    gap: 6px;

    padding-top: 12px;

    border-top: 1px solid var(--line);
}


/* ================================================================
   DOWNLOAD GRID
================================================================ */

.downloads-grid {
    display: grid;

    grid-template-columns: repeat(2, minmax(0, 1fr));

    gap: 22px;
}


/* ================================================================
   CATEGORY CARD
================================================================ */

.download-category {
    position: relative;

    min-height: 420px;

    padding: 28px;

    display: flex;

    flex-direction: column;

    background: var(--panel);

    border: 1px solid var(--line);

    border-radius: 12px;

    box-shadow:
        0 2px 8px rgba(25,28,32,.04);

    overflow: hidden;

    transition:
        transform .25s ease,
        border-color .25s ease,
        box-shadow .25s ease;
}


.download-category::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;
    height: 3px;

    background: var(--copper);

    transform: scaleX(0);

    transform-origin: left;

    transition: transform .3s ease;
}


.download-category:hover {
    transform: translateY(-4px);

    border-color: #d2c8bc;

    box-shadow:
        0 12px 30px rgba(25,28,32,.08);
}


.download-category:hover::before {
    transform: scaleX(1);
}


/* ================================================================
   CATEGORY HEADER
================================================================ */

.download-category-head {
    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 32px;
}


.download-number {
    font-family: var(--font-mono);

    font-size: 10px;

    font-weight: 600;

    letter-spacing: .10em;

    color: var(--copper);
}


.download-category-icon {
    width: 36px;

    height: 36px;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid var(--line);

    border-radius: 50%;

    font-family: var(--font-mono);

    font-size: 14px;

    color: var(--copper);

    background: var(--bg);

    transition:
        transform .25s ease,
        background .25s ease,
        border-color .25s ease;
}


.download-category:hover .download-category-icon {
    transform: rotate(8deg);

    background: rgba(201,106,30,.06);

    border-color: var(--copper);
}


/* ================================================================
   CATEGORY TITLE
================================================================ */

.download-category-title {
    margin-bottom: 28px;
}


.download-label {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    margin-bottom: 11px;

    padding: 4px 8px;

    font-family: var(--font-mono);

    font-size: 9px;

    font-weight: 600;

    letter-spacing: .11em;

    color: var(--copper);

    border: 1px solid var(--line);

    border-radius: 4px;
}


.download-label::before {
    content: "";

    width: 5px;

    height: 5px;

    border-radius: 50%;

    background: var(--copper);
}


.download-category-title h2 {
    margin: 0 0 10px;

    font-family: var(--font-display);

    font-size: clamp(26px, 3vw, 34px);

    font-weight: 700;

    line-height: 1.08;

    letter-spacing: -.025em;

    color: var(--text);
}


.download-category-title p {
    max-width: 470px;

    margin: 0;

    color: var(--muted);

    font-size: 13px;

    line-height: 1.6;
}


/* ================================================================
   DOWNLOAD LIST
================================================================ */

.download-list {
    margin-top: auto;

    border-top: 1px solid var(--line);
}


/* ================================================================
   DOWNLOAD ITEM
================================================================ */

.download-item {
    display: grid;

    grid-template-columns: 44px minmax(0, 1fr) 34px;

    align-items: center;

    gap: 14px;

    min-height: 76px;

    padding: 13px 0;

    color: var(--text);

    text-decoration: none;

    border-bottom: 1px solid var(--line);

    transition:
        padding .2s ease,
        background .2s ease;
}


.download-item:last-child {
    border-bottom: 0;
}


.download-item:hover {
    padding-left: 10px;

    padding-right: 8px;

    background: var(--bg-alt);
}


/* FILE TYPE */

.download-file-icon {
    width: 38px;

    height: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid var(--line);

    border-radius: 5px;

    font-family: var(--font-mono);

    font-size: 9px;

    font-weight: 600;

    letter-spacing: .04em;

    color: var(--copper);

    background: var(--bg);
}


/* FILE INFO */

.download-file-info {
    min-width: 0;

    display: flex;

    flex-direction: column;

    gap: 4px;
}


.download-file-info strong {
    overflow: hidden;

    font-family: var(--font-display);

    font-size: 14px;

    font-weight: 600;

    line-height: 1.25;

    white-space: nowrap;

    text-overflow: ellipsis;
}


.download-file-info small {
    overflow: hidden;

    color: var(--muted);

    font-size: 11px;

    line-height: 1.35;

    white-space: nowrap;

    text-overflow: ellipsis;
}


/* DOWNLOAD ARROW */

.download-file-arrow {
    width: 30px;

    height: 30px;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid var(--line);

    border-radius: 50%;

    font-family: var(--font-mono);

    font-size: 13px;

    color: var(--text);

    transition:
        transform .2s ease,
        color .2s ease,
        border-color .2s ease;
}


.download-item:hover .download-file-arrow {
    transform: translateY(3px);

    color: var(--copper);

    border-color: var(--copper);
}


/* ================================================================
   MEDIA CARD
================================================================ */

.download-media {
    background:
        radial-gradient(
            ellipse 80% 90% at 100% 0%,
            rgba(201,106,30,.08),
            transparent
        ),
        var(--panel);
}


/* VIDEO PREVIEW */

.download-video {
    position: relative;

    margin-top: auto;

    min-height: 116px;

    display: flex;

    align-items: center;

    gap: 16px;

    padding: 20px;

    overflow: hidden;

    border: 1px solid var(--line);

    border-radius: 9px;

    background:
        linear-gradient(rgba(25,28,32,.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(25,28,32,.035) 1px, transparent 1px);

    background-size: 22px 22px;

    transition:
        border-color .25s ease,
        background .25s ease;
}


.download-video:hover {
    border-color: var(--copper);

    background-color: rgba(201,106,30,.025);
}


.download-video-icon {
    width: 52px;

    height: 52px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid var(--copper);

    border-radius: 50%;

    font-size: 15px;

    color: var(--copper);
}


.download-video-info {
    display: flex;

    flex-direction: column;

    gap: 5px;
}


.download-video-info strong {
    font-family: var(--font-display);

    font-size: 15px;

    font-weight: 600;

    color: var(--text);
}


.download-video-info small {
    color: var(--muted);

    font-size: 11.5px;
}


.download-video-arrow {
    margin-left: auto;

    align-self: flex-start;

    font-family: var(--font-mono);

    font-size: 14px;

    color: var(--copper);
}


.download-video-link {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    margin-top: 12px;

    font-family: var(--font-mono);

    font-size: 9px;

    font-weight: 600;

    letter-spacing: .08em;

    color: var(--text);

    text-decoration: none;
}


.download-video-link span {
    color: var(--copper);

    font-size: 14px;

    transition: transform .2s ease;
}


.download-video-link:hover {
    color: var(--copper);
}


.download-video-link:hover span {
    transform: translate(3px, -3px);
}


/* ================================================================
   DOWNLOAD NOTE
================================================================ */

.downloads-note {
    display: grid;

    grid-template-columns: 48px minmax(0, 1fr) auto;

    align-items: center;

    gap: 18px;

    margin-top: 28px;

    padding: 24px 26px;

    border: 1px solid var(--line);

    border-radius: 10px;

    background:
        linear-gradient(var(--grid) 1px, transparent 1px),
        linear-gradient(90deg, var(--grid) 1px, transparent 1px);

    background-size: 30px 30px;
}


.downloads-note-mark {
    width: 42px;

    height: 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid var(--copper);

    border-radius: 50%;

    font-family: var(--font-display);

    font-size: 17px;

    color: var(--copper);

    background: var(--panel);
}


.downloads-note-content {
    display: flex;

    flex-direction: column;

    gap: 4px;
}


.downloads-note-content > span {
    font-family: var(--font-mono);

    font-size: 8.5px;

    font-weight: 600;

    letter-spacing: .12em;

    color: var(--copper);
}


.downloads-note-content strong {
    font-family: var(--font-display);

    font-size: 17px;

    font-weight: 600;

    color: var(--text);
}


.downloads-note-content p {
    margin: 0;

    color: var(--muted);

    font-size: 12.5px;

    line-height: 1.5;
}


.downloads-note .btn {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    white-space: nowrap;
}


.downloads-note .btn span {
    font-size: 14px;
}


/* ================================================================
   TABLET
================================================================ */

@media (max-width: 950px) {

    .downloads-intro {
        grid-template-columns: 1fr;

        gap: 30px;
    }


    .downloads-index {
        min-height: 140px;

        display: grid;

        grid-template-columns: 1fr auto;

        grid-template-rows: auto 1fr auto;

        align-items: center;
    }


    .downloads-index strong {
        grid-column: 2;

        grid-row: 1 / span 3;

        font-size: 68px;
    }


    .downloads-index-top {
        grid-column: 1;

        grid-row: 1;
    }


    .downloads-index-bottom {
        grid-column: 1;

        grid-row: 3;
    }


    .downloads-grid {
        grid-template-columns: 1fr;
    }

}


/* ================================================================
   MOBILE
================================================================ */

@media (max-width: 650px) {

    .downloads-intro {
        margin-bottom: 36px;
    }


    .downloads-intro-copy h1 {
        font-size: 40px;
    }


    .downloads-intro-copy p {
        font-size: 15px;
    }


    .downloads-index {
        min-height: 125px;

        padding: 15px 17px;
    }


    .downloads-index strong {
        font-size: 58px;
    }


    .download-category {
        min-height: auto;

        padding: 22px;
    }


    .download-category-head {
        margin-bottom: 25px;
    }


    .download-category-title {
        margin-bottom: 25px;
    }


    .download-category-title h2 {
        font-size: 29px;
    }


    .download-item {
        grid-template-columns: 40px minmax(0, 1fr) 30px;

        gap: 11px;
    }


    .download-file-icon {
        width: 36px;

        height: 36px;
    }


    .download-file-info strong {
        font-size: 13px;
    }


    .download-file-info small {
        font-size: 10.5px;
    }


    .downloads-note {
        grid-template-columns: 42px 1fr;

        gap: 14px;

        padding: 20px;
    }


    .downloads-note .btn {
        grid-column: 1 / -1;

        width: 100%;

        justify-content: center;
    }

}


/* ================================================================
   SMALL MOBILE
================================================================ */

@media (max-width: 420px) {

    .downloads-intro-copy h1 {
        font-size: 34px;
    }


    .download-category {
        padding: 19px;
    }


    .download-category-title h2 {
        font-size: 26px;
    }


    .download-video {
        padding: 15px;

        gap: 12px;
    }


    .download-video-icon {
        width: 45px;

        height: 45px;
    }

}

</style>

@endpush

@section('content')

<!-- ═══════════════════════════════════════════════════════════════
     DOWNLOADS / RESOURCE CENTRE
═══════════════════════════════════════════════════════════════ -->

<section class="section" id="downloads">


    <!-- ═══════════════════════════════════════════════════════════
         PAGE INTRO
    ═══════════════════════════════════════════════════════════ -->

         <div class="section-head reveal">
    <span class="section-no">09</span>
   <h2> Downloads.<br>Resources, ready when you need them.</h2>
    <p> Access Flashline EMS company information, capability
                documents, certifications, equipment portfolios and
                facility resources.</p>
  </div>




    <!-- ═══════════════════════════════════════════════════════════
         RESOURCE GRID
    ═══════════════════════════════════════════════════════════ -->

    <div class="downloads-grid">


        <!-- ═══════════════════════════════════════════════════════
             COMPANY
        ═══════════════════════════════════════════════════════ -->

        <article class="download-category reveal">

            <div class="download-category-head">

                <span class="download-number">
                    D/01
                </span>

                <span class="download-category-icon">
                    ↘
                </span>

            </div>


            <div class="download-category-title">

                <span class="download-label">
                    COMPANY
                </span>

                <h2>
                    Company &amp;<br>
                    Corporate
                </h2>

                <p>
                    Company information and corporate material
                    for customers, partners and stakeholders.
                </p>

            </div>


            <div class="download-list">


                <!-- COMPANY PROFILE -->

                <a
                    href="{{ asset('assets/downloads/flashline-ems-company-profile.pdf') }}"
                    class="download-item"
                    target="_blank"
                    rel="noopener"
                    download
                >

                    <span class="download-file-icon">
                        PDF
                    </span>


                    <span class="download-file-info">

                        <strong>
                            Flashline EMS Company Profile
                        </strong>

                        <small>
                            Company overview &amp; capabilities
                        </small>

                    </span>


                    <span class="download-file-arrow">
                        ↓
                    </span>

                </a>



                <!-- CORPORATE BROCHURE -->

                <a
                    href="{{ asset('assets/downloads/flashline-ems-brochure.pdf') }}"
                    class="download-item"
                    target="_blank"
                    rel="noopener"
                    download
                >

                    <span class="download-file-icon">
                        PDF
                    </span>


                    <span class="download-file-info">

                        <strong>
                            Flashline EMS Brochure
                        </strong>

                        <small>
                            Corporate &amp; manufacturing overview
                        </small>

                    </span>


                    <span class="download-file-arrow">
                        ↓
                    </span>

                </a>

            </div>

        </article>



        <!-- ═══════════════════════════════════════════════════════
             CERTIFICATIONS
        ═══════════════════════════════════════════════════════ -->

        <article class="download-category reveal">

            <div class="download-category-head">

                <span class="download-number">
                    D/02
                </span>

                <span class="download-category-icon">
                    ✓
                </span>

            </div>


            <div class="download-category-title">

                <span class="download-label">
                    QUALITY
                </span>

                <h2>
                    Certifications<br>
                    &amp; Compliance
                </h2>

                <p>
                    Quality and industry certification documents
                    supporting our manufacturing standards.
                </p>

            </div>


            <div class="download-list">


                <!-- CERTIFICATE 01 -->

                <a
                    href="{{ asset('assets/downloads/certification-01.pdf') }}"
                    class="download-item"
                    target="_blank"
                    rel="noopener"
                    download
                >

                    <span class="download-file-icon">
                        PDF
                    </span>


                    <span class="download-file-info">

                        <strong>
                            Quality Certification
                        </strong>

                        <small>
                            Certificate document
                        </small>

                    </span>


                    <span class="download-file-arrow">
                        ↓
                    </span>

                </a>



                <!-- CERTIFICATE 02 -->

                <a
                    href="{{ asset('assets/downloads/certification-02.pdf') }}"
                    class="download-item"
                    target="_blank"
                    rel="noopener"
                    download
                >

                    <span class="download-file-icon">
                        PDF
                    </span>


                    <span class="download-file-info">

                        <strong>
                            Industry Certification
                        </strong>

                        <small>
                            Certificate document
                        </small>

                    </span>


                    <span class="download-file-arrow">
                        ↓
                    </span>

                </a>

            </div>

        </article>



        <!-- ═══════════════════════════════════════════════════════
             CAPABILITIES
        ═══════════════════════════════════════════════════════ -->

        <article class="download-category reveal">

            <div class="download-category-head">

                <span class="download-number">
                    D/03
                </span>

                <span class="download-category-icon">
                    ↗
                </span>

            </div>


            <div class="download-category-title">

                <span class="download-label">
                    CAPABILITIES
                </span>

                <h2>
                    Equipment &amp;<br>
                    Capabilities
                </h2>

                <p>
                    Technical information covering equipment,
                    manufacturing capabilities and processes.
                </p>

            </div>


            <div class="download-list">


                <!-- EQUIPMENT PORTFOLIO -->

                <a
                    href="{{ asset('assets/downloads/flashline-ems-equipment-portfolio.pdf') }}"
                    class="download-item"
                    target="_blank"
                    rel="noopener"
                    download
                >

                    <span class="download-file-icon">
                        PDF
                    </span>


                    <span class="download-file-info">

                        <strong>
                            Equipment Portfolio
                        </strong>

                        <small>
                            Manufacturing equipment &amp; line capabilities
                        </small>

                    </span>


                    <span class="download-file-arrow">
                        ↓
                    </span>

                </a>



                <!-- CAPABILITY DOCUMENT -->

                <a
                    href="{{ asset('assets/downloads/flashline-ems-capabilities.pdf') }}"
                    class="download-item"
                    target="_blank"
                    rel="noopener"
                    download
                >

                    <span class="download-file-icon">
                        PDF
                    </span>


                    <span class="download-file-info">

                        <strong>
                            Manufacturing Capabilities
                        </strong>

                        <small>
                            PCB fabrication, assembly &amp; box build
                        </small>

                    </span>


                    <span class="download-file-arrow">
                        ↓
                    </span>

                </a>

            </div>

        </article>



        <!-- ═══════════════════════════════════════════════════════
             MEDIA
        ═══════════════════════════════════════════════════════ -->

        <article class="download-category download-media reveal">

            <div class="download-category-head">

                <span class="download-number">
                    D/04
                </span>

                <span class="download-category-icon">
                    ▶
                </span>

            </div>


            <div class="download-category-title">

                <span class="download-label">
                    MEDIA
                </span>

                <h2>
                    Facility<br>
                    &amp; Video Tour
                </h2>

                <p>
                    Explore the Flashline EMS facility and
                    manufacturing environment through video.
                </p>

            </div>


            <!-- VIDEO -->

            <div class="download-video">

                <div class="download-video-icon">
                    ▶
                </div>

                <div class="download-video-info">

                    <strong>
                        Flashline EMS Facility Tour
                    </strong>

                    <small>
                        Explore our manufacturing facility
                    </small>

                </div>

                <span class="download-video-arrow">
                    ↗
                </span>

            </div>


            <a
                href="#"
                class="download-video-link"
            >
                Watch / View Tour
                <span>↗</span>
            </a>

        </article>

    </div>



    <!-- ═══════════════════════════════════════════════════════════
         RESOURCE NOTE
    ═══════════════════════════════════════════════════════════ -->

    <div class="downloads-note reveal">

        <div class="downloads-note-mark">
            i
        </div>


        <div class="downloads-note-content">

            <span>
                DOCUMENT REQUEST
            </span>

            <strong>
                Need a specific document?
            </strong>

            <p>
                If you need additional technical documentation,
                certifications or company information, contact
                the Flashline EMS team.
            </p>

        </div>


        <a
            href="{{ route('contact') }}"
            class="btn btn-solid"
        >
            Contact Us
            <span>↗</span>
        </a>

    </div>


</section>



<!-- ═══════════════════════════════════════════════════════════════
     DOWNLOADS PAGE CSS
═══════════════════════════════════════════════════════════════ -->

@endsection
