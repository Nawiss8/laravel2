<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un seul personnage </title>
    <style></style>
</head>
<body>
<ul>
    <li>{{ $chararcterpop->id }}</li>
    <li>{{ $chararcterpop->name }}</li>
    <li>{{ $chararcterpop->price }}</li>
    <li>{{ $chararcterpop->image }}</li>
    <li>{{ $chararcterpop->description }}</li>
    <li>{{ $chararcterpop->created_at }}</li>
    <li>{{ $chararcterpop->updated_at }}</li>
</ul>
</body>
</html>
