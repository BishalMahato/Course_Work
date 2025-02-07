
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Layout</title>
    @vite("resources/css/app.css")
    @livewireStyles
</head>
<body>
    @livewire('navbar')
   
    
  <div>
    @yield('content')
    {{$slot}}
  </div>
  
  
    @livewireScripts
</body>
</html>


