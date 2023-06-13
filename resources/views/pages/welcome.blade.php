<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
            <div class="row">
                @foreach ($trains as $el )
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $el->company }}</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <span>{{ $el->departure_station }}</span>
                                    </div>
                                    <div class="col-6">
                                        <span>{{ $el->arrival_station }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>

</body>

</html>