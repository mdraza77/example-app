<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome, {{ $name ?? "Guest"}}</h1>
    <!-- <h1>{{ date('d-m-y')}}</h1>
    Welcome, {{ $demo }}
    <h1>Welcome, {!! $demo !!}</h1>
    @if($name == ""){
        {{"Empty"}}
    }
    @elseif($name == "raza") {
        {{"Name is raza"}}
    }
    @else {
        {{"Name is not raza"}}
    }
    @endif -->
    <!-- @unless ($name == "raza")
        <h1>Name is not raza</h1>
    @endunless -->

    @isset($name)
        <h1>{{$name}} Name is set</h1>
    @endisset
    
</body>
</html>