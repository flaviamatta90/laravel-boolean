<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>STUDENTS</title>
</head>
<body>
    <h1>ELENCO STUDENTI</h1>
    <table>
        @foreach ($students as $student)
            <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->date_of_birth}}</td>

            </tr>
        @endforeach
    </table>
</body>
</html>