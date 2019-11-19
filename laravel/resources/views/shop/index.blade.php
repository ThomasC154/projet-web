<!DOCTYPE html>
<html>
    <head>
        <title>Articles</title>
    </head>
    <body>
        @foreach ($articles as $article)
    <h1>Article {{ $article->id }}</h1>
        <ul>
        <li>{{ $article->image }}</li>
        <li>Name: {{ $article->name }}</li>
        <li>Price: {{ $article->price }}</li>
        <li>Description: {{ $article->description }}</li>
        </ul>
        @endforeach
    </body>
</html>