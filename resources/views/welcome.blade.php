<!DOCTYPE html>
<html>
<head>
    <title>Bookstore Test</title>
</head>
<body>
   <ul>
       @foreach($books as $book)
           <li>{{$book}}</li>
       @endforeach
   </ul>
</body>
</html>
