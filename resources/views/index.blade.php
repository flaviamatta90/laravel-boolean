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
        @foreach ($students as $student)
        <div class="studenti">
            <h3>Nome:</h3> {{$student->name}}
            <h3>Cognome:</h3> {{$student->lastname}}
            <h3> Sesso: </h3>{{$student->gender}}
            <h3>Data di Nascita: </h3> {{$student->date_of_birth}}
        </div>

        @endforeach
    </table>
</body>
</html>