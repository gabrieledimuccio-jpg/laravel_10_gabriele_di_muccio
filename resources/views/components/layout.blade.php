@props(['navColor' => 'text-white'])
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="body-custom">
<x-navbar :link-color="$navColor" />

{{ $slot }}
<x-footer></x-footer>

</body>
</html>