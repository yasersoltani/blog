<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>تکست کده {{ $title ?? '' }}</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('forms/Registration/styles.css') }}">
</head>
<body>
    {{ $slot }}
</body>
</html>
