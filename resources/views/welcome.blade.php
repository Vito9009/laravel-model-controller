<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main>
        <div class="film-container">
            @foreach ($dbtab as $item)
                <div class="my_card-film-container">
                    <h3>{{$item['title']}}</h3>

                    <ul>
                        <li><b>Titolo originale:</b> {{$item['original_title']}}</li>
                        <li><b>Anno:</b> {{$item['date']}}</li>
                        <li><b>Voto:</b> {{$item['vote']}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>