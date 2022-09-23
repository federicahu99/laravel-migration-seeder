<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <section>
        @foreach($trains as $train)
        <h1> {{ $train->company }} </h1>
        <h4> {{ $train->from }} </h4>
        <h4> {{ $train->to }} </h4>
        <h4> {{ $train->arrival }} </h4>
        <h4> {{ $train->train_code }} </h4>
        <h4> {{ $train->arrival }} </h4>
    @endforeach
    </section>

</body>

</html>