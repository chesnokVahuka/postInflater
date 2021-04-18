<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Deletepage</title>
</head>
<body>
@isset ($files)

   @foreach ($files as $file)
 
    <div class="w-full max-w-xs mx-auto">
        <img src="{{ asset($file) }}" alt="">
    </div>
   @endforeach
@endisset

</body>
</html>