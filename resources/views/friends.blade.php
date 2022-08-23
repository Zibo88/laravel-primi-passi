<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao, questi sono i dati della classe</h1>
    <div>
        <ul>
            <li> Classe: {{$class}}</li>
            <li> Scuola: {{$school}}</li>
            <li> Città: {{$city}}</li>
            <li>
                Migliori amici:
                @foreach($myFriends as $friend)
                {{$friend}}@if(!$loop->last) , @endif
                @endforeach
            </li>
        </ul>
    </div>

    <a href="">vai alla home</a>


</body>
</html>