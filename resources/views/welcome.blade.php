<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Model Controller</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container mt-5">
                <div class="row">
                    @foreach ($movies as $movie)
                        <div class="col-3">
                            <div class="card mb-4">
                                <ul>
                                    <li>
                                        ID: {{ $movie->id }}
                                    </li>
                                    <li>
                                        TITLE: {{ $movie->title }}
                                    </li>
                                    <li>
                                        ORIGINAL TITLE: {{ $movie->original_title }}
                                    </li>
                                    <li>
                                        NATIONALITY: {{ $movie->nationality }}
                                    </li>
                                    <li>
                                        RELEASE DATE: {{ $movie->date }}
                                    </li>
                                    <li>
                                        VOTE: {{ $movie->vote }}
                                    </li>
                                </ul>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </main>

    </body>
</html>
