<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      @vite(['resources/css/app.css','resources/js/app.js'])
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
    
<h1 class="text-center">TABELLONE TRENI</h1>
<div class="contenitore">
  <div class="row">
    <div class="col textfont-bold text-3xl md:text-5xl lg:text-7xl uppercase h-fit transition duration-500 pt-8">
      <div>Torino</div>
      <div>Porta Nuova</div>
      <hr>
    </div>
  </div>
</div>
<div class="contenitore">
  <div class="row">
    <div class="col">
      <table class= "table-auto w-full text-center border-collapse border border-gray-400">
    <tr>
        <th>Azienda</th> 
        <th>Partenza</th> 
        <th>Arrivo</th>
        <th>Orario di partenza</th>
        <th>Orario di arrivo</th>
        <th>codice treno</th>
        <th>carrozze</th>
   
    </tr>
    @foreach ($trains as $train) 
    <tr>
      <td>{{ $train->azienda }}</td> 
      <td>{{ $train->stazione_partenza}}</td> 
      <td>{{ $train->stazione_arrivo }}</td>
      <td>{{ $train->orario_arrivo }}</td>
      <td>{{ $train->orario_partenza }}</td>
      <td>{{ $train->codice_treno }}</td>
      <td>{{ $train->totale_carrozze }}</td>
      </td>
    </tr>    
    @if ($train->cancellato ==1)
    <tr>
      <td colspan="7" class="text-center">CANCELLATO</td>
     </tr>
     @elseif ($train->in_orario ==1)
      <tr>
         <td colspan="7" class="text-center">IN ORARIO</td>
      </tr>

    @endif  
     @endforeach
  </div>
   </table>
  </div>
</div>

      
       
</body>
</html>