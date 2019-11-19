<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="{{ route('shop.deletes') }}" method="post">
        
        {{ csrf_field() }}
            <input type="file" name="image">
            <input type="text" name="campus_id" placeholder="campus_id">
            <input type="text" name="category_id" placeholder="category_id">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="price" placeholder="price">
            <input type="text" name="description" placeholder="description">
            <input type="submit" value="Confirm your article">
        </form>

        <p><a href="http://localhost:3000/shop">Annuler</a></p>
    </body>
</html>