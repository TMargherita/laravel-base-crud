<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($books as $book)
        <h2>{{$book-> $title}}</h2>
        <h3></h3>
        <small></small>
        
    @endforeach
</body> 
</html>