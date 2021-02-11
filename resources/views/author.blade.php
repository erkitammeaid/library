<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <div class="flex justify-content:center">
            <div class="p-1">Autori nimi:</div>
            <div class="p-1">{{ $author-> first_name }} {{ $author->last_name }}</div>
        </div>
        <div class="flex justify-content:center">
            <div class="p-1">Kirjutatud raamatud:</div>
            <div>@foreach($author->books as $book)
            <div class="p-1">{{ $book->title }}</div>
            @endforeach</div>
        </div>
        </div>
    </div>
</body>
</html>
