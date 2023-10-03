<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? ''}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!--  @livewireStyles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <main class="d-flex flex-column min-vh-100">
        <div class="mt-5" style="position: fixed; z-index: 99">
            <x-navbar />
        </div>

        <div>
            {{ $slot }}
        </div>

        <div class="mt-auto">
            <x-footer />
        </div>
    </main>


    <script src="https://kit.fontawesome.com/747222a0ae.js" crossorigin="anonymous"></script>
    <!-- @livewireScripts -->

</body>

</html>