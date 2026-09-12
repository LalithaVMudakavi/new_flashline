@extends('layouts.app')

@section('title', 'News | Flashline EMS')

@section('content')

<!-- ═══════════════════════════════════════════════════════════════
     EVENT NEWS
═══════════════════════════════════════════════════════════════ -->

<section class="section" id="event-news">

    <!-- ═══════════════════════════════════════════════════════════
         NEWS HEADER
    ═══════════════════════════════════════════════════════════ -->

    <div class="news-header reveal">

        <div class="news-header-main">

            <span class="section-no">08</span>

            <h2>
                News.<br>
                What's happening at Flashline.
            </h2>

            <p>
                Follow our exhibitions, manufacturing milestones,
                engineering updates and the latest from the
                Flashline EMS floor.
            </p>

        </div>

    </div>


    <!-- ═══════════════════════════════════════════════════════════
         FEATURED NEWS
    ═══════════════════════════════════════════════════════════ -->

    <article class="news-feature reveal" id="featured-event">

        <!-- IMAGE -->

        <div class="news-feature-image">

            <img
                src="{{ asset('assets/event-booth.jpg') }}"
                alt="Flashline EMS exhibition booth at BIEC Bengaluru"
            >

            <div class="news-image-overlay">

                <div>
                    <span>FLASHLINE EMS</span>
                    <strong>NEWS / 01</strong>
                </div>

                <span class="news-image-arrow">
                    ↗
                </span>

            </div>

        </div>


        <!-- CONTENT -->

        <div class="news-feature-content">

            <div class="news-feature-meta">

                <span class="news-status">
                    UPCOMING EVENT
                </span>

                <span class="news-feature-date">
                    SEP 16–18, 2026
                </span>

            </div>


            <h2>
                Meet us at
                <span>
                    electronica India &amp;
                    productronica India 2026
                </span>
            </h2>


            <p class="news-feature-intro">
                Come see how we take a product from bare board to
                box build — with live demonstrations, our engineering
                team on the floor and a first look at our latest
                manufacturing capabilities.
            </p>


            <!-- EVENT DETAILS -->

            <div class="news-event-details">

                <div class="news-event-detail">

                    <span>VENUE</span>

                    <strong>
                        BIEC
                    </strong>

                </div>


                <div class="news-event-detail">

                    <span>LOCATION</span>

                    <strong>
                        BENGALURU
                    </strong>

                </div>


                <div class="news-event-detail">

                    <span>BOOTH</span>

                    <strong>
                        HALL 4 · H4.F122
                    </strong>

                </div>

            </div>


            <!-- ACTIONS -->

            <div class="news-feature-actions">

                <a
                    class="btn btn-solid"
                    href="https://mmiconnect.in/app/catalogue/exhibitor-detail/ep-blr-2026/123/87a1093b-3367-4a1f-8e1d-cd2f6efb81dd"
                    target="_blank"
                    rel="noopener"
                >
                    View Exhibitor Profile
                    <span>↗</span>
                </a>


                <a
                    class="btn btn-ghost"
                    href="mailto:sales@flashlineems.com?subject=Meeting%20at%20electronica%20India%202026%20(Booth%20H4.F122)"
                >
                    Book a Booth Meeting
                </a>

            </div>

        </div>

    </article>


    <!-- ═══════════════════════════════════════════════════════════
         LATEST UPDATES
    ═══════════════════════════════════════════════════════════ -->

    <div class="news-latest-header reveal">

        <div class="news-latest-title">

            <span class="news-label">
                LATEST UPDATES
            </span>

            <h2>
                From the Flashline floor.
            </h2>

        </div>


        <p>
            Exhibitions, capability announcements and company
            updates will be added here as they happen.
        </p>

    </div>


    <!-- ═══════════════════════════════════════════════════════════
         NEWS LIST
    ═══════════════════════════════════════════════════════════ -->

    <div class="news-list">


        <!-- ═══════════════════════════════════════════════════════
             NEWS 01
        ═══════════════════════════════════════════════════════ -->

        <article class="news-list-item reveal">

            <div class="news-list-index">
                N/01
            </div>


            <div class="news-list-date">

                <span>SEP</span>

                <strong>16</strong>

                <small>2026</small>

            </div>


            <div class="news-list-content">

                <div class="news-list-meta">

                    <span>
                        EVENT
                    </span>

                    <span>
                        UPCOMING
                    </span>

                </div>


                <h3>
                    electronica India &amp;
                    productronica India 2026
                </h3>


                <p>
                    Visit Flashline EMS at BIEC, Bengaluru,
                    Hall 4 · Booth H4.F122.
                </p>

            </div>


            <div class="news-list-action">

                <a
                    href="#featured-event"
                    class="news-read"
                >
                    View Feature
                    <span>↗</span>
                </a>

            </div>

        </article>



        <!-- ═══════════════════════════════════════════════════════
             NEXT UPDATE
        ═══════════════════════════════════════════════════════ -->

        <article class="news-list-item news-list-placeholder reveal">

            <div class="news-list-index">
                N/02
            </div>


            <div class="news-list-placeholder-copy">

                <span>
                    NEXT UPDATE
                </span>

                <strong>
                    More Flashline EMS news coming soon.
                </strong>

                <p>
                    Manufacturing milestones, engineering
                    developments and future events will appear here.
                </p>

            </div>


            <div class="news-list-placeholder-mark">
                +
            </div>

        </article>

    </div>


    <!-- ═══════════════════════════════════════════════════════════
         BOTTOM CTA
    ═══════════════════════════════════════════════════════════ -->

    <div class="news-cta reveal">

        <div class="news-cta-copy">

            <span>
                STAY IN THE LOOP
            </span>

            <h2>
                Have a question about
                our latest update?
            </h2>

            <p>
                Talk to our team about exhibitions,
                manufacturing capabilities or your next project.
            </p>

        </div>


        <a
            class="btn btn-solid"
            href="{{ route('contact') }}"
        >
            Talk to Our Team
            <span>↗</span>
        </a>

    </div>

</section>

@endsection



@push('styles')

<style>

/* ═══════════════════════════════════════════════════════════════
   FLASHLINE EMS
   EVENT NEWS PAGE
═══════════════════════════════════════════════════════════════ */


/* ═══════════════════════════════════════════════════════════════
   PAGE
═══════════════════════════════════════════════════════════════ */

.event-news-page {
    position: relative;

    max-width: 1440px;

    margin: 0 auto;
}


/* ═══════════════════════════════════════════════════════════════
   NEWS HEADER
═══════════════════════════════════════════════════════════════ */

.news-header {
    display: block;

    margin-bottom: 42px;
}


.news-header-main {
    max-width: 820px;
}


.news-header-main .section-no {
    margin-bottom: 20px;
}


.news-header-main h2 {
    margin-bottom: 16px;
}


.news-header-main p {
    max-width: 600px;

    color: var(--muted);

    font-size: 17px;

    line-height: 1.7;
}


/* ═══════════════════════════════════════════════════════════════
   FEATURED NEWS
═══════════════════════════════════════════════════════════════ */

.news-feature {
    display: grid;

    grid-template-columns: 1.06fr .94fr;

    min-height: 430px;

    overflow: hidden;

    background: #101418;

    border: 1px solid #252c33;

    border-radius: 14px;

    box-shadow:
        0 12px 35px rgba(25, 28, 32, .10);
}


/* ═══════════════════════════════════════════════════════════════
   FEATURE IMAGE
═══════════════════════════════════════════════════════════════ */

.news-feature-image {
    position: relative;

    min-height: 430px;

    overflow: hidden;

    margin: 0;

    background: #171b1f;

    border-right: 1px solid rgba(255,255,255,.08);
}


.news-feature-image::after {
    content: "";

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            180deg,
            rgba(10,13,16,.02) 25%,
            rgba(10,13,16,.78) 100%
        );

    pointer-events: none;
}


.news-feature-image img {
    display: block;

    width: 100%;

    height: 100%;

    object-fit: cover;

    transition:
        transform .65s ease;
}


.news-feature:hover .news-feature-image img {
    transform: scale(1.025);
}


/* ═══════════════════════════════════════════════════════════════
   IMAGE OVERLAY
═══════════════════════════════════════════════════════════════ */

.news-image-overlay {
    position: absolute;

    left: 22px;

    right: 22px;

    bottom: 20px;

    z-index: 2;

    display: flex;

    justify-content: space-between;

    align-items: flex-end;
}


.news-image-overlay div {
    display: flex;

    flex-direction: column;

    gap: 5px;
}


.news-image-overlay span,
.news-image-overlay strong {
    font-family: var(--font-mono);

    letter-spacing: .10em;
}


.news-image-overlay span {
    font-size: 9px;

    color: #cbd1d6;
}


.news-image-overlay strong {
    font-size: 11px;

    color: #fff;
}


.news-image-arrow {
    width: 38px;

    height: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid rgba(255,255,255,.25);

    border-radius: 50%;

    color: #fff;

    background: rgba(10,13,16,.42);

    backdrop-filter: blur(6px);

    transition:
        background .2s ease,
        border-color .2s ease;
}


.news-feature:hover .news-image-arrow {
    border-color: rgba(232,133,61,.65);

    background: rgba(201,106,30,.18);
}


/* ═══════════════════════════════════════════════════════════════
   FEATURE CONTENT
═══════════════════════════════════════════════════════════════ */

.news-feature-content {
    display: flex;

    flex-direction: column;

    justify-content: center;

    padding: clamp(30px, 4vw, 50px);

    background:
        radial-gradient(
            ellipse 80% 80% at 100% 0%,
            rgba(232,133,61,.09),
            transparent
        ),
        #101418;
}


.news-feature-meta {
    display: flex;

    align-items: center;

    gap: 12px;

    flex-wrap: wrap;

    margin-bottom: 20px;

    font-family: var(--font-mono);

    font-size: 10px;

    letter-spacing: .10em;
}


.news-status {
    display: inline-flex;

    align-items: center;

    padding: 5px 9px;

    color: #7ddba4;

    border: 1px solid rgba(125,219,164,.35);

    border-radius: 4px;

    background: rgba(21,127,70,.14);
}


.news-feature-date {
    color: #aab3bb;
}


.news-feature h2 {
    max-width: 570px;

    margin: 0 0 18px;

    font-family: var(--font-display);

    font-size: clamp(28px, 3vw, 42px);

    font-weight: 700;

    line-height: 1.08;

    letter-spacing: -.025em;

    color: #f2efe9;
}


.news-feature h2 span {
    color: #e8853d;
}


.news-feature-intro {
    max-width: 540px;

    margin: 0 0 24px;

    color: #b9c1c8;

    font-size: 15px;

    line-height: 1.7;
}


/* ═══════════════════════════════════════════════════════════════
   EVENT DETAILS
═══════════════════════════════════════════════════════════════ */

.news-event-details {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    margin-bottom: 24px;

    border-top: 1px solid rgba(255,255,255,.11);

    border-bottom: 1px solid rgba(255,255,255,.11);
}


.news-event-detail {
    padding: 13px 12px;

    border-right: 1px solid rgba(255,255,255,.11);
}


.news-event-detail:first-child {
    padding-left: 0;
}


.news-event-detail:last-child {
    border-right: 0;
}


.news-event-detail span {
    display: block;

    margin-bottom: 6px;

    font-family: var(--font-mono);

    font-size: 8.5px;

    letter-spacing: .10em;

    color: #7f8992;
}


.news-event-detail strong {
    display: block;

    font-family: var(--font-mono);

    font-size: 10.5px;

    letter-spacing: .03em;

    color: #f2efe9;
}


/* ═══════════════════════════════════════════════════════════════
   FEATURE BUTTONS
═══════════════════════════════════════════════════════════════ */

.news-feature-actions {
    display: flex;

    flex-wrap: wrap;

    gap: 10px;
}


.news-feature-actions .btn {
    display: inline-flex;

    align-items: center;

    gap: 8px;
}


.news-feature-actions .btn span {
    font-size: 14px;
}


.news-feature .btn-solid {
    background: #e8853d;

    color: #0c0e10;
}


.news-feature .btn-solid:hover {
    background: #f0a468;
}


.news-feature .btn-ghost {
    color: #f2efe9;

    border-color: rgba(255,255,255,.25);
}


.news-feature .btn-ghost:hover {
    border-color: #e8853d;
}


/* ═══════════════════════════════════════════════════════════════
   LATEST UPDATES HEADER
═══════════════════════════════════════════════════════════════ */

.news-latest-header {
    display: flex;

    justify-content: space-between;

    align-items: flex-end;

    gap: 50px;

    margin-top: 54px;

    margin-bottom: 24px;

    padding-top: 0;
}


.news-latest-title {
    min-width: 0;
}


.news-label {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 5px 9px;

    font-family: var(--font-mono);

    font-size: 10px;

    font-weight: 600;

    letter-spacing: .12em;

    color: var(--copper);

    border: 1px solid var(--line);

    border-radius: 4px;

    background: rgba(201,106,30,.025);
}


.news-label::before {
    content: "";

    width: 5px;

    height: 5px;

    flex-shrink: 0;

    border-radius: 50%;

    background: var(--copper);
}


.news-latest-title h2 {
    margin: 12px 0 0;

    font-family: var(--font-display);

    font-size: clamp(30px, 3.6vw, 42px);

    font-weight: 700;

    line-height: 1.08;

    letter-spacing: -.02em;

    color: var(--text);
}


.news-latest-header > p {
    max-width: 410px;

    margin: 0;

    color: var(--muted);

    font-size: 14.5px;

    line-height: 1.65;
}


/* ═══════════════════════════════════════════════════════════════
   NEWS LIST
═══════════════════════════════════════════════════════════════ */

.news-list {
    border-top: 1px solid var(--line);
}


.news-list-item {
    display: grid;

    grid-template-columns: 72px 92px minmax(0, 1fr) 140px;

    align-items: center;

    gap: 24px;

    min-height: 132px;

    padding: 20px 14px;

    border-bottom: 1px solid var(--line);

    transition:
        background .25s ease,
        padding .25s ease,
        border-color .25s ease;
}


.news-list-item:hover {
    padding-left: 20px;

    padding-right: 20px;

    background: var(--panel);

    border-color: #d5cfc4;
}


/* ═══════════════════════════════════════════════════════════════
   NEWS INDEX
═══════════════════════════════════════════════════════════════ */

.news-list-index {
    align-self: flex-start;

    padding-top: 5px;

    font-family: var(--font-mono);

    font-size: 10px;

    font-weight: 600;

    letter-spacing: .08em;

    color: var(--copper);
}


/* ═══════════════════════════════════════════════════════════════
   NEWS DATE
═══════════════════════════════════════════════════════════════ */

.news-list-date {
    display: flex;

    flex-direction: column;

    font-family: var(--font-mono);

    line-height: 1;
}


.news-list-date span {
    margin-bottom: 5px;

    font-size: 9px;

    font-weight: 600;

    letter-spacing: .10em;

    color: var(--muted);
}


.news-list-date strong {
    font-size: 32px;

    font-weight: 500;

    letter-spacing: -.03em;

    color: var(--text);
}


.news-list-date small {
    margin-top: 5px;

    font-size: 9px;

    color: var(--muted);
}


/* ═══════════════════════════════════════════════════════════════
   NEWS CONTENT
═══════════════════════════════════════════════════════════════ */

.news-list-content {
    min-width: 0;
}


.news-list-meta {
    display: flex;

    gap: 10px;

    margin-bottom: 7px;

    font-family: var(--font-mono);

    font-size: 8.5px;

    font-weight: 600;

    letter-spacing: .10em;
}


.news-list-meta span:first-child {
    color: var(--copper);
}


.news-list-meta span:last-child {
    color: var(--green);
}


.news-list-content h3 {
    margin: 0 0 6px;

    font-family: var(--font-display);

    font-size: 20px;

    font-weight: 600;

    line-height: 1.2;

    color: var(--text);
}


.news-list-content p {
    margin: 0;

    color: var(--muted);

    font-size: 13.5px;

    line-height: 1.55;
}


/* ═══════════════════════════════════════════════════════════════
   NEWS ACTION
═══════════════════════════════════════════════════════════════ */

.news-list-action {
    justify-self: end;
}


.news-read {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 8px 0;

    font-family: var(--font-mono);

    font-size: 9.5px;

    font-weight: 600;

    letter-spacing: .07em;

    color: var(--text);

    text-decoration: none;

    transition:
        color .2s ease,
        gap .2s ease;
}


.news-read span {
    color: var(--copper);

    font-size: 14px;
}


.news-read:hover {
    gap: 11px;

    color: var(--copper);
}


/* ═══════════════════════════════════════════════════════════════
   NEXT UPDATE
═══════════════════════════════════════════════════════════════ */

.news-list-placeholder {
    min-height: 112px;

    background:
        linear-gradient(var(--grid) 1px, transparent 1px),
        linear-gradient(90deg, var(--grid) 1px, transparent 1px);

    background-size: 28px 28px;
}


.news-list-placeholder:hover {
    padding-left: 20px;

    padding-right: 20px;

    background-color: var(--bg-alt);
}


.news-list-placeholder-copy {
    display: flex;

    flex-direction: column;

    gap: 5px;
}


.news-list-placeholder-copy > span {
    font-family: var(--font-mono);

    font-size: 8.5px;

    font-weight: 600;

    letter-spacing: .10em;

    color: var(--copper);
}


.news-list-placeholder-copy strong {
    font-family: var(--font-display);

    font-size: 18px;

    font-weight: 600;

    line-height: 1.25;

    color: var(--text);
}


.news-list-placeholder-copy p {
    margin: 0;

    color: var(--muted);

    font-size: 13px;

    line-height: 1.5;
}


.news-list-placeholder-mark {
    justify-self: end;

    width: 38px;

    height: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid var(--line);

    border-radius: 50%;

    font-family: var(--font-mono);

    font-size: 17px;

    color: var(--copper);

    background: var(--panel);

    transition:
        transform .2s ease,
        border-color .2s ease;
}


.news-list-placeholder:hover .news-list-placeholder-mark {
    transform: rotate(90deg);

    border-color: var(--copper);
}


/* ═══════════════════════════════════════════════════════════════
   BOTTOM CTA
═══════════════════════════════════════════════════════════════ */

.news-cta {
    display: flex;

    justify-content: space-between;

    align-items: center;

    gap: 40px;

    margin-top: 58px;

    padding: 36px 42px;

    background:
        radial-gradient(
            ellipse 65% 120% at 100% 0%,
            rgba(201,106,30,.12),
            transparent
        ),
        var(--bg-alt);

    border: 1px solid var(--line);

    border-radius: 12px;
}


.news-cta-copy > span {
    font-family: var(--font-mono);

    font-size: 9px;

    font-weight: 600;

    letter-spacing: .12em;

    color: var(--copper);
}


.news-cta h2 {
    margin: 9px 0 8px;

    font-size: clamp(24px, 3vw, 34px);

    line-height: 1.15;
}


.news-cta p {
    max-width: 560px;

    margin: 0;

    color: var(--muted);

    font-size: 14px;

    line-height: 1.6;
}


.news-cta .btn {
    flex-shrink: 0;

    display: inline-flex;

    align-items: center;

    gap: 8px;
}


.news-cta .btn span {
    font-size: 14px;
}


/* ═══════════════════════════════════════════════════════════════
   TABLET
═══════════════════════════════════════════════════════════════ */

@media (max-width: 1050px) {

    .news-feature {
        grid-template-columns: 1fr;
    }


    .news-feature-image {
        min-height: 360px;

        max-height: 400px;

        border-right: 0;

        border-bottom: 1px solid rgba(255,255,255,.08);
    }


    .news-feature-content {
        padding: 38px;
    }


    .news-list-item {
        grid-template-columns:
            65px
            80px
            minmax(0, 1fr)
            110px;

        gap: 18px;
    }

}


/* ═══════════════════════════════════════════════════════════════
   MOBILE
═══════════════════════════════════════════════════════════════ */

@media (max-width: 720px) {

    .news-header {
        margin-bottom: 32px;
    }


    .news-header-main p {
        font-size: 15px;

        line-height: 1.65;
    }


    /* FEATURE */

    .news-feature {
        border-radius: 12px;
    }


    .news-feature-image {
        min-height: 280px;

        max-height: none;
    }


    .news-feature-content {
        padding: 28px 22px;
    }


    .news-feature-meta {
        flex-direction: column;

        align-items: flex-start;

        gap: 9px;

        margin-bottom: 18px;
    }


    .news-feature h2 {
        font-size: 30px;
    }


    .news-feature-intro {
        font-size: 14.5px;

        line-height: 1.65;
    }


    /* EVENT DETAILS */

    .news-event-details {
        grid-template-columns: 1fr;
    }


    .news-event-detail,
    .news-event-detail:first-child {
        padding: 12px 0;

        border-right: 0;

        border-bottom: 1px solid rgba(255,255,255,.10);
    }


    .news-event-detail:last-child {
        border-bottom: 0;
    }


    /* BUTTONS */

    .news-feature-actions {
        flex-direction: column;
    }


    .news-feature-actions .btn {
        width: 100%;

        justify-content: center;

        text-align: center;
    }


    /* LATEST HEADER */

    .news-latest-header {
        flex-direction: column;

        align-items: flex-start;

        gap: 16px;

        margin-top: 46px;

        margin-bottom: 22px;
    }


    .news-latest-header > p {
        max-width: 100%;
    }


    /* NEWS LIST */

    .news-list-item {
        grid-template-columns: 48px 1fr;

        gap: 14px;

        padding: 22px 0;
    }


    .news-list-index {
        grid-column: 1;

        grid-row: 1 / span 3;
    }


    .news-list-date {
        grid-column: 2;

        grid-row: 1;

        flex-direction: row;

        align-items: baseline;

        gap: 7px;
    }


    .news-list-date span {
        margin: 0;
    }


    .news-list-date strong {
        font-size: 27px;
    }


    .news-list-date small {
        margin: 0;
    }


    .news-list-content {
        grid-column: 2;

        grid-row: 2;
    }


    .news-list-content h3 {
        font-size: 19px;
    }


    .news-list-content p {
        font-size: 13.5px;
    }


    .news-list-action {
        grid-column: 2;

        grid-row: 3;

        justify-self: start;

        margin-top: 3px;
    }


    /* PLACEHOLDER */

    .news-list-placeholder {
        grid-template-columns: 48px 1fr;
    }


    .news-list-placeholder-copy {
        grid-column: 2;
    }


    .news-list-placeholder-mark {
        display: none;
    }


    /* CTA */

    .news-cta {
        flex-direction: column;

        align-items: flex-start;

        gap: 24px;

        margin-top: 48px;

        padding: 30px 24px;
    }


    .news-cta .btn {
        width: 100%;

        justify-content: center;
    }

}


/* ═══════════════════════════════════════════════════════════════
   SMALL MOBILE
═══════════════════════════════════════════════════════════════ */

@media (max-width: 420px) {

    .news-feature-content {
        padding: 24px 18px;
    }


    .news-feature h2 {
        font-size: 28px;
    }


    .news-image-overlay {
        left: 16px;

        right: 16px;

        bottom: 16px;
    }


    .news-latest-title h2 {
        font-size: 29px;
    }


    .news-cta {
        padding: 26px 20px;
    }

}

</style>

@endpush