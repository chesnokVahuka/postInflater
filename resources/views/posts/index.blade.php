<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Posts</title>
</head>
<body>
    <div class="w-full max-w-xs mx-auto">
        @foreach ($posts as $post)       
            <div class="mx-auto">
                <p>
                   {{ $post['text'] }}
                </p>
            </div>
        @endforeach
    </div>
</body>
</html>