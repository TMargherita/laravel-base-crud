@extends('layout')
@section('content')


<body>
  @foreach($books as $book)
  <div>
    <h2>{{ $book->title }}</h2>
    <h3>{{ $book->author }}</h3>
    <small>{{ $book->edition }}</small>
    <img src="{{ $book->image }}" alt="">
  </div>
  @endforeach
</body>


@endsection 