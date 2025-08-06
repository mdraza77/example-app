<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{__("I love programming.")}} --}}
@lang('I love programming.')

    <h1>{{ __('I love programming.') }}</h1>
    <p>{{ __('I love programming.') }}</p>

    <a href="{{ url('/es') }}">Spanish</a>
    <a href="{{ url('/en') }}">English</a>
</body>
</html>