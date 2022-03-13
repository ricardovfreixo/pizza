<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iPizzaMaker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    @livewireStyles
</head>
<body>
<div class="container mb-2 has-text-grey-light">Pizza Maker</div>
{{ $slot }}
<div class="container mt-5">
    <small class="has-text-light">proof of concept</small>
</div>
@livewireScripts
</body>
</html>
