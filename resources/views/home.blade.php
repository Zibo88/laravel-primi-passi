<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>Benvenuto nella nostra concessionaria</h1>
        <ul>
            Vai a:
            <li>
                <a href="{{route ('friends')}}"> Friends </a>
            </li>
            <li>
                <a href="{{route ('enemy')}}"> Enemy</a>
            </li>
        </ul>
    </header>
   
    
    <div> ti presentiamo quest'auto</div>

    <ul>
        <!-- stampo in pagina le caratteristiche dell'auto -->
        <li> Nome: {{$name}}</li>
        <li>Modello: {{$model}}</li>
        <li>Anno di immatricolazione: {{$year}}</li>
    </ul>

    {{-- creo ciclo foreach per leggere l'interno dell'array --}}
    <div>
        @foreach ($dealerships as $dealership)
        {{-- stampo i risultati --}}
                                {{-- se non è l'ultimo elemento dell'array stampa la virgola --}}
           {{$dealership}}@if(!$loop->last) , @endif
        @endforeach
    </div>



   

</body>
</html>