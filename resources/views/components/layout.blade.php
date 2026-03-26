<!doctype html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Cinema</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />

    <main class="py-5">
        <div class="container">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
