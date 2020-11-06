<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scheda Libro</title>
</head>
<body>
    <div class="card-text">
        <ul>
            <li> Copertina: {{$book->image}}</li>
            <li>Titolo: {{$book->title}}</li>
            <li>Autore: {{$book->author}}</li>
            <li>Anno di pubblicazione: {{$book->year}}</li>
            <li>Casa editrice: {{$book->edition}}</li>
            <li>Genere: {{$book->genre}}</li>
            <li>Numero di pagine: {{$book->pages}}</li>
        </ul>
    </div>
    <div class="form-group">
        <form action="{{route("books.destroy", $book->id)}}" method="POST">
        
        @method("DELETE")
         @csrf
            <input type="submit" value="Cancella">
        </form>
    </div>
    <a href="{{route("books.index", $book->id)}}">Home</a>
</body>
</html>