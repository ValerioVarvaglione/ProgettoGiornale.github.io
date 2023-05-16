<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <meta http-ewuiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Abbiamo ricevuta una richiesta</h1>
    <h3>Richiesta per il ruolo di: {{$info['role']}}</h3>
    <p>Ricevuta da: {{$info['email']}}</p>

    <h4>Messaggio:</h4>
    <p>{{$info['message']}}</p>
</body>
</html>