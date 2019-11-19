<!DOCTYPE html>
<html>
    <head>
        <title>Editer</title>
    </head>
    <body>
        <form action="{{ route('articles.update', $car) }}" method="post">

        {{ csrf_field() }}

            <input type="hidden" name="_method" value="PUT">
            
            <input type="text" name="name" placeholder="name" value="{{ $car->make }}">
            <input type="text" name="price" placeholder="price" value="{{ $car->model }}">
            <input type="text" name="description" placeholder="description" value="{{ $car->produced_on }}">
            <input type="submit" value="Modify your article">
        </form>

        <p><a href="http://localhost:3000/articles">Annuler</a></p>
    </body>
</html>