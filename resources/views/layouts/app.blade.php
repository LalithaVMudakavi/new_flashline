<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield(
            'title',
            'Flashline EMS — Electronics Manufacturing Services | PCB Fabrication to Box Build'
        )
    </title>

    <meta
        name="description"
        content="@yield(
            'description',
            'Flashline EMS is a turnkey electronics manufacturing partner — PCB design, fabrication up to 60-layer HDI, SMT assembly down to 01005, and complete box-build. 100,000+ sq ft facility, ISO 9001 & AS9100D processes.'
        )"
    >

    <!-- Google Fonts -->

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <!-- Favicon -->

    <link
        rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='6' fill='%23f7f5f1'/><path d='M8 22 L14 10 L18 10 L24 10 L18 22 Z' fill='%23c96a1e'/></svg>"
    >

    <!-- Vite CSS + JavaScript -->

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('styles')

</head>

<body>

    @include('layouts.navbar')

    <main id="top">

        @yield('content')

    </main>

    @include('layouts.footer')

    @stack('scripts')

</body>

</html>