<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="display: flex; flex-direction: column; min-height: 100vh;">
    <x-navbar></x-navbar>
    <main style="flex: 1;">
        {{$slot}}
    </main>
    <x-footer></x-footer>
</body>

</html>