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

 
   <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" ></script>
           
   <!-- after -->
   
   @livewireScripts
   @powerGridScripts
    </body>
    </html>
