<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Check </title>
   

  <!-- Styles -->
  @livewireStyles
  @powerGridStyles
</head>
    <body>
        <div class="bg-white">
            {{$slot}}
        </div>
   <!-- Scripts -->
   @livewireScripts
   @powerGridScripts
   <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
           integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
           crossorigin="anonymous"></script>
           
   <!-- after -->
   @powerGridScripts
    </body>
    </html>
