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
                @foreach ($post->resources as $image)
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src={{asset('storage/'. $image['path'])}} alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                @endforeach               
            </div>
        @endforeach
    </div>
</body>
</html>