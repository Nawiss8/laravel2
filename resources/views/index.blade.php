<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tous les stpersonnages POP </title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Check more</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chararcterpop as $chararcterpop)
                <tr>
                    <td>{{ $chararcterpop->id }}</td>
                    <td>{{ $chararcterpop->name }}</td>
                    <td>{{ number_format($chararcterpop->price / 100, 2) }} €</td>
                    <td><a href="/chararcterpop/{{ $characterpop->id }}">+ details</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
