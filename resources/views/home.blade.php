<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>

    <!-- Google fonts cdn -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- My custom style -->
    <link rel="stylesheet" href="/css/app.css">
    <meta charset="UTF-8">
    <title>laravel-migration-seeder</title>
</head>
<body>
    @foreach($pacchetti as $key => $pacchetto)
        <div>
            <p>Nome: {{$pacchetto->nome}}</p>
            <p>Destinazione: {{$pacchetto->destinazione}}</p>
            <p>Prezzo: {{$pacchetto->prezzo}}€</p>
            <p>Estero: {{$pacchetto->estero}}</p>
        </div>
    @endforeach



</body>
<!-- laravel-migration-seeder - 19/05/21
 Author: lorenzobernini -->
</html>
