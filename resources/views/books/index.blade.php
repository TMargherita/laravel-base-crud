<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  @foreach($books as $book)
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ $book->image }}" alt="Card image cap">
    <div class="card-body">
      <ul>
        <li><h2>{{ $book->title }}</h2></li>
        <li><h3>{{ $book->author }}</h3></li>
        <li><small>{{ $book->edition }}</small></li>
      </ul>
    </div>
  </div>
  @endforeach
</body>

</html>