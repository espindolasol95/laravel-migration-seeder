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
<div class="contenitore ">
  <div class="row">
    <div class="col">
      <table class= "table-auto w-full text-center">
   <tr >
    <th class="p-5">Azienda</th>
    <th class="p-5">Partenza</th>
    <th class="p-5">Arrivo</th>
    <th class="p-5">Orario partenza</th>
    <th class="p-5">orario arrivo</th>
    <th class="p-5">codice treno</th>
    <th class="p-5">carrozze</th>

    <th class="p-5">Stato</th>

</tr>
    @foreach ($trains as $train) 
    <tr>
      <td class="p-3" >{{ $train->azienda }}</td> 
      <td class="p-3">{{ $train->stazione_partenza}}</td> 
      <td class="p-3">{{ $train->stazione_arrivo }}</td>
      <td class="p-3">{{ $train->orario_partenza }}</td>
      <td class="p-3">{{ $train->orario_arrivo }}</td>
      <td class="p-3">{{ $train->codice_treno }}</td>
      <td class="p-3">{{ $train->totale_carrozze }}</td>
      
       
    <td class="p-3">
    @if ($train->cancellato) 
         CANCELLATO
    @elseif (!$train->in_orario)
         RITARDO
    @else
         IN ORARIO
    @endif
</td>
 </tr>    
     @endforeach
  </div>
   </table>
  </div>
</div>

      
       
</body>
</html>