<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Occhio del Reporter' }}</title>

    @vite (['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://kit.fontawesome.com/0723cff916.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Nunito+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Playfair+Display:wght@400;500;600&family=Tinos:wght@400;700&display=swap" rel="stylesheet">


</head>

<body>


    <x-navbar />


    {{ $slot }}









    <x-footer />

</body>

</html>
