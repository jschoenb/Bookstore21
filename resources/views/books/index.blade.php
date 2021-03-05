<!DOCTYPE html>
<html>
<head>
    <title>Bookstore Test</title>
</head>
<body>
<ul>
    @foreach($books as $book)
        <li><a href="books/{{$book->id}}">{{$book->title}}</a> </li>
    @endforeach
</ul>
</body>
</html>
