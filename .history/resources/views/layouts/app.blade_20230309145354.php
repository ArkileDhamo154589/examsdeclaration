<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Check </title>
    <script src="https://cdn.tailwindcss.com"></script>
    

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

    </body>
    </html>
